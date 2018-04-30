<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActionItem extends Model
{
    protected $table = 'action_items';

    protected $fillable = [
        'name',
        'title',
        'description',
        'resource_id',
        'date_created',
        'date_assigned',
        'expected_completion_date',
        'status',
        'status_description'
    ];
}
