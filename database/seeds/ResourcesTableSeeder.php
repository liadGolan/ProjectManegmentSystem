<?php

use Illuminate\Database\Seeder;

class ResourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('resources')->insert([
            'name' => 'Jim',
            'title' => 'developer'
        ]);

        DB::table('resources')->insert([
            'name' => 'Tim',
            'title' => 'developer'
        ]);

        DB::table('resources')->insert([
            'name' => 'Kim',
            'title' => 'developer'
        ]);
    }
}
