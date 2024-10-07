<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Classroom extends Model
{
    use HasFactory,HasSlug;

    const CREATED_AT = 'from';
    const UPDATED_AT = 'to';

    protected $fillable = ['room_id','name_en','name_ar','description_en','description_ar',
                           'launched','recored_id','link','attendence_code','metadata',
                           'from','to','course_id','unit_id','slug'];


    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name_en')
            ->saveSlugsTo('slug');
    }


    
}
