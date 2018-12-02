<?php

class detect_action
{

    const DEFAULT_ACTION = 'index';

    private static $action = null;

    public static function execute($arr_get = [])
    {

        self::$action = self::DEFAULT_ACTION;

        if (
        isset($arr_get['action'])
        ) {
            self::$action = $arr_get['action'];
        }

        return self::$action;

    }

    public static function get_action()
    {
        return self::$action;
    }

}