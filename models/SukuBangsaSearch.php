<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SukuBangsa;

/**
 * SukuBangsaSearch represents the model behind the search form of `app\models\SukuBangsa`.
 */
class SukuBangsaSearch extends SukuBangsa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_suku', 'deskripsi_suku'], 'safe'],
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
        $query = SukuBangsa::find();

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
        $query->andFilterWhere(['like', 'id_suku', $this->id_suku])
            ->andFilterWhere(['like', 'deskripsi_suku', $this->deskripsi_suku]);

        return $dataProvider;
    }
}
