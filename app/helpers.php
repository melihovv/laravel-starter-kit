<?php

/**
 * @return string
 */
function get_current_action() : string
{
    list(, $action) = explode('@', Route::getCurrentRoute()->getActionName());

    return $action;
}
