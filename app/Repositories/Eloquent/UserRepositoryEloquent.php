<?php

namespace ArmaWorks\Repositories\Eloquent;

use ArmaWorks\Models\Foundation\User;
use ArmaWorks\Presenters\UserPresenter;
use Someline\Repositories\Criteria\RequestCriteria;
use ArmaWorks\Repositories\Interfaces\UserRepository;
use ArmaWorks\Validators\UserValidator;

/**
 * Class UserRepositoryEloquent
 * @package namespace ArmaWorks\Repositories\Eloquent;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {
        return UserValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return UserPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    /**
     * @param array|Collection $userIds
     * @return $this
     */
    public function byUserIds($userIds)
    {
        $this->model = $this->model->whereIn('user_id', $userIds);
        return $this;
    }
}
