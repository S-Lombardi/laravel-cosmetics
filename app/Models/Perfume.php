<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Perfume extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'fragrance',
        'top_notes',
        'heart_notes',
        'base_notes',
        'volume_ml',
    ];

    //Relazione con la tabella Prodotti
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    

}
