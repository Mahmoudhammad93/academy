<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Subject extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = ['name_en','name_ar', 'code', 'image', 'slug', 'meta_data', 'uuid', 'description','description_ar'];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name_en')
            ->saveSlugsTo('slug');
    }

    public function getNameAttribute(){
        if(app()->getLocale()=='en'){
            return $this->name_en;
        }
        else if(app()->getLocale()=='ar'){
            return $this->name_ar;
        }
    }

}
