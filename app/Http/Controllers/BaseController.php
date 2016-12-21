<?php

namespace ArmaWorks\Http\Controllers;

use ArmaWorks\Base\Http\Controllers\Controller;

abstract class BaseController extends Controller
{

    /**
     * @return \ArmaWorks\Models\Foundation\User
     */
    public function getAuthUser()
    {
        return auth_user();
    }

}
