<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MomentsofLifeModel extends Model
{
    use HasFactory;
    protected $table="momentsoflife";


    protected $fillable = [
        'title',
        'file',
       
    ];
}
