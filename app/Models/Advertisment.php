<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisment extends Model
{
    // use HasFactory;
    
    protected $table = 'advertisment';

    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_advertisment');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'advertisment_id');
    }

}
