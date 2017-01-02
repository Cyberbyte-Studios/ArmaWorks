<?php

namespace ArmaWorks\Modules\ArmaLife\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use ArmaWorks\Modules\ArmaLife\Repositories\ArmaLifeRepository as ArmaLifeInterface;

abstract class ArmaLifeRepository extends BaseRepository implements ArmaLifeInterface
{
    public function audit()
    {
        return $this->model->audits;
    }

    public function count(): int
    {
        return $this->model->count();
    }
}
