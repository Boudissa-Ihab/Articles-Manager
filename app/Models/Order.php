<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'code'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function documents()
    {
        return $this->belongsToMany(Document::class, "order_documents");
    }

    public function orderDocuments()
    {
        return $this->hasMany(OrderDocuments::class);
    }

    public function getTotal()
    {
        return $this->orderDocuments->sum(function ($orderDocument) {
            return $orderDocument->price;
        });
    }
}
