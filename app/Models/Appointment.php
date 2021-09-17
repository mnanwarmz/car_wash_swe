<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getDurationAttribute(){
        return $this->end_at->diffInMinutes($this->start_at);
    }
    public function getPriceAttribute(){
        return  $this->duration * $this->rate;
    }
}
