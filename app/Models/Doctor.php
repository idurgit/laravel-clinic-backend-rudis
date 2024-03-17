<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

            // $table->string('doctor_name');
            // $table->string('doctor_specialist');
            // $table->string('doctor_phone');
            // $table->string('doctor_email');
            // $table->string('doctor_photo')->nullable();
            // $table->string('doctor_address')->nullable();
            // $table->string('doctor_sip');

    protected $fillable = [
        'doctor_name',
        'doctor_specialist',
        'doctor_phone',
        'doctor_email',
        'photo',
        'address',
        'sip',
        'is_ihs',
        'nik',
    ];
}
