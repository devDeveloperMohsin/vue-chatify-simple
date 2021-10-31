<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = ['to_user','from_user','message','attachment'];

    // From user
    public function fromUser(){
        return $this->belongsTo(User::class,'from_user');
    }

    // To user
    public function toUser(){
        return $this->belongsTo(User::class,'to_user');
    }
}
