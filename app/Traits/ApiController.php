<?php

namespace ArmaWorks\Traits;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Prettus\Repository\Criteria\RequestCriteria;
use ArmaWorks\Modules\ArmaLife\Repositories\ArmaLifeRepository;

trait RestController
{
    protected $repository;

    public function __construct(ArmaLifeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $this->repository->pushCriteria(app(RequestCriteria::class));
        return $this->repository->all();
    }

    public function show($id)
    {
        return $this->repository->find($id);
    }

    public function update(Request $request, $id)
    {
        return $this->repository->update($request->all(), $id);
    }

    public function destroy(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function audits(): Collection
    {
        return $this->repository->audit();
    }

    public function audit($id): Collection
    {
        return $this->repository->audit()->find($id);
    }
}
