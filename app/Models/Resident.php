<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'age', 'gender', 'medical_history', 'status'];

    public function visits()
    {
        return $this->hasMany(Visit::class);
    }

}
