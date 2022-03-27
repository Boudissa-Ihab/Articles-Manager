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
        'featured',
        'download_count',
        'last_download'
    ];

    public function domains()
    {
        return $this->belongsToMany(Domain::class, "domain_documents");
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class, "author_documents");
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, "order_documents");
    }

    /* public function slider()
    {
        return $this->belongsTo(Slider::class);
    } */

    /* public function medias()
    {
        return $this->morphMany(Media::class, 'media');
    } */
}
