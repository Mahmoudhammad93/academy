<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Course extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'name_en', 'name_ar', 'code', 'description_en', 'description_ar', 'image',
        'price', 'subject_id', 'term_id','grade_id','level_id','ilos'
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name_en')
            ->saveSlugsTo('slug');
    }

    public function getNameAttribute()
    {
        if (app()->getLocale() == 'en') {
            return $this->name_en;
        } else if (app()->getLocale() == 'ar') {
            return $this->name_ar;
        }
    }

    public function assignments(){
        return $this->morphMany(Assignment::class, 'assignmentable');
    }
}
