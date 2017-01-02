<?php
namespace ArmaWorks\Models;

use ArmaWorks\Models\Foundation\User;
use Someline\Base\Models\BaseModel as Model;

class BaseModel extends Model
{

    /**
     * @return User
     */
    public function getUser()
    {
        return parent::getUser();
    }

    /**
     * @return User
     */
    public function getAuthUser()
    {
        return parent::getAuthUser();
    }

}