<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Arr;

class Education extends Model
{
    use HasFactory;
    protected $fillable = ['schoolname','degree','startdate','city','state','country','enddate','fieldofstudy'];

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

    public function getRelevantCoursesAttribute($value)
    {
        return json_decode($value);
        
    }

    public function getAwardsAttribute($value)
    {
        return json_decode($value);
        
    }

    public function getExtraActivityAttribute($value)
    {
        
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
