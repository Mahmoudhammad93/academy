<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Country extends Model
{
    use HasFactory,HasSlug;

    protected $fillable = ['name_en','name_ar','slug','uuid'];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name_en')
            ->saveSlugsTo('slug');
    }

    public function getName(){
        $name="name_"."".app()->getLocale();
        return $this->$name;
    }

}
