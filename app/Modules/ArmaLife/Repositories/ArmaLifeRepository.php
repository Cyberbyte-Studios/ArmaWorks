<?php

namespace ArmaWorks\Modules\ArmaLife\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface GangRepository
 * @package namespace ArmaWorks\Modules\ArmaLife\Repositories;
 */
interface ArmaLifeRepository extends RepositoryInterface
{
    public function audit();

    public function count();
}
