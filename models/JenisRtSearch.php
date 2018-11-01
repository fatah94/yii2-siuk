<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\JenisRt;

/**
 * JenisRtSearch represents the model behind the search form of `app\models\JenisRt`.
 */
class JenisRtSearch extends JenisRt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jenis_rt', 'kriteria_rt', 'deskripsi_jenis_rt'], 'safe'],
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
        $query = JenisRt::find();

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
        $query->andFilterWhere(['like', 'id_jenis_rt', $this->id_jenis_rt])
            ->andFilterWhere(['like', 'kriteria_rt', $this->kriteria_rt])
            ->andFilterWhere(['like', 'deskripsi_jenis_rt', $this->deskripsi_jenis_rt]);

        return $dataProvider;
    }
}
