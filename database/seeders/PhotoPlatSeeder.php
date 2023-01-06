<?php

namespace Database\Seeders;

use App\models\PhotoPlat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotoPlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photoDatas = [
            "img/anh-nguyen-kcA-c3f_3FE-unsplash (1).jpg",
            "victoria-shes-UC0HZdUitWY-unsplash.jpg",

        ];

    foreach ($photoDatas as $photoData) {

        //création d'une nouvelle photo
        $photo = new PhotoPlat();
        //sélectiondu fichier jpg
        $photo->chemin = $photoData;
        //sauvegarde dans la BDD
        $photo->save();

        
    }
}
}