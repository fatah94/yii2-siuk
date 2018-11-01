<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StatusKesehatan;

/**
 * StatusKesehatanSearch represents the model behind the search form of `app\models\StatusKesehatan`.
 */
class StatusKesehatanSearch extends StatusKesehatan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sts_sehat', 'deskripsi_sts_sehat'], 'safe'],
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
        $query = StatusKesehatan::find();

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
        $query->andFilterWhere(['like', 'id_sts_sehat', $this->id_sts_sehat])
            ->andFilterWhere(['like', 'deskripsi_sts_sehat', $this->deskripsi_sts_sehat]);

        return $dataProvider;
    }
}
