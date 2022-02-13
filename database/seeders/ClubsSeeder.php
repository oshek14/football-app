<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClubsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clubs')->insert([
            'name' => 'First Club',
            'logo' => '',
            'description' => 'First club description',
            'manager' => 'Manager name',
            'coach' => 'Coach name',
            'location' => 'Tbilisi',
        ]);
        DB::table('clubs')->insert([
            'name' => 'Second Club',
            'logo' => '',
            'description' => 'Second club description',
            'manager' => 'Manager name',
            'coach' => 'Coach name',
            'location' => 'Tbilisi',
        ]);
        DB::table('clubs')->insert([
            'name' => 'Third Club',
            'logo' => '',
            'description' => 'Third club description',
            'manager' => 'Manager name',
            'coach' => 'Coach name',
            'location' => 'Tbilisi',
        ]);
    }
}
