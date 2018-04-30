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
        return $this->hasMany('app\Tasks', 'resource_id', 'id');
    }
}
