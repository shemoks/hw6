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

        return $this->render('index', [
            'model' => $model,
        ]);
    }
}
