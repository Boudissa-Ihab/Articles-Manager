<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'path',
        'keywords',
        'accepted_at',
        'published_at',
        'description',
        'nb_pages',
        'is_free',
        'price',
        'photo',
        'featured'
    ];

    public function domains()
    {
        return $this->belongsToMany(Domain::class, "domain_has_documents");
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class, "author_has_documents");
    }

    public function medias()
    {
        return $this->morphMany(Media::class, 'media');
    }
}
