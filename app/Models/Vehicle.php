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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function type()
    // {
    //     return $this->belongsTo('App\Models\VehicleType');
    // }

	// Vehicle has one vehicle type
	public function type()
	{
		return $this->belongsTo('App\Models\VehicleType', 'vehicle_type_id');
	}
}
