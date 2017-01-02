<?php

namespace ArmaWorks\Modules\ArmaLife\Http\Controllers;

use ArmaWorks\Traits\RestController;
use ArmaWorks\Modules\ArmaLife\Repositories\PlayerRepository;
use ArmaWorks\Modules\ArmaLife\Http\Requests\PlayerUpdateRequest;
use ArmaWorks\Api\Controllers\BaseApiController;

class PlayerController extends BaseApiController
{
    use RestController;

    public function __construct(PlayerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function update(PlayerUpdateRequest $request, int $id)
    {
        return $this->repository->update($request->all(), $id);
    }
}
