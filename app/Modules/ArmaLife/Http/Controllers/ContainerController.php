<?php

namespace ArmaWorks\Modules\ArmaLife\Http\Controllers;

use ArmaWorks\Traits\RestController;
use ArmaWorks\Modules\ArmaLife\Repositories\ContainerRepository;
use ArmaWorks\Api\Controllers\BaseApiController;

class ContainerController extends BaseApiController
{
    use RestController;

    public function __construct(ContainerRepository $repository)
    {
        $this->repository = $repository;
    }
}
