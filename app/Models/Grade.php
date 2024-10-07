<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Grade extends Model
{
    use HasFactory,HasSlug;

    protected $fillable = ['name_en','name_ar','parent_id','education_type_id','meta_data'];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name_en')
            ->saveSlugsTo('slug');
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
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
