<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicles';
    protected $guarded = [];
    protected $with = ['type'];

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($vehicle) { // before delete() method call this
            $vehicle->appointments()->delete();
            // do the rest of the cleanup...
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
    public function type()
    {
        return $this->belongsTo('App\Models\VehicleType', 'vehicle_type_id');
    }
}
