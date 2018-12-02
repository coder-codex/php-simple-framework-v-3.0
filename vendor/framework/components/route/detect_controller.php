<?php

class detect_controller
{

    const DEFAULT_CONTROLLER = 'default';

    private static $controller = null;

    public static function execute($arr_get = [])
    {

        self::$controller = self::DEFAULT_CONTROLLER;

        if (
        isset($arr_get['controller'])
        ) {
            self::$controller = $arr_get['controller'];
        }

        return self::$controller;

    }

    public static function get_controller()
    {
        return self::$controller;
    }

}