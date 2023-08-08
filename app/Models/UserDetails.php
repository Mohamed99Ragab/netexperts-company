<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'department_id',
        'sallery',
        'bones',
        'minus',
        'phone',
        'work_status',
        'national_id',
        'bank_account',
        'bank_account_image',
        'image',
        'contract_image',
        'national_id_image',
        'website_url',
        'join_date'
    ];
    public $timestamp = false; 

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function department()
    {
        return $this->belongsTo(Department::class,'department_id');
    }
}
