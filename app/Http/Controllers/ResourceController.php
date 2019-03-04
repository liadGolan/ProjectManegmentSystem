<?php

namespace App\Http\Controllers;

use App\Resource;
use Illuminate\Http\Request;
use App\Contracts\ResourceContract;

class ResourceController extends Controller
{
    protected $resourceUtility = null;

    public function __construct(ResourceContract $resourceUtility)
    {
        $this->resourceUtility = $resourceUtility;
    }

    public function index()
    {
        return view('resource');
    }

    public function createResource(Request $request)
    {
        $data = [
            'name' => $request->name,
            'title' => $request->title    
        ];

        $this->resourceUtility->createNewResource($data);
        
        return redirect()->route('home');
    }

}
