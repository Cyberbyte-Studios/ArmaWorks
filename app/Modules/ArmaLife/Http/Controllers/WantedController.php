<?php

namespace ArmaWorks\Modules\ArmaLife\Http\Controllers;

use ArmaWorks\Traits\RestController;
use ArmaWorks\Modules\ArmaLife\Repositories\WantedRepository;
use ArmaWorks\Api\Controllers\BaseApiController;

class WantedController extends BaseApiController
{
    use RestController;

    public function __construct(WantedRepository $repository)
    {
        $this->repository = $repository;
    }
}
