<?php

use Illuminate\Database\Seeder;

class NewspostImageSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nps = App\Newspost::all();
        foreach ($nps as $np) {
            $image = \Faker\Provider\Image::imageUrl( 300, 300, null, true, 'car');
            $np->image = $image;
            $np->save();
        }
    }
}
