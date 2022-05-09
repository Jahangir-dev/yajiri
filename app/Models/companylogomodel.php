<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companylogomodel extends Model
{
    use HasFactory;
    protected $table="companylogos";


    protected $fillable = [
        'file',
       
    ];
}
