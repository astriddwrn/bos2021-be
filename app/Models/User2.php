<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use App\Notifications\PasswordReset;

use App\Models\Schedule;

class User2 extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    // email_verified_at, created_at, updated_at

    public function getScheduleAttribute($schedule){
        $schedule = json_decode($schedule);

        $schedules = [];

        foreach($schedule as $i=>$id){
            $schedules[$i] = Schedule::find($id)->text;
        }

        return $schedules;
    }

    public function getEmailVerifiedAtAttribute($date){
        if($date == null) return "NULL";
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('l, d F, Y<b\r />H:i:s');
    }

    public function getCreatedAtAttribute($date){
        return Carbon::createFromFormat('Y-m-d\TH:i:s.u\Z', $date)->format('l, d F, Y');
    }

    public function getUpdatedAtAttribute($date){
        return Carbon::createFromFormat('Y-m-d\TH:i:s.u\Z', $date)->format('l, d F, Y');
    }
}
