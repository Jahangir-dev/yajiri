<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RangeModel extends Model
{
    use HasFactory;
    protected $table="range";

    protected $fillable = [
        'distance',
        'user_id',
       
    ];
}
