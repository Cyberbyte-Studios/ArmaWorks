<?php

namespace ArmaWorks\Modules\ArmaLife\Http\Controllers;

use ArmaWorks\Traits\RestController;
use ArmaWorks\Modules\ArmaLife\Repositories\GangRepository;
use ArmaWorks\Api\Controllers\BaseApiController;

class GangController extends BaseApiController
{
    use RestController;

    public function __construct(GangRepository $repository)
    {
        $this->repository = $repository;
    }
}
