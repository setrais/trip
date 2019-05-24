<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Trip;

/**
 * TripSearch represents the model behind the search form about `common\models\Trip`.
 */
class TripSearch extends Trip
{
    public $city;
    public $service;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'service', 'corporate_id', 'number', 'user_id', 'created_at', 'updated_at', 'coordination_at', 'saved_at', 'tag_le_id', 'trip_purpose_id', 'trip_purpose_parent_id', 'status'], 'integer'],
            [['city'], 'string'],
            [['trip_purpose_desc','city'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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

        $query = Trip::find()->distinct(true)->select( array('trip.id'))->joinWith('tripServices')
                             ->leftJoin('airport_name start_point','trip_service.start_point_id=start_point.airport_id');

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
            'corporate_id' => $this->corporate_id,
            'number' => $this->number,
            'user_id' => $this->user_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'coordination_at' => $this->coordination_at,
            'saved_at' => $this->saved_at,
            'tag_le_id' => $this->tag_le_id,
            'trip_purpose_id' => $this->trip_purpose_id,
            'trip_purpose_parent_id' => $this->trip_purpose_parent_id,
            'status' => $this->status,
            'trip_service.service_id' => $this->service,
        ]);
        $query->andFilterWhere(['like', 'trip_purpose_desc', $this->trip_purpose_desc]);
        if ($this->city<>'') {
            $query->andWhere(['like', 'start_point.value', $this->city]);
        }


        return $dataProvider;
    }
}
