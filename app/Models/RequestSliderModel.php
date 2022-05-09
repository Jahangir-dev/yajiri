<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestSliderModel extends Model
{
    use HasFactory;
    protected $table="requestslider";

    protected $fillable = [
        'file',
        'filename',
       
    ];
}
