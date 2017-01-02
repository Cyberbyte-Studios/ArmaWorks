<?php

namespace App\Modules\ArmaLife\Http\Controllers;

use App\Traits\RestController;
use App\Modules\ArmaLife\Repositories\GangRepository;
use ArmaWorks\Api\Controllers\BaseApiController;

class GangController extends BaseApiController
{
    use RestController;

    public function __construct(GangRepository $repository)
    {
        $this->repository = $repository;
    }
}
