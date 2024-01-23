<?php

namespace app\modules\api\controllers;

use yii\rest\ActiveController;
use Yii;

/**
 * Default controller for the `api` module
 */
class ApiController extends ActiveController
{
    public function afterAction($action,$result) {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return parent::afterAction($action,$result);
    }
}
