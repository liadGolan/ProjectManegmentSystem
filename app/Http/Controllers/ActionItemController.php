<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Resource;

class ActionItemController extends Controller
{
    public function index()
    {
        $resources = Resource::all();
        $resource_array = [];
        foreach($resources as $resource) {
            $resource_array[$resource->id] = $resource->name;
        }
        return view('actionItem', compact( 'resource_array'));
    }
}
