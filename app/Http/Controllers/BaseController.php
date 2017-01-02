<?php

namespace ArmaWorks\Http\Controllers;

use ArmaWorks\Models\Foundation\User;
use Someline\Base\Http\Controllers\Controller;

abstract class BaseController extends Controller
{
    public function getAuthUser(): User
    {
        return auth_user();
    }
}
