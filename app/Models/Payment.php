<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function appointment()
    {
        return $this->belongsToMany(Appointment::class);
    }

    public function appointment_type()
    {
        return $this->belongsToMany(AppointmentType::class);
    }
}
