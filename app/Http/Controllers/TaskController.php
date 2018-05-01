<?php

namespace App\Http\Controllers;

use App\Deliverable;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $deliverables = Deliverable::all();
        $deliverables_array = [];
        foreach($deliverables as $deliverable) {
            $deliverables_array[$deliverable->id] = $deliverable->name;
        }
        $resource_array = [];
        return view('task', compact('deliverables_array'), compact( 'resource_array'));
    }
}
