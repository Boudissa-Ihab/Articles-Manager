<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDocuments extends Model
{
    use HasFactory;

    public function document()
    {
        return $this->belongsTo(Document::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
