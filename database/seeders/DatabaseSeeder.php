<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Guru;
use App\Models\Kontak;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');
        $faker->seed(123);

        for($i=0; $i<15; $i++){
            Guru::create([
                'nip' => $faker->unique()->numerify('1############'),
                'nama_guru' => $faker->firstName. " " . $faker->lastName,
                'tanggal_lahir' => $faker->dateTime(),
                'kontak_id' => $faker->unique()->numberBetween(1, 15)
            ]);
        }

        for($i=0; $i<15; $i++){
            Kontak::create([
                'no_telpon' => $faker->unique()->numerify('08##########'),
            ]);
        }
    }
}
