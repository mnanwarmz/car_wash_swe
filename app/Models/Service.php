<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Vehicle()
    {
        return $this->belongsToMany(Vehicle::class);
    }

    public function AppointmentType()
    {
        return $this->belongsToMany(AppointmenType::class);
    }

}
