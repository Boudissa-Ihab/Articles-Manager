<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AuthorDocuments extends Pivot
{
    use HasFactory;

    public function document()
    {
        return $this->belongsTo(Document::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
