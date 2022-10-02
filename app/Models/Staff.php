<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'name'
    ];

    public function imageable()
    {
        return $this->morphMany( Photo::class,  'imageable');
    }

    public function photos()
    {
        return $this->hasMany( Photo::class,  'imageable_id');
    }
    use HasFactory;
}
