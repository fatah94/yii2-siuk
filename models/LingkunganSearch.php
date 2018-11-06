<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lingkungan;

/**
 * LingkunganSearch represents the model behind the search form of `app\models\Lingkungan`.
 */
class LingkunganSearch extends Lingkungan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_lingkungan', 'nama_lingkungan', 'lingk_pengurus', 'lingk_kontak', 'id_wilayah'], 'safe'],
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
        $query = Lingkungan::find()->innerJoinWith('wilayah', true);

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
        $query->andFilterWhere(['like', 'id_lingkungan', $this->id_lingkungan])
            ->andFilterWhere(['like', 'nama_lingkungan', $this->nama_lingkungan])
            ->andFilterWhere(['like', 'lingk_pengurus', $this->lingk_pengurus])
            ->andFilterWhere(['like', 'lingk_kontak', $this->lingk_kontak])
            ->andFilterWhere(['like', 'nama_wilayah', $this->id_wilayah]);

        return $dataProvider;
    }
}
