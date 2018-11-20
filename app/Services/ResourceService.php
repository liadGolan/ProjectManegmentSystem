<?php

namespace App\Services;

use App\Resource;
use App\Contracts\ResourceContract;

class ResourceService implements ResourceContract
{
    public function createNewResource(array $data)
    {
        $resource = new Resource();

        $resource->name = $data['name'];
        $resource->title = $data['title'];

        $resource->save();
    }

}