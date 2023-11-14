<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'user_id',
        'name',
        'description',
        'price',
        'stock_quantity',
    ];

    // Relazione con la tabella delle categorie
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relazione con la tabella degli utenti
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
