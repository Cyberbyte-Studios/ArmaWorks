<?php

namespace ArmaWorks\Modules\ArmaLife\Repositories\Eloquent;

use Prettus\Repository\Criteria\RequestCriteria;
use ArmaWorks\Modules\ArmaLife\Repositories\VehicleRepository as VehicleInterface;
use ArmaWorks\Modules\ArmaLife\Models\Vehicle;

/**
 * Class VehicleRepository
 * @package namespace ArmaWorks\Modules\ArmaLife\Repositories;
 */
class VehicleRepository extends ArmaLifeRepository implements VehicleInterface
{
    public function model()
    {
        return Vehicle::class; 
    }

    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
