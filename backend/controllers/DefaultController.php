<?php

require_once './../../vendor/framework/controllers/Controller.php';

class DefaultController extends Controller
{

    public function actionIndex()
    {

        //this is deprecated ( not used anymore )
        //require_once './../views/default/index.php';

        $arr_input = [
            'key' => 'value',
            'a_key_to_be_converted_into_a_variable' => 'the value',
            'another_key_to_be_converted_into_a_variable' => 'another value'
        ];

        return $this->render('index', $arr_input);

    }

    public function actionCustom()
    {

        //deprecated
        //require_once './../views/default/custom.php';

        $arr_input = [
            'key' => 'and another value',
            'a_key_to_be_converted_into_a_variable' => 'and another ... value',
            'another_key_to_be_converted_into_a_variable' => 'and and ... another value'
        ];

        return $this->render('custom', $arr_input);

    }

}