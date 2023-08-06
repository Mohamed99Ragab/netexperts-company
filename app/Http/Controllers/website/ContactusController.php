<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Mail\ContactUsMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactusController extends Controller
{

    public function saveData(Request $request){


        $validator = Validator::make($request->all(), [
            'phone_number'=>'required',
            'email'=>'required|email',
            'message'=>'required',
        ]);

        if ($validator->fails()) {

            session()->flash('error',$validator->errors()->first());
            return back();

        }


        $data = Contact::create([
            'phone_number'=>$request->phone_number,
            'email'=>$request->email,
            'message'=>$request->message
        ]);

//        send data via email to admin
        $this->sendToMail($data);

        session()->flash('success','Thanks Data is send , admin will contact with you..');
        return redirect('/');



    }


   public function sendToMail($dataToSend){

        Mail::to('mohamedragabelgwile010@gmail.com')->send(new ContactUsMail($dataToSend));



   }
}
