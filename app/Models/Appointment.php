<?php

namespace App\Models;

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

    public function getDurationAttribute()
    {
        return $this->end_at->diffInMinutes($this->start_at);
    }
    public function getPriceAttribute()
    {
        return  $this->duration * $this->rate;
    }
    public function getStartAttribute()
    {
        return $this->start_at->format('Y-m-d H:i:s');
    }
    public function getEndAttribute()
    {
        return $this->end_at->format('Y-m-d H:i:s');
    }
    public function getTypeNameAttrbute()
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
