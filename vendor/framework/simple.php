<?php

require_once 'components/route/route.php';

class simple
{

    private static $arr_config = [];

    public static function init($arr_config = [])
    {
        self::$arr_config = $arr_config;
    }

    public static function run()
    {

        $arr_get = $_GET;

        route::execute($arr_get);

        $controller = route::get_controller();

        $controller_name = ucfirst($controller) . 'Controller';

        $action = route::get_action();

        $action_name = 'action' . ucfirst($action);

        require_once './../controllers/' . $controller_name . '.php';

        $class_instance = new $controller_name();

        $class_instance->$action_name();

    }

}