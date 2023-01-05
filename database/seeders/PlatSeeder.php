<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\PhotoPlat;
use App\Models\Plat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // touets les categories
        $categories = Categorie::all();
        // la première photo 
        $categorie = $categories->first();

        // toutes les photos
        $photos = PhotoPlat::all();
        //la première photo
        $photo = $photos->first();

        $plat = new Plat();
        $plat->nom ="welsh";
        $plat->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
        $plat->prx = 19.99;
        $plat->epingle = false;
        $plat->photo_plat_id = $photo->id;
        $plat->categorie_id = $categorie->id;
        $plat->save();
        //
    }
}
