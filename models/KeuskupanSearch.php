<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Keuskupan;

/**
 * KeuskupanSearch represents the model behind the search form of `app\models\Keuskupan`.
 */
class KeuskupanSearch extends Keuskupan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_keuskupan', 'nama_keuskupan', 'alamat_keuskupan'], 'safe'],
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
        $query = Keuskupan::find();

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
        $query->andFilterWhere(['like', 'id_keuskupan', $this->id_keuskupan])
            ->andFilterWhere(['like', 'nama_keuskupan', $this->nama_keuskupan])
            ->andFilterWhere(['like', 'alamat_keuskupan', $this->alamat_keuskupan]);

        return $dataProvider;
    }
}
