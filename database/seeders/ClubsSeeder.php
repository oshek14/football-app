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
            'logo' => 'club1.png',
            'description' => 'First club description',
        ]);
        DB::table('clubs')->insert([
            'name' => 'Second Club',
            'logo' => 'club2.png',
            'description' => 'Second club description',
        ]);
        DB::table('clubs')->insert([
            'name' => 'Third Club',
            'logo' => 'club3.png',
            'description' => 'Third club description',
        ]);
    }
}
