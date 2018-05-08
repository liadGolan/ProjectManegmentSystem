<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'name' => 'task_one',
            'deliverable_id'=> 1,
            'resource_id'=>1,
            'description' => 'this is a task',
            'expected_start_date' => Carbon::createFromDate(2018, 5, 1),
            'expected_end_date' => Carbon::createFromDate(2018, 5, 5),
            'expected_duration_in_days' => 4
        ]);

        DB::table('tasks')->insert([
            'name' => 'task_two',
            'deliverable_id'=> 1,
            'resource_id'=>2,
            'description' => 'this is a task',
            'expected_start_date' => Carbon::createFromDate(2018, 5, 1),
            'expected_end_date' => Carbon::createFromDate(2018, 5, 5),
            'expected_duration_in_days' => 4
        ]);

        DB::table('tasks')->insert([
            'name' => 'task_three',
            'deliverable_id'=> 1,
            'resource_id'=>3,
            'description' => 'this is a task',
            'expected_start_date' => Carbon::createFromDate(2018, 5, 1),
            'expected_end_date' => Carbon::createFromDate(2018, 5, 5),
            'expected_duration_in_days' => 4
        ]);


        DB::table('tasks')->insert([
            'name' => 'task_four',
            'deliverable_id'=> 2,
            'resource_id'=>2,
            'description' => 'this is a task',
            'expected_start_date' => Carbon::createFromDate(2018, 5, 1),
            'expected_end_date' => Carbon::createFromDate(2018, 5, 5),
            'expected_duration_in_days' => 4
        ]);


        DB::table('tasks')->insert([
            'name' => 'task_five',
            'deliverable_id'=> 3,
            'resource_id'=>1,
            'description' => 'this is a task',
            'expected_start_date' => Carbon::createFromDate(2018, 5, 1),
            'expected_end_date' => Carbon::createFromDate(2018, 5, 5),
            'expected_duration_in_days' => 4
        ]);


        DB::table('tasks')->insert([
            'name' => 'task_six',
            'deliverable_id'=> 3,
            'resource_id'=>3,
            'description' => 'this is a task',
            'expected_start_date' => Carbon::createFromDate(2018, 5, 1),
            'expected_end_date' => Carbon::createFromDate(2018, 5, 5),
            'expected_duration_in_days' => 4
        ]);
    }
}
