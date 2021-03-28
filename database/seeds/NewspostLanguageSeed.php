<?php

use Illuminate\Database\Seeder;

class NewspostLanguageSeed extends Seeder
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
            $np->lang = rand(0,1)?'en':'fr';
            $np->save();
        }
    }
}
