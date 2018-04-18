<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = [
        'deliverable_id',
        'name',
        'description',
        'expected_start_date',
        'expected_end_date',
        'actual_start_date',
        'actual_end_date'
    ];
}
