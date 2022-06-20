<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class serviceproviderreview extends Model
{
    use HasFactory;
    protected $table="serviceproviderreview";

    public function service_provider()
    {
        return $this->hasOne('App\Models\User','id','serviceprodiverid');
    }

    public function user()
    {
        return $this->hasOne('App\Models\User','id','user_id');
    }
}
