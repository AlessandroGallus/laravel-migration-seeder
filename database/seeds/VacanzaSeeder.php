<?php

use App\Vacanza;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class VacanzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for($i=0; $i<99; $i++){
            $new_vacanza = new Vacanza();
            $new_vacanza->reference = $faker->bothify('??-########');
            $new_vacanza->destination = $faker->state();
            $new_vacanza->durata = $this-> durataRandom();
            $new_vacanza->price = $faker->randomFloat(2, 50000, 10000000);
            $new_vacanza->holiday_rating = $faker->numberBetween(1, 5);
            $new_vacanza->description = $faker->paragraph();
            $new_vacanza->trasporto = $this-> trasportoRandom();
            $new_vacanza->type = $this->typeRandom();
            $new_vacanza->alloggio = $this->alloggioRandom();
            $new_vacanza->pensione = $this->pensioneRandom();
            $new_vacanza->save();
        }
    }
    private function durataRandom(){
        $array = ['1 settimana', '2 settimane', '3 settimane', '4 settimane' ,'2 mesi'];
        shuffle($array);
        return $array[0];
    }
    private function trasportoRandom(){
        $array = ['macchina', 'A piedi', 'Bicicletta', 'taxi' ,'moto'];
        shuffle($array);
        return $array[0];
    }
    private function typeRandom(){
        $array= ['Piano Relax', 'Farsi Azzannare dai leoni', 'Bunjee jumping senza elastico', 'paracadutismo compulsivo'];
        shuffle($array);
        return $array[0];
    }
    private function alloggioRandom(){
        $array = ['Hotel', 'B&B', 'Sotto al ponte', 'in tenda' ,'resort'];
        shuffle($array);
        return $array[0];
    }
    private function pensioneRandom(){
        $array = ['Solo colazione', 'Completa', 'Mezza pensione'];
        shuffle($array);
        return $array[0];
    }
}

