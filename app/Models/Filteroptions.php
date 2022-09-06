<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filteroptions extends Model
{
    use HasFactory;

    protected $table = 'filter_options';

    public function filter()
    {
        return $this->belongsTo(Filter::class);
    }
}
