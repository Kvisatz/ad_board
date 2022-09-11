<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisment extends Model
{
    use HasFactory;
    protected $table = 'advertisment';

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_advertisment');
    }

    public function category()
    {
        return $this->belongsToMany(Category::class, 'category_advertisment');
    }

}
