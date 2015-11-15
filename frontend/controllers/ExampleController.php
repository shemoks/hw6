<?php
namespace frontend\controllers;

use frontend\models\Example;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class ExampleController extends Controller
{
    public function actionIndex()
    {
        $model = new Example();
        $name = $model->getName();

        return $this->render('index', [
            'name' => $name
        ]);
    }
}
