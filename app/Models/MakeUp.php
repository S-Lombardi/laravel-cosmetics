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
        'name',
        'description',
        'image',
        'price',
        'color',
        'category',
        'quantity_available',

    ];

    //DEFINISCO LE RELAZIONI CON LE ALTRE TABELLE
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
