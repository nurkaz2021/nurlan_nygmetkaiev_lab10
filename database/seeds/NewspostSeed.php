<?php

use Illuminate\Database\Seeder;

class NewspostSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Newspost::class, 20)->create();
    }
}
