<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'url', 'image', 'title', 'description', 'languages', 'slug'
    ];

    public function getLanguagesArrayAttribute()
    {
        return explode(',', $this->languages);
    }

    public function setLanguagesArrayAttribute($value)
    {
        $this->attributes['languages'] = implode(',', $value);
    }


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            $project->slug = Str::slug($project->title);
        });

        static::updating(function ($project) {
            $project->slug = Str::slug($project->title);
        });
    }
}
