<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = [
        'start',
        'end',
        'duration',
        'price',
        // 'type_name'
    ];
	protected $with = ['types', 'vehicle'];

    // Get the duration by using carbon's diff function.
    public function getDurationAttribute()
    {
        return Carbon::parse($this->start)->diffInMinutes($this->end);
    }
    public function attachUser($userId)
    {
        $this->user_id = $userId;
    }
    public function detachUser()
    {
        $this->user_id = null;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getPriceAttribute()
    {
        return  $this->duration * $this->rate;
    }
    public function getStartAttribute()
    {
        return Carbon::parse($this->start_at)->format('d-n-Y h:iA');
    }
    public function getEndAttribute()
    {
        return Carbon::parse($this->end_at)->format('d-n-Y h:iA');
    }
    public function getTypeNameAttribute()
    {
        if ($this->type == 1)
            return "Branch";
        if ($this->type == 2)
            return "Rider";
    }
    public function location()
    {
        return $this->hasOne('App\Models\Location', 'id', 'location_id');
    }
    public function getIsBookedAttribute()
    {
        if ($this->user_id == null)
            return false;
        else
            return true;
    }

    public function types()
    {
        return $this->belongsToMany('App\Models\AppointmentType', 'appointment_appointment_types', 'appointment_id', 'appointment_type_id');
	}

	public function vehicle()
	{
		return $this->belongsTo('App\Models\Vehicle', 'vehicle_id');
	}
}
