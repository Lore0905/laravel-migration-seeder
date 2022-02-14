<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class test_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++)

        $new_travel = new Travel();
        $new_travel->place = $faker->city();
        $new_travel->start = $faker->date();
        $new_travel->finish = $faker->date();
        $new_travel->price = $faker->numberBetween(300, 5000);
        $new_travel->days = $faker->randomDigitNot(0);
        $new_travel->hotel_name = $faker->lexify('hotel ?????????');
        $new_travel->hotel_adress = $faker->streetAddress();
        $new_travel->description = $faker->text(500);

        $new_travel->save();
        

    }
}
