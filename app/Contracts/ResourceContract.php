<?php

declare(strict_types=1);

namespace App\Contracts;

interface ResourceContract
{
    public function createNewResource(array $data);
}
