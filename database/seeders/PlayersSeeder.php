<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PlayersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'name' => 'First player',
            'image' => '',
            'designation' => 'First Player designation',
            'club_id' => 1,
        ]);
        DB::table('players')->insert([
            'name' => 'Second player',
            'image' => '',
            'designation' => 'Second player designation',
            'club_id' => 2,
        ]);
        DB::table('players')->insert([
            'name' => 'Third player',
            'image' => '',
            'designation' => 'Third player designation',
            'club_id' => 3,
        ]);
        DB::table('players')->insert([
            'name' => 'Fourth player',
            'image' => '',
            'designation' => 'Fourth player designation',
            'club_id' => 3,
        ]);
        DB::table('players')->insert([
            'name' => 'Fifth player',
            'image' => '',
            'designation' => 'Fifth player designation',
            'club_id' => 3,
        ]);
        DB::table('players')->insert([
            'name' => 'Sixth player',
            'image' => '',
            'designation' => 'Sixth player designation',
            'club_id' => 3,
        ]);
        DB::table('players')->insert([
            'name' => 'Seventh player',
            'image' => '',
            'designation' => 'Seventh player designation',
            'club_id' => 3,
        ]);
    }
}
