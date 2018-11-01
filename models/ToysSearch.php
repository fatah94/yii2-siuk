<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Toys;

/**
 * ToysSearch represents the model behind the search form of `app\models\Toys`.
 */
class ToysSearch extends Toys
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['toy_id'], 'integer'],
            [['toy'], 'safe'],
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
        $query = Toys::find();

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
        $query->andFilterWhere([
            'toy_id' => $this->toy_id,
        ]);

        $query->andFilterWhere(['like', 'toy', $this->toy]);

        return $dataProvider;
    }
}
