<?php

namespace app\modules\api\controllers;

use app\models\Country;
use app\models\UserBonus;
use app\modules\api\controllers\ApiController;
use Yii;
use app\models\UserRecord;

/**
 * User controller for the `api` module
 */
class UserController extends ApiController
{
    public $modelClass = 'app\models\UserRecord';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',

    ];

    public function actionBonus()
    {
        $id = Yii::$app->request->get('id');
        $user = new UserRecord();
        $user = $user->find()->where(['id' => $id])->with('bonuses')->one();

        if (is_null($user)) {
            return ['status' => 'error: User not found'];
        }

        $data = [
            'user' => $user,
            'bonuses' => [],
        ];

        foreach ($user->bonuses as $bonus) {
            $data['bonuses'][] = $bonus;
        }

        return $data;
    }

    public function actionBalance()
    {
        $item_id = Yii::$app->request->post("item_id");

        $user_id = Yii::$app->request->get("id");

        $user = new UserRecord();
        $user = $user->find()->where(['id' => $user_id])->one();

        if (is_null($user)) {
            return ['status' => 'error: User not found'];
        }

        $balance = $user->getBalance();

        switch ($item_id) {
            case '1':
                $points = 10;
                break;
            default:
                $points = 0;
        }

        if ($balance >= abs($points)) {
            if ($user->updateCounters(['balance' => -$points])) {
                $userBonus = new UserBonus();
                $userBonus->updateAttributes([
                    "points" => $points,
                    "comment" => "",
                    "date_create" => date("Y-m-d"),
                ]);
                $userBonus->link('user', $user);
            }
            $newBalance = $user->getBalance();
            return ['status' => 'success', 'balance before:' => $balance, 'balance now' => $newBalance];
        }
        return ['status' => 'error', 'balance' => $balance];

    }
}
