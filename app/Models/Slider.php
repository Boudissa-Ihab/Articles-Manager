<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo'
    ];

    /* public function document()
    {
        return $this->hasOne(Document::class);
    } */
}
