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
} else {
    throw new RuntimeException('get_current_action name is already taken');
}

if (!function_exists('class_action')) {
    /**
     * Get conroller action.
     *
     * ```php
     * class_action(\App\Http\Controllers\HomeController::class, 'index');
     * ```
     *
     * @return string
     */
    function class_action($class, $action)
    {
        return "\\$class@$action";
    }
} else {
    throw new RuntimeException('class_action name is already taken');
}
