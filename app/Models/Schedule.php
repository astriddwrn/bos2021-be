<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Carbon;

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

    // ref: https://stackoverflow.com/a/24441480/5832341
    public function GetDateAttribute($date){
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('l, d F, Y H:i');
    }

    public function users() {
        return $this->hasOne('App\Models\User');
    }
}

