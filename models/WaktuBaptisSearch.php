<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\WaktuBaptis;

/**
 * WaktuBaptisSearch represents the model behind the search form of `app\models\WaktuBaptis`.
 */
class WaktuBaptisSearch extends WaktuBaptis
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_wkt_baptis', 'deskripsi_wkt_baptis'], 'safe'],
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
        $query = WaktuBaptis::find();

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
        $query->andFilterWhere(['like', 'id_wkt_baptis', $this->id_wkt_baptis])
            ->andFilterWhere(['like', 'deskripsi_wkt_baptis', $this->deskripsi_wkt_baptis]);

        return $dataProvider;
    }
}
