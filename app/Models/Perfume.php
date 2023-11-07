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
        'name',
        'description',
        'image',
        'volume_ml',
        'fragrance_family',
        'top_notes',
        'heart_notes',
        'base_notes',
        'price',
        'quantity_available',

    ];

    //DEFINISCO LE RELAZIONI CON LE ALTRE TABELLE
    public function product(){
        return $this->belongsTo(Product::class);
    }

}
