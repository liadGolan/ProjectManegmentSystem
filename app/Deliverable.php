<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Task;

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
        return $this->hasMany('App\Task', 'deliverable_id', 'id');
    }
}
