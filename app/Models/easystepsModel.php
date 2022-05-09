<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class easystepsModel extends Model
{
    use HasFactory;
    protected $table="easystepstofind";


    protected $fillable = [
        'title',
        'file',
       
    ];
}
