<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deliverable extends Model
{
    protected $table = 'deliverables';

    protected $fillable = [
        'name',
        'description',
        'due_date',
        'status '
    ];

    public function getTasks()
    {
        return $this->hasMany('app\Tasks', 'deliverable_id', 'id');
    }
}
