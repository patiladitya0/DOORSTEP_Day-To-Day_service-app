<?php

require_once 'session.php';

/**
 * Summary of check
 * @param mixed $type
 * @return bool
 */
function check($type = null)
{
    if (is_null($type)) {
        return isset($_SESSION['providers']);
    } elseif (isset($_SESSION['providers'])) {
        return $_SESSION['providers']->name == $type;
    }
    return false;
}
