<?php

namespace app\modules\api\controllers;

use app\modules\api\controllers\ApiController;

/**
 * Default controller for the `api` module
 */
class DefaultController extends ApiController
{
    public $modelClass = 'app\models\UserRecord';  
}
