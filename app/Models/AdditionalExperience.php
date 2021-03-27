<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Carbon\Carbon;

class AdditionalExperience extends Model
{
    use HasFactory;

    public function getStartdateAttribute($value)
    {
        //
        
        return Carbon::parse($value)->format('Y-m');
    }
    public function getEnddateAttribute($value)
    {
        //
        
        return Carbon::parse($value)->format('Y-m');
    }
}
