<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string|null $name
 */
class UserRecord extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['balance'], 'filter', 'filter' => 'intval', 'skipOnEmpty' => false],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'balance' => 'Balance'
        ];
    }

    public function setBalance($points)
    {
        return $this->balance = $points;
    }

    public function addBalancePoints($points)
    {
        return $this->setBalance(($this->getBalance() + $points));
    }

    public function removeBalancePoints($points)
    {
        if ($this->getBalance() >= $points) {
            return $this->setBalance($this->getBalance() - $points);
        }
        return false;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function getBonuses()
    {
        return $this->hasMany(UserBonus::class, ['user_id' => 'id'])->inverseOf('user');
    }
}
