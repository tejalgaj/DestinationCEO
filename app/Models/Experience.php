<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Carbon\Carbon;
class Experience extends Model
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

    public function getWorkResponsibilitiesAttribute($value)
    {
        //
        return json_decode($value);
        
    }

    public function getArrayFiltered($value)
    {
        $filteredArray = array();
if(is_array($value))
{
    $filteredArray = Arr::where($value, function ($value, $key) {
        return $value!= null;
    });

    $filteredArray = array_values($filteredArray);
}
        return $filteredArray;
    }

   


}
