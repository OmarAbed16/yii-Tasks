<?php

namespace app\controllers;

use yii\web\Controller;

class EzController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');  // This will load views/omaaar/index.php
    }
}
