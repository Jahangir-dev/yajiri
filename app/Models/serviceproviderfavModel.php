<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class serviceproviderfavModel extends Model
{
    use HasFactory;

    protected $table="serviceproviderfav";

    protected $fillable = [
        'userid',
        'user_favid',
    ]; 


     public function user_d()
    {
       return $this->hasOne('App\Models\User','id','userid');
    }


     public function provider_d()
    {
       return $this->hasOne('App\Models\User','id','user_favid');
    }

}
