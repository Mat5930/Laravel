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
        // toutes les categories
        //::all c'est l'équivalent d'un SQL + select + from categorie
        $categories = Categorie::all();
        // la première categorie (entrée)
        $categorieEntree = $categories->first();
        //Categorie::find(2) c'est léquivalent du sql select = from categorie where id = 2
        //la deuxieme categorie (id 2plat)
        $categoriePlat = Categorie::find(2);
        //la troisieme categorie (id 3 dessert)
        $categorieDessert = Categorie::find(3);


        // toutes les photos
        $photos = PhotoPlat::all();
        //la première photo
        $photo = $photos->first();

        $platDatas = [
            [
                'nom' => 'welsh',
                'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'prix' => 12.99,
                'epingle' => false,
                'photo_plat_id' => $photo->id,
                'categorie_id' => $categorieEntree->id,
            ],

            [
                'nom' => 'carbonnade',
                'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'prix' => 14.99,
                'epingle' => false,
                'photo_plat_id' => $photo->id,
                'categorie_id' => $categoriePlat->id,
            ],

            [
                'nom' => 'Sushi',
                'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'prix' => 25.99,
                'epingle' => false,
                'photo_plat_id' => $photo->id,
                'categorie_id' => $categorieDessert->id,
            ],

        ];
        foreach ($platDatas as $platData) {

        $plat = new Plat();
        $plat->nom = $platData['nom'];
        $plat->description = $platData['description'];
        $plat->prx = $platData['prix'];
        $plat->epingle = $platData['epingle'];
        $plat->photo_plat_id =$platData['photo_plat_id'];
        $plat->categorie_id = $platData['categorie_id'];
        $plat->save();
        
    }
}

}