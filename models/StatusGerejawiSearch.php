<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StatusGerejawi;

/**
 * StatusGerejawiSearch represents the model behind the search form of `app\models\StatusGerejawi`.
 */
class StatusGerejawiSearch extends StatusGerejawi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sts_gerejawi', 'deskripsi_sts_gerejawi'], 'safe'],
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
        $query = StatusGerejawi::find();

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
        $query->andFilterWhere(['like', 'id_sts_gerejawi', $this->id_sts_gerejawi])
            ->andFilterWhere(['like', 'deskripsi_sts_gerejawi', $this->deskripsi_sts_gerejawi]);

        return $dataProvider;
    }
}
