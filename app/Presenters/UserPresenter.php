<?php

namespace ArmaWorks\Presenters;

use ArmaWorks\Transformers\UserTransformer;

/**
 * Class UserPresenter
 *
 * @package namespace ArmaWorks\Presenters;
 */
class UserPresenter extends BasePresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new UserTransformer();
    }
}
