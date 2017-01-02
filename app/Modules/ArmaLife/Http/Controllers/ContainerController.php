<?php

namespace App\Modules\ArmaLife\Http\Controllers;

use App\Traits\RestController;
use App\Modules\ArmaLife\Repositories\ContainerRepository;
use ArmaWorks\Api\Controllers\BaseApiController;

class ContainerController extends BaseApiController
{
    use RestController;

    public function __construct(ContainerRepository $repository)
    {
        $this->repository = $repository;
    }
}
