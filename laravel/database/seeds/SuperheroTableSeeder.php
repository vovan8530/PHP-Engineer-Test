<?php

use App\Models\Picture;
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
        factory(Superhero::class,10)->create()->map(function ($sup,$i){
            factory(Picture::class,3)->create()->map(function ($picture) use($sup,$i){
                $picture->superhero()->associate($sup)->save();
            });
        });;
    }
}



