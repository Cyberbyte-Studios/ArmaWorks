<?php

namespace App\Modules\ArmaLife\Http\Controllers;

use App\Traits\RestController;
use App\Http\Controllers\Controller;
use App\Modules\ArmaLife\Repositories\VehicleRepository;
use ArmaWorks\Api\Controllers\BaseApiController;

class VehicleController extends BaseApiController
{
    use RestController;

    public function __construct(VehicleRepository $repository)
    {
        $this->repository = $repository;
    }
}
