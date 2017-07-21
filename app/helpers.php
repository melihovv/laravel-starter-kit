<?php

if (!function_exists('get_current_action')) {
    /**
     * Get action name for the current route.
     *
     * @return string
     */
    function get_current_action()
    {
        list(, $action) = explode(
            '@',
            Route::getCurrentRoute()->getActionName()
        );

        return $action;
    }
}

if (!function_exists('controller_action')) {
    /**
     * Get conroller action.
     *
     * ```php
     * controller_action(\App\Http\Controllers\HomeController::class, 'index');
     * ```
     *
     * @return string
     */
    function controller_action($class, $action)
    {
        return "\\$class@$action";
    }
}
