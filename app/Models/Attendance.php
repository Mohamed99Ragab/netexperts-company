<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $table = [
        'user_id',
        'is_attend',
        'behavior',
        'date_of_attendance'
    ];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
