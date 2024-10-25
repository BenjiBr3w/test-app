<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $harry = new Player;
        $harry->name = "Harry";
        $harry->handicap = 0.1;
        $harry->save();

        $jack = new Player;
        $jack->name = "Jack";
        $jack->handicap = -1.5;
        $jack->save();
        
        $max = new Player;
        $max->name = "Max";
        $max->handicap = 2.1;
        $max->save();

    }
}
