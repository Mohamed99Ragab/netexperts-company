<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillalble =[
        'name',
        'description',
        'end_date_time',
        'status',
        'user_id',
        'manger_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function manager()
    {
        return $this->belongsTo(User::class,'manger_id');
    }
}
