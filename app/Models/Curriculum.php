<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Curriculum extends Model
{
    use HasFactory,HasSlug;

    protected $table = 'curriculums';
    protected $fillable = ['name_en','name_ar','course_id','price'];

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

    public function units(){
        return $this->hasMany(Unit::class);
    }

}
