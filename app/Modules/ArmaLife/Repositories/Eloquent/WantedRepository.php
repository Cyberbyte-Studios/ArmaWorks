<?php

namespace ArmaWorks\Modules\ArmaLife\Repositories\Eloquent;

use Prettus\Repository\Criteria\RequestCriteria;
use ArmaWorks\Modules\ArmaLife\Repositories\WantedRepository as WantedInterface;
use ArmaWorks\Modules\ArmaLife\Models\Wanted;

/**
 * Class WantedRepository
 * @package namespace ArmaWorks\Modules\ArmaLife\Repositories;
 */
class WantedRepository extends ArmaLifeRepository implements WantedInterface
{
    public function model()
    {
        return Wanted::class;
    }

    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
