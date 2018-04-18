<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('deliverable_id');
            $table->string('name');
            $table->string('description');
            $table->date('expected_start_date');
            $table->date('expected_end_date');
            $table->time('expected_duration');
            $table->date('actual_start_date');
            $table->date('actual_end_date');
            $table->time('actual_duration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
