<?php

namespace ArmaWorks\Api\Controllers;

use Someline\Base\Api\Controllers\Controller;

abstract class BaseApiController extends Controller
{
    /**
     * @return \ArmaWorks\Models\Foundation\User
     */
    public function getAuthUser()
    {
        return auth_user();
    }

}