<?php

require_once './../../vendor/framework/controllers/Controller.php';

class CustomController extends Controller
{

    public function actionIndex()
    {

        require_once './../views/custom/index.php';

    }

    public function actionDetail()
    {

        require_once './../views/custom/detail.php';

    }

}