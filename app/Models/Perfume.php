<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;

class Perfume extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'volume_ml',
        'fragrance_family',
        'top_notes',
        'heart_notes',
        'base_notes',
        'price',
        'quantity_evailable',
        'user_id',

    ];

    //RELAZIONE ELOQUENT, consente di accedere all'utente associato a un profumo
    public function user(){
        return $this->belongsTo(User::class);
    }
}
