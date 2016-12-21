<?php
/**
 * Created for someline-starter.
 * User: Libern
 */

namespace ArmaWorks\Api\Controllers;

use ArmaWorks\Base\Api\Controllers\Controller;

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