<?php

namespace ArmaWorks\Modules\ArmaLife\Transformers;

use League\Fractal\TransformerAbstract;
use ArmaWorks\Modules\ArmaLife\Models\House;
use ArmaWorks\Modules\ArmaLife\Services\ArrayParser;

/**
 * Class UserTransformer
 * @package namespace ArmaWorks\Transformers;
 */
class HouseTransformer extends TransformerAbstract
{

    /**
     * Transform the House entity
     * @param House $model
     *
     * @return array
     */
    public function transform(House $model)
    {
        $arrayParser = new ArrayParser();
        return [
            'id' => (int) $model->id,
            'pid' => $model->pid,
            'pos' => $arrayParser->position($model->pos),
            'owned' => $model->owned,
            'insert_time' => $model->insert_time
        ];
    }
}
