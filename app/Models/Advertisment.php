<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisment extends Model
{
    // use HasFactory;
    
    protected $table = 'advertisment';

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'advertisment_id');
    }

    public function filters()
    {
        return $this->belongsToMany(Filter::class);
    }

    public function options()
    {
        return $this->belongsToMany(Filteroptions::class);
    }

}
