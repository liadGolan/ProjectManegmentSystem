<?php

declare(strict_types=1);

namespace App\Contracts;

interface TaskContract
{
    public function getAllDeliverablesAndResourcesForTaskCreationDropdown(): array;

    public function createANewTask(array $data);
}