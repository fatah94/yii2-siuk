<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StatusPerkawinan;

/**
 * StatusPerkawinanSearch represents the model behind the search form of `app\models\StatusPerkawinan`.
 */
class StatusPerkawinanSearch extends StatusPerkawinan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sts_kawin', 'deskripsi_sts_kawin', 'keterangan_sts_kawin'], 'safe'],
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
        $query = StatusPerkawinan::find();

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
        $query->andFilterWhere(['like', 'id_sts_kawin', $this->id_sts_kawin])
            ->andFilterWhere(['like', 'deskripsi_sts_kawin', $this->deskripsi_sts_kawin])
            ->andFilterWhere(['like', 'keterangan_sts_kawin', $this->keterangan_sts_kawin]);

        return $dataProvider;
    }
}
