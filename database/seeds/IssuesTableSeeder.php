<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class IssuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('issues')->insert([
            'name' => 'issue_1',
            'description' => 'this is the issue',
            'task_id' => 1,
            'priority' => 'high',
            'severity' => 'critical',
            'date_raised' => Carbon::createFromDate(2018, 5, 27),
            'date_assigned' => Carbon::createFromDate(2018, 5, 27),
            'expected_completion_date' => Carbon::createFromDate(2018, 5, 31),
            'status' => 'not done',
            'status_description' => 'in progress'
        ]);

        DB::table('issues')->insert([
            'name' => 'issue_2',
            'description' => 'this is the issue',
            'task_id' => 1,
            'priority' => 'high',
            'severity' => 'critical',
            'date_raised' => Carbon::createFromDate(2018, 5, 27),
            'date_assigned' => Carbon::createFromDate(2018, 5, 27),
            'expected_completion_date' => Carbon::createFromDate(2018, 5, 31),
            'status' => 'not done',
            'status_description' => 'in progress'
        ]);

        DB::table('issues')->insert([
            'name' => 'issue_3',
            'description' => 'this is the issue',
            'task_id' => 1,
            'priority' => 'high',
            'severity' => 'critical',
            'date_raised' => Carbon::createFromDate(2018, 5, 27),
            'date_assigned' => Carbon::createFromDate(2018, 5, 27),
            'expected_completion_date' => Carbon::createFromDate(2018, 5, 31),
            'status' => 'not done',
            'status_description' => 'in progress'
        ]);

        DB::table('issues')->insert([
            'name' => 'issue_4',
            'description' => 'this is the issue',
            'task_id' => 2,
            'priority' => 'high',
            'severity' => 'critical',
            'date_raised' => Carbon::createFromDate(2018, 5, 27),
            'date_assigned' => Carbon::createFromDate(2018, 5, 27),
            'expected_completion_date' => Carbon::createFromDate(2018, 5, 31),
            'status' => 'not done',
            'status_description' => 'in progress'
        ]);

        DB::table('issues')->insert([
            'name' => 'issue_5',
            'description' => 'this is the issue',
            'task_id' => 2,
            'priority' => 'high',
            'severity' => 'critical',
            'date_raised' => Carbon::createFromDate(2018, 5, 27),
            'date_assigned' => Carbon::createFromDate(2018, 5, 27),
            'expected_completion_date' => Carbon::createFromDate(2018, 5, 31),
            'status' => 'not done',
            'status_description' => 'in progress'
        ]);
    }
}
