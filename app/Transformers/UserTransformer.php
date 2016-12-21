<?php

namespace Someline\Transformers;

use Someline\Models\Foundation\User;

class UserTransformer extends BaseTransformer
{
    public function transform(User $model): array
    {
        return [
            'user_id' => (int)$model->getUserId(),

            'name' => $model->name,
            'email' => $model->email,

            'created_at' => (string)$model->created_at,
            'updated_at' => (string)$model->updated_at
        ];
    }
}
