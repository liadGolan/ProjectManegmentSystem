<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $table = 'resources';

    protected $fillable = [
        'name',
        'title'
    ];

    public function getTasksAssignedToResource()
    {
        return $this->hasMany('app\Task', 'resource_id', 'id');
    }

    public function getActionItemsAssignedToResource()
    {
        return $this->hasMany('app\ActionItem', 'resource_id', 'id');
    }
}
