<?php

namespace ArmaWorks\Modules\ArmaLife\Http\Controllers;

use ArmaWorks\Traits\RestController;
use ArmaWorks\Http\Controllers\Controller;
use ArmaWorks\Modules\ArmaLife\Repositories\VehicleRepository;
use ArmaWorks\Api\Controllers\BaseApiController;

class VehicleController extends BaseApiController
{
    use RestController;

    public function __construct(VehicleRepository $repository)
    {
        $this->repository = $repository;
    }
}
