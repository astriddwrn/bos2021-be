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

    protected $hidden = ['link1', 'link2', 'created_at', 'updated_at'];

    public function formatting_date(){
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->date)->format('l, d F, Y H:i');
    }

    public function start_date(){
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->date)->format('H:i');
    }

    public function end_date(){
        if($this->campus == "Kemanggisan")
            return Carbon::createFromFormat('Y-m-d H:i:s', $this->date)->addMinutes(120)->format('H:i');
        else if($this->campus == "Alam Sutera")
            return Carbon::createFromFormat('Y-m-d H:i:s', $this->date)->addMinutes(145)->format('H:i');
        else if($this->campus == "Bandung")
            return Carbon::createFromFormat('Y-m-d H:i:s', $this->date)->addMinutes(115)->format('H:i');
        else if($this->campus == "Malang")
            return Carbon::createFromFormat('Y-m-d H:i:s', $this->date)->addMinutes(115)->format('H:i');
    }

    public function users() {
        return User::whereJsonContains('schedule', $this->id)->get();
    }

    public function count_users() {
        return User::whereJsonContains('schedule', $this->id)->count();
    }
}

