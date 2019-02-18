<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0;$i <= 100; $i++){
            App\Clientes::create([
                'nome' => $faker->name,
                'cnpj' => $faker->numberBetween(000000001,999999999)
            ]);

            echo "Registro (". $i .") Cadastrado" . "\n";
        }
    }
}
