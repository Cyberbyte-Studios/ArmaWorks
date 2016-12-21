<?php

namespace Someline\Api\Controllers;

use Dingo\Api\Exception\DeleteResourceFailedException;
use Dingo\Api\Exception\StoreResourceFailedException;
use Dingo\Api\Exception\UpdateResourceFailedException;
use Illuminate\Http\Response;
use Prettus\Validator\Contracts\ValidatorInterface;
use Someline\Http\Requests\UserCreateRequest;
use Someline\Http\Requests\UserUpdateRequest;
use Someline\Repositories\Interfaces\UserRepository;
use Someline\Validators\UserValidator;

class UsersController extends BaseController
{
    protected $repository;
    protected $validator;

    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function index(): Response
    {
        return $this->repository->all();
    }

    public function store(UserCreateRequest $request): Response
    {
        $data = $request->all();
        $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
        $data['password'] = bcrypt($data['password']);
        $user = $this->repository->create($data);
        return $user;
    }

    public function show($id): Response
    {
        return $this->repository->find($id);
    }

    public function me()
    {
        $user_id = auth_user()->getUserId();
        return $this->repository->find($user_id);
    }

    public function update(UserUpdateRequest $request, int $id): Response
    {

        $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

        $user = $this->repository->update($request->all(), $id);

        // throw exception if update failed
//        throw new UpdateResourceFailedException('Failed to update.');

        // Updated, return 204 No Content
        return $this->response->noContent();

    }

    public function destroy(int $id): Response
    {
        $deleted = $this->repository->delete($id);

        if ($deleted) {
            return $this->response->noContent();
        } else {
            throw new DeleteResourceFailedException();
        }
    }
}
