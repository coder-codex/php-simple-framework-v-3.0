<?php

require_once 'detect_controller.php';
require_once 'detect_action.php';

class route
{

    private static $controller = null;
    private static $action = null;

    public static function execute($arr_get = [])
    {
        self::$controller = detect_controller::execute($arr_get);
        self::$action = detect_action::execute($arr_get);
    }

    public static function get_controller()
    {
        return self::$controller;
    }

    public static function get_action()
    {
        return self::$action;
    }

}