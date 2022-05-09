<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TwillioLimit extends Model
{
    use HasFactory;
    protected $table = "twillio_number_limit";
}
