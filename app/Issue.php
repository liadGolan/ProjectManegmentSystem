<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $table = 'issues';

    protected $fillable = [
        'name',
        'title',
        'description',
        'task_id',
        'action_item_id',
        'priority',
        'severity',
        'date_raised',
        'date_assigned',
        'expected_completion_date',
        'status',
        'status_description'
    ];
}
