<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class MakeUp extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'make_up_type', // Fondotinta, ombretto, rossetto, struccante..
        'shade',
        'formulation',
        'finish',
        'waterproof',
        'size_ml',
    ];

    // Relazione con la tabella prodotti
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
}
