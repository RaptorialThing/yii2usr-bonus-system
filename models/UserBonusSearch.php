<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UserBonus;

/**
 * UserBonusSearch represents the model behind the search form of `app\models\UserBonus`.
 */
class UserBonusSearch extends UserBonus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'points', 'user_id'], 'integer'],
            [['comment', 'date_create'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = UserBonus::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'points' => $this->points,
            'date_create' => $this->date_create,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['ilike', 'comment', $this->comment]);

        return $dataProvider;
    }
}
