<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\PasswordReset;

use App\Models\Schedule;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullName',
        'email',
        'password',
        'gender',
        'placeBirth',
        'birthDate',
        'domicile',
        'address',
        'batch',
        'whatsapp',
        'line_id',
        'nim',
        'campus',
        'major',
        'schedule',
        'lnt_course',
        'payment_pic',
        'is_reregistered',
        'is_esport',
        'personal_email'
    ];

    // ref: https://stackoverflow.com/a/24441480/5832341
    // ref: https://laravel.com/docs/8.x/eloquent-mutators#defining-an-accessor
    public function getScheduleAttribute($schedule){
        return json_decode($schedule);
    }

    // ref: https://stackoverflow.com/a/37857795/5832341
    // ref: https://laravel.com/docs/8.x/eloquent-mutators#defining-a-mutator
    public function setScheduleAttribute($schedule){
        $this->attributes['schedule'] = json_encode($schedule);
    }

    public function schedules() {
        return Schedule::find($this->schedule);
    }

    public function member() {
        return $this->belongsTo('App\Models\Member');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Send the password reset notification.
    *
    * @param string $token
    * @return void
    */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PasswordReset($token, $this->email));
    }
}
