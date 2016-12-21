<?php

if (!function_exists('auth_user')) {

    /**
     * @return \ArmaWorks\Model\Foundation\User|\ArmaWorks\Models\Foundation\User
     */
    function auth_user()
    {
        return current_auth_user();
    }

}

if (!function_exists('rest_client')) {

    /**
     * @param null $service_name
     * @param null $debug_mode
     * @return \ArmaWorks\Rest\RestClient
     */
    function rest_client($service_name = null, $debug_mode = null)
    {
        return new \ArmaWorks\Rest\RestClient($service_name, $debug_mode);
    }

}