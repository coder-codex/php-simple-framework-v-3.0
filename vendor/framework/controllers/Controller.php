<?php

class Controller
{

    public function render($_file_ = '', $_arr_ = [])
    {

        // get the current class name ( ex : DefaultController)
        $get_class = get_class($this);

        /*
         * we need to extract the base controller name ( ex : Default )
         * we need to know the usefull information ( from where does it start and where it ends )
         */
        $pos_controller = strpos($get_class, 'Controller');

        //extracting the base controller name
        $controller_name = substr($get_class, 0, $pos_controller);

        // output buffer start
        ob_start();
        //convert all keys to variables
        extract($_arr_, EXTR_REFS);
        //load the view content
        require_once '../views/' . $controller_name . '/' . $_file_ . '.php';
        //flush all the content loaded
        return ob_end_flush();

    }

}