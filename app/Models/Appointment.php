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
        'type_name'
    ];

    // Get the duration by using carbon's diff function.
    public function getDurationAttribute()
    {
        return Carbon::parse($this->start)->diffInMinutes($this->end);
    }
    public function getPriceAttribute()
    {
        return  $this->duration * $this->rate;
    }
    public function getStartAttribute()
    {
        return Carbon::parse($this->start_at);
    }
    public function getEndAttribute()
    {
        return Carbon::parse($this->end_at);
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
}
