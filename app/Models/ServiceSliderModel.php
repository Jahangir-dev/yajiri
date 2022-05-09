<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSliderModel extends Model
{
    use HasFactory;
    protected $table='serviceslider';


    protected $fillable = [
        'file',
        'filename',
       
    ];
}
