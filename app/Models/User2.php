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

    public $date_non_formatted;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["status"];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // email_verified_at, created_at, updated_at

    public function getScheduleAttribute($schedule){
        $schedule = json_decode($schedule);

        $schedules = [];

        foreach($schedule as $i=>$id){
            $schedules[$i] = Schedule::find($id)->text;
        }

        return $schedules;
    }

    public function getIsEsportAttribute($is_esport){
        if($is_esport == 'yes') return "Esport";
        return '';
    }

    public function getEmailVerifiedAtAttribute($date){
        if($date == null) return "NULL";
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format("l, d F, Y\n H:i:s");
    }

    public function getCreatedAtAttribute($date){
        return Carbon::createFromFormat('Y-m-d\TH:i:s.u\Z', $date)->format('l, d F, Y');
        // return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('l, d F, Y');
    }

    public function getUpdatedAtAttribute($date){
        $this->date_non_formatted = $date;
        return Carbon::createFromFormat('Y-m-d\TH:i:s.u\Z', $date)->format('l, d F, Y');
        // return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('l, d F, Y');
    }

    public function format_updated_at(){
        // $date = $this->updated_at;
        // echo($this->date_non_formatted);
        return "";
        // return Carbon::createFromFormat('Y-m-d H:i:s', $this->date_non_formatted)
        //                 ->format('l, d F, Y');
    }
}
