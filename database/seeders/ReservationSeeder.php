<?php

namespace Database\Seeders;

use Faker;
use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        $reservationDatas = [
            [ 
                'nom' => 'Foo',
                'prénom' => 'Jean',
                'jour' => '2023-04-12',
                'heure' => '12:00',
                'tel' => '0788988732',
                'email' => 'Foo.jean@gmail.com',
                'nombre_personnes' => 8
            ],
    
            [
                'nom' => 'mezine',
                'prénom' => 'Fred',
                'jour' => '2023-09-12',
                'heure' => '12:00',
                'tel' => '0728998732',
                'email' => 'mezine.fred@gmail.com',
                'nombre_personnes' => 4
            ],
        ];
     
        foreach($reservationDatas as $reservationData) {
    
            $reservation = new Reservation();
            $reservation->nom = $reservationData['nom'];
            $reservation->prenom = $reservationData['prénom'];
            $reservation->jour = $reservationData['jour'];
            $reservation->heure = $reservationData['heure'];
            $reservation->tel = $reservationData['tel'];
            $reservation->email = $reservationData['email'];
            $reservation->nombre_personnes = $reservationData['nombre_personnes'];
            $reservation->save();
        }

        for ($i = 0; $i < 48; $i++)  {  

            $reservation = new Reservation();
            //nom
            $reservation->nom = $faker->lastName();
            //prénom
            $reservation->prenom = $faker->firstName();
            //jour
            $reservation->jour = $faker->date('Y-m-d');
            //heure
            $reservation->heure = $faker->time('H:i');
            //le nombre de personne 
            $reservation->nombre_personnes = random_int(1,12);
            //le tel
            $reservation->tel = $faker->phoneNumber();
            //email
            $reservation->email = $faker->safeEmail();
            // enregistrement dans la BDD
            $reservation->save();
        }
    }
}