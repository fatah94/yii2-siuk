<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GolonganDarah;

/**
 * GolonganDarahSearch represents the model behind the search form of `app\models\GolonganDarah`.
 */
class GolonganDarahSearch extends GolonganDarah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_goldar', 'deskripsi_goldar'], 'safe'],
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
        $query = GolonganDarah::find();

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
        $query->andFilterWhere(['like', 'id_goldar', $this->id_goldar])
            ->andFilterWhere(['like', 'deskripsi_goldar', $this->deskripsi_goldar]);

        return $dataProvider;
    }
}
