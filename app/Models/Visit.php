<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;
    protected $fillable = [
        'resident_id', 'visitor_name', 'scheduled_date', 
        'scheduled_time', 'check_in_date', 'check_in_time', 'check_out_time'
    ];

    public function resident()
    {
        return $this->belongsTo(Resident::class);
    }
}
