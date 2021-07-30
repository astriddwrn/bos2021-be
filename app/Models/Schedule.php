<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Carbon;
use App\Models\User;

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

    public function formatting_date(){
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->date)->format('l, d F, Y H:i');
    }

    public function users() {
        return User::whereJsonContains('schedule', $this->id)->get();
    }

    public function count_users() {
        return User::whereJsonContains('schedule', $this->id)->count();
    }
}

