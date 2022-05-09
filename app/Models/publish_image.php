<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publish_image extends Model
{
    use HasFactory;
    protected $table='publish_images';
    protected $fillable = [
        'publish_id',
        'images',
        
    ];
}
