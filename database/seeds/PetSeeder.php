<?php

use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->truncate();   // aliases

        DB::table('pets')->truncate();    // images



        $source_file = storage_path('clients.json'); // data.json

        if (!file_exists($source_file)) {

            die('Source file ' . $source_file . ' not found');
        }


        $data = json_decode(file_get_contents($source_file));

        foreach ($data as $item) {

            $person = new \App\Person;

            $person->first_name = $item->first_name;
            $person->surname = $item->surname;

            $person->save();

            foreach ($item->pets as $animal) {

                $photo = null;

                if ($animal->photo) {

                    $photo = new \App\Photo; // \App\Photo

                    $photo->file_path = 'images/' . $animal->photo;

                    $photo->save();
                }


                $pet = new \App\Pet; // \App\pet

                if ($photo) {

                    $pet->photo_id = $photo->id; // photo_id

                }

                
                $pet->person_id = $person->id;
                $pet->name = $animal->name;
                $pet->species = 'dog';
                $pet->breed = $animal->breed;
                $pet->weight = $animal->weight;
                $pet->age = $animal->age;

                $pet->save();
                
            }    

        }
    }
}
