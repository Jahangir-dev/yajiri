<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublishRequest extends Model
{
    use HasFactory;
    protected $table='publish_request';


    public function user()
    {
        return $this->hasOne('App\Models\User','id','auth_id');
    }
    public function category_rel()
    {
       return $this->hasOne('App\Models\Category','id','category');
    }

     public function user_fvrt()
    {
       return $this->hasOne('App\Models\FavRequestModel','request_id','id')->where('whomtoshow',\Auth::user()->id);
    }


}
