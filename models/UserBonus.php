<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_bonus".
 *
 * @property int $id
 * @property int|null $points
 * @property string|null $comment
 * @property string|null $date_create
 * @property int $user_id
 *
 * @property User $user
 */
class UserBonus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_bonus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['points', 'user_id'], 'default', 'value' => null],
            [['points', 'user_id'], 'integer'],
            [['comment'], 'string'],
            [['date_create'], 'safe'],
            [['user_id'], 'required'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => UserRecord::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'points' => 'Points',
            'comment' => 'Comment',
            'date_create' => 'Date Create',
            'user_id' => 'User ID',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(UserRecord::class, ['id' => 'user_id']);
    }
}
