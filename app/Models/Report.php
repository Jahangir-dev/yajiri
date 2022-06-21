<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'reporter_id', 'user_id', 'reason'
    ];

    public function reporter()
    {
        return $this->hasOne('App\Models\User','id','reporter_id');
    }

    public function user()
    {
        return $this->hasOne('App\Models\User','id','user_id');
    }
}
