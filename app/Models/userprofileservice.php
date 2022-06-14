<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userprofileservice extends Model
{
    use HasFactory;
    protected $table="userprofileservice";

    
    public function provider_d()
    {
        return $this->hasOne(User::class,'id','userid');
    }
}
