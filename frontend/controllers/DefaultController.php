<?php

require_once './../../vendor/framework/controllers/Controller.php';

class DefaultController extends Controller
{

    public function actionIndex()
    {

        require_once './../views/default/index.php';

    }

    public function actionCustom()
    {

        require_once './../views/default/custom.php';

    }

}