<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class DomainDocuments extends Pivot
{
    use HasFactory;

    public function document()
    {
        return $this->belongsTo(Document::class);
    }

    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }
}
