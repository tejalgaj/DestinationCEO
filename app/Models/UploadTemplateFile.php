<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadTemplateFile extends Model
{
    use HasFactory;
  
    protected $fillable = [
         'filenames'
    ];
  
    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    // public function setFilenamesAttribute($value)
    // {
    //     $this->attributes['filenames'] = json_encode($value);
    // }

    // public function getFilenamesAttribute($value)
    // {
    //     return json_decode($value);
    // }


    }
