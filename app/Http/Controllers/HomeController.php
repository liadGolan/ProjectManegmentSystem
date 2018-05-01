<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deliverable;

class HomeController extends Controller
{
    public function index()
    {
        $deliverables = Deliverable::all();
        return view('welcome', compact('deliverables'));
    }
}
