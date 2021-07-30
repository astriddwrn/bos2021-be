<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'link1',
        'link2',
        'quota',
        'campus',
        'lnt_course'
    ];

    public function users() {
        return $this->hasOne('App\Models\User');
    }
}

