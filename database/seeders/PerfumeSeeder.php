<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Perfume;

class PerfumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $perfumes = config('perfumes');
        
       foreach($perfumes as $item){
            $perfume = new Perfume();
            $perfume->name = $item ['name'];
            $perfume->description = $item ['description'];
            $perfume->volume_ml = $item ['volume_ml'];
            $perfume->fragrance_famoly = $item ['fragrance_family'];
            $perfume->top_notes = $item ['top_notes'];
            $perfume->heart_notes = $item ['heart_notes'];
            $perfume->base_notes = $item ['base_notes'];
            $perfume->price = $item ['price'];
            $perfume->quantity_available = $item ['quantity_available'];
            $perfume->save();
       }
    }   

}
