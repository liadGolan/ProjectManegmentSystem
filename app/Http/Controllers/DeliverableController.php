<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deliverable;

class DeliverableController extends Controller
{
    public function index()
    {
        return view('deliverable');
    }

    public function view($id)
    {
        $deliverable = Deliverable::find($id);
        $tasks = $deliverable->getTasks()->get();
        return view('home', compact('id'), compact('tasks'));
    }

    public function createDeliverable(Request $request)
    {
        $deliverable = new Deliverable();

        $deliverable->name = $request->name;
        $deliverable->description = $request->description;
        $deliverable->due_date = $request->due_date;
        $deliverable->status = $request->status;

        $deliverable->save();

        return redirect()->route('home');
    }
}
