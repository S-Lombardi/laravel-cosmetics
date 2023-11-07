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
        'name',
        'description',
        'image',
        'price',
        'skin_type',
        'ingredients',
        'perfume',
        'size_ml',
        'quantity_available',
    ];

    //DEFINISCO LE RELAZIONI CON LE ALTRE TABELLE
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
