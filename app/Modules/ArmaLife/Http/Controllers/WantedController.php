<?php

namespace App\Modules\ArmaLife\Http\Controllers;

use App\Traits\RestController;
use App\Modules\ArmaLife\Repositories\WantedRepository;
use ArmaWorks\Api\Controllers\BaseApiController;

class WantedController extends BaseApiController
{
    use RestController;

    public function __construct(WantedRepository $repository)
    {
        $this->repository = $repository;
    }
}
