<?php

namespace ArmaWorks\Modules\ArmaLife\Presenters;

use ArmaWorks\Modules\ArmaLife\Transformers\PlayerTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PlayerPresenter
 *
 * @package namespace ArmaWorks\Presenters;
 */
class PlayerPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PlayerTransformer();
    }
}
