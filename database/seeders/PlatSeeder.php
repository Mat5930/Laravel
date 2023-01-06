<?php

namespace Database\Seeders;

use Faker;
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
        $faker = Faker\Factory::create('fr_FR');

        // toutes les categories
        //::all c'est l'équivalent d'un SQL + select + from categorie
        $categories = Categorie::all();
        //le nombre d'élément dans la collection 
        $categoriesCount = $categories->count();
        // la première categorie (entrée)
        $categorieEntree = $categories->first();
        //Categorie::find(2) c'est léquivalent du sql select = from categorie where id = 2
        //la deuxieme categorie (id 2plat)
        $categoriePlat = Categorie::find(2);
        //la troisieme categorie (id 3 dessert)
        $categorieDessert = Categorie::find(3);
        $categoriePetitDejeuner = Categorie::find(4);
        $categorieBoisson = Categorie::find(5);

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
        
        for ($i = 0; $i < 100; $i++)  {
            //creation d'un nouveau plat
            $plat = new Plat();
            //affectation d'un nom 
            $plat->nom = $faker->words(2, true);
            //affectation d'une descriptoin
            $plat->description = $faker->words(10, true);
           // affectation d'un prix 
           //le prixest aléatoire ,compris entre 1 et 50 avec deux chiffres après la virgule
            $plat->prx = random_int(100, 1000) /100;
            //$plat->prx = $fake->randomFloat(2, 1, 50);
            $plat->epingle = (bool) random_int(0, 1) ;
            //affectation d'une photo
            $plat->photo_plat_id = $photo->id;
            //affectation d'une catégorie
            // la categorie est choisie au hasard
            //un nombre aléatoire est tiré entre 0 et 5-1 (c-à-d 4)
           $categorieIndex = random_int(0, $categoriesCount - 1);
           // on utilise le nombre tiré au hasard pour accéder au Nième élément de la collection de catégories
           $categorie = $categories->get($categorieIndex);
           $plat->categorie_id =$categorie->id;
            //sauvegarde dans la BDD 
            $plat->save();
            
        } 
     }
}

