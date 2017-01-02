<?php

namespace ArmaWorks\Modules\ArmaLife\Repositories\Eloquent;

use ArmaWorks\Modules\ArmaLife\Models\House;
use ArmaWorks\Modules\ArmaLife\Presenters\HousePresenter;
use Prettus\Repository\Criteria\RequestCriteria;
use ArmaWorks\Modules\ArmaLife\Repositories\HouseRepository as HouseInterface;

/**
 * Class HouseRepository
 * @package namespace ArmaWorks\Modules\ArmaLife\Repositories;
 */
class HouseRepository extends ArmaLifeRepository implements HouseInterface
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return House::class; 
    }

    public function presenter()
    {
        return HousePresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
