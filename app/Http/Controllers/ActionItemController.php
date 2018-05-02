<?php

namespace App\Http\Controllers;

use App\ActionItem;
use Illuminate\Http\Request;

use Carbon\Carbon;

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

    public function createActionItem(Request $request)
    {
        $actionItem = new ActionItem();

        $actionItem->name = $request->name;
        $actionItem->description = $request->description;
        $actionItem->resource_id = $request->resource;
        $actionItem->date_created = $request->date_created;
        $actionItem->expected_completion_date = $request->estimated_completion_date;
        $actionItem->status = $request->status;
        $actionItem->status_description = $request->status_description;

        $actionItem->save();

        return redirect()->route('home');
    }
}
