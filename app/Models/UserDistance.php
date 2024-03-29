<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDistance extends Model
{
    use HasFactory;
    protected $table = 'user_distance';

    public $fillable = [
        'user_id',
        'lat',
        'lng',
        'distance'
    ];
}
