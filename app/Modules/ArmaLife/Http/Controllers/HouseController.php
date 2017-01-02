<?php

namespace ArmaWorks\Modules\ArmaLife\Http\Controllers;

use ArmaWorks\Traits\RestController;
use ArmaWorks\Modules\ArmaLife\Repositories\HouseRepository;
use ArmaWorks\Api\Controllers\BaseApiController;

class HouseController extends BaseApiController
{
    use RestController;

    public function __construct(HouseRepository $repository)
    {
        $this->repository = $repository;
    }
}
