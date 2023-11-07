<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Accessory extends Model
{
    use HasFactory;


    protected $fillable = [
        'product_id',
        'name',
        'description',
        'image',
        'price',
        'material',
        'category',
        'quantity_available',
    ];

    //DEFINISCO LE RELAZIONI CON LE ALTRE TABELLE
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
