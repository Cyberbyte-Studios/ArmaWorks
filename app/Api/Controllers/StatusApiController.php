<?php

namespace ArmaWorks\Api\Controllers;

use Dingo\Api\Exception\DeleteResourceFailedException;
use Illuminate\Http\Response;
use Prettus\Validator\Contracts\ValidatorInterface;
use ArmaWorks\Http\Requests\UserCreateRequest;
use ArmaWorks\Http\Requests\UserUpdateRequest;
use ArmaWorks\Repositories\Interfaces\UserRepository;
use ArmaWorks\Validators\UserValidator;

class StatusApiController extends BaseApiController
{
    public function index() {
        return [
            'status' => 'online',
            'developer' => 'Cyberbyte Studios',
            'version' => 1 // todo: add versioning
        ];
    }
}
