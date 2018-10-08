<?php

namespace App\Http\Controllers;

use App\Contracts\DeliverableContract;
use Illuminate\Http\Request;

class DeliverableController extends Controller
{

    protected $deliverableTool;

    public function __construct(DeliverableContract $deliverableContract)
    {
        $this->deliverableTool = $deliverableContract;
    }

    public function index()
    {
        return view('deliverable');
    }

    public function view($id)
    {
        $data = $this->deliverableTool->getDataForViewingDeliverable($id);
        return view('home', compact('data'));
    }

    public function viewTask($did, $tid)
    {
        $data = $this->deliverableTool->getDataForViewingTask($did, $tid);
        return view('home', compact('data'));

    }

    public function createDeliverable(Request $request)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'status' => $request->status
        ];

        $this->deliverableTool->createNewDeliverable($data);
        return redirect()->route('home');
    }
}
