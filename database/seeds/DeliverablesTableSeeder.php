<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class DeliverablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deliverables')->insert([
            'name' => 'deliverable_one',
            'description' => 'this is the first deliverable',
            'due_date' => Carbon::createFromDate(2018, 5, 27),
            'status' => 'good'
        ]);

        DB::table('deliverables')->insert([
            'name' => 'deliverable_two',
            'description' => 'this is the second deliverable',
            'due_date' => Carbon::createFromDate(2018, 5, 27),
            'status' => 'good'
        ]);

        DB::table('deliverables')->insert([
            'name' => 'deliverable_three',
            'description' => 'this is the third deliverable',
            'due_date' => Carbon::createFromDate(2018, 5, 27),
            'status' => 'good'
        ]);

        DB::table('deliverables')->insert([
            'name' => 'deliverable_four',
            'description' => 'this is the fourth deliverable',
            'due_date' => Carbon::createFromDate(2018, 5, 27),
            'status' => 'good'
        ]);
    }
}
