<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Paroki;

/**
 * ParokiSearch represents the model behind the search form of `app\models\Paroki`.
 */
class ParokiSearch extends Paroki
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_paroki', 'nama_paroki', 'alamat_paroki'], 'safe'],
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
        $query = Paroki::find();

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
        $query->andFilterWhere(['like', 'id_paroki', $this->id_paroki])
            ->andFilterWhere(['like', 'nama_paroki', $this->nama_paroki])
            ->andFilterWhere(['like', 'alamat_paroki', $this->alamat_paroki]);

        return $dataProvider;
    }
}
