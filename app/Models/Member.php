<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

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
        'lnt_course',
        'bnccid',
        'linkedinUrl',
        'githubUrl',
        'ktp-upload',
        'fyp-upload'
    ];
}
