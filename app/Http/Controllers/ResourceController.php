<?php

namespace App\Http\Controllers;

use App\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index()
    {
        return view('resource');
    }

    public function createResource(Request $request)
    {
        $resource = new Resource();

        $resource->name = $request->name;
        $resource->title = $request->title;

        $resource->save();

        return redirect()->route('home');
    }

}
