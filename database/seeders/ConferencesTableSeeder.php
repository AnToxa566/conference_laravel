<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Conference;

class ConferencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conferences = array();

        foreach (range(1, 50) as $i)
        {
            array_push($conferences, [
                'title' => 'Conference #' . $i,
                'date_time_event' => date('Y-m-d H:i'),
                'latitude' => $i,
                'longitude' => $i,
                'country' => 'Ukraine',
            ]);
        }

        Conference::insert($conferences);
    }
}
