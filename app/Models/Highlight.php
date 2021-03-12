<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
class Highlight extends Model
{
    use HasFactory;

    public function getHardSkillsAttribute($value)
    {
        return json_decode($value);
        
    }

    public function getSoftSkillsAttribute($value)
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
