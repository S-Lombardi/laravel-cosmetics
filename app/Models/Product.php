<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Perfume;
use App\Models\Cream;
use App\Models\Accessory;



class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
    ];

    //DEFINISCO LE RELAZIONI CON LE ALTRE TABELLE

    public function perfumes(){
        return $this->hasMany(Perfume::class);  
    }

    public function creams(){
        return $this->hasMany(Cream::class);
    }

    public function accessories(){
        return $this->hasMany(Accessory::class);
    }


}
