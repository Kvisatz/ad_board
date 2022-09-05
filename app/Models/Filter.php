<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    use HasFactory;

    protected $table = 'filters';

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function options()
    {
        return $this->hasMany(Filteroptions::class);
    }



    // public function carbody()
    // {
    //     return $this->hasMany(Carbody::class);
    // }

    // public function carbrand()
    // {
    //     return $this->hasMany(Carbrand::class);
    // }

    // public function carcolor()
    // {
    //     return $this->hasMany(Carcolor::class);
    // }

    // public function carmileage()
    // {
    //     return $this->hasMany(Carmileage::class);
    // }

    // public function carsalon()
    // {
    //     return $this->hasMany(Carsalon::class);
    // }

    // public function engine()
    // {
    //     return $this->hasMany(Engine::class);
    // }

    // public function exchange()
    // {
    //     return $this->hasMany(Exchange::class);
    // }

    // public function transmission()
    // {
    //     return $this->hasMany(Transmission::class);
    // }

    // public function year()
    // {
    //     return $this->hasMany(Year::class);
    // }
}
