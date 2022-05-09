<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TwillioVerificationCode extends Model
{
    use HasFactory;
    protected $table = 'twillio_code_verification';
}
