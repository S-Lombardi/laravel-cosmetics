<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', //Accessorio, Crema, make-up, profumo..
        'description',
    ];

    // Relazione con i prodotti
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    
}