<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActionItem extends Model
{
    protected $table = 'action_items';

    protected $fillable = [
        'name',
        'description',
        'resource_id',
        'date_created',
        'date_assigned',
        'expected_completion_date',
        'status',
        'status_description'
    ];

    public function getIssuesAssignedToActionItem()
    {
        return $this->hasMany('app\Issue', 'action_item_id', 'id');
    }
}
