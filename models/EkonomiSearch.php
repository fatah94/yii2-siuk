<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ekonomi;

/**
 * EkonomiSearch represents the model behind the search form of `app\models\Ekonomi`.
 */
class EkonomiSearch extends Ekonomi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ekonomi', 'kriteria_ekonomi', 'deskripsi_ekonomi'], 'safe'],
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
        $query = Ekonomi::find();

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
        $query->andFilterWhere(['like', 'id_ekonomi', $this->id_ekonomi])
            ->andFilterWhere(['like', 'kriteria_ekonomi', $this->kriteria_ekonomi])
            ->andFilterWhere(['like', 'deskripsi_ekonomi', $this->deskripsi_ekonomi]);

        return $dataProvider;
    }
}
