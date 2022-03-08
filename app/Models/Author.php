<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'phone1',
        'phone2',
        'biography',
        'avatar'
    ];

    public function documents()
    {
        return $this->belongsToMany(Document::class, "author_documents");
    }
}
