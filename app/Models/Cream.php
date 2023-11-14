<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Cream extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'body',
        'skin_type',
        'size_ml',
    ];


    // Relazione con la tabella prodotti
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
}
