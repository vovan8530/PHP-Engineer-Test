<?php

use App\Models\Superhero;
use Illuminate\Database\Seeder;

class SuperheroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Superhero::class,40)->create();
    }
}
