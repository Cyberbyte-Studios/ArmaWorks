<?php

namespace ArmaWorks\Modules\ArmaLife\Presenters;

use ArmaWorks\Modules\ArmaLife\Transformers\HouseTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PlayerPresenter
 *
 * @package namespace ArmaWorks\Presenters;
 */
class HousePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new HouseTransformer();
    }
}
