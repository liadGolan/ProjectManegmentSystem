<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deliverable;
use App\Contracts\DeliverableContract;

class HomeController extends Controller
{
    protected $deliverableUtility = null;

    public function __construct(DeliverableContract $deliverableUtility)
    {
        $this->deliverableUtility = $deliverableUtility;
    }

    public function index()
    {
        $deliverables = $this->deliverableUtility->getAllDeliverables();
        return view('welcome', compact('deliverables'));
    }
}
