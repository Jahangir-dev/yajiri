<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['message'];

    public function from_user()
    {
      return $this->hasOne(User::class,'id','user_id');
    }

  public function to_user()
    {
      return $this->hasOne(User::class,'id','to_user_id');
    }    

}
    