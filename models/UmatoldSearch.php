<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Umatold;

/**
 * UmatSearch represents the model behind the search form of `app\models\Umat`.
 */
class UmatoldSearch extends Umat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'agama', 'jenis_kelamin', 'hub_KRT', 'suku', 'status_pendidikan', 'jenjang_pendidikan', 'bidang_studi', 'gol_darah', 'status_kesehatan', 'waktu_baptis', 'status_kawin', 'jabatan_sosial', 'lama_tinggal', 'status_gerejawi', 'keterlibatan', 'liber_baptizatorium', 'notum'], 'integer'],
            [['nama', 'tempat_tgl_lahir', 'pekerjaan', 'tempat_tgl_baptis', 'tempat_tgl_penguatan', 'tempat_tinggal'], 'safe'],
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
    public function search($params,$id=NULL)
    {
        $query = Umatold::find();

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
            'id' => $this->id,
            'agama' => $this->agama,
            'jenis_kelamin' => $this->jenis_kelamin,
            'hub_KRT' => $this->hub_KRT,
            'suku' => $this->suku,
            'status_pendidikan' => $this->status_pendidikan,
            'jenjang_pendidikan' => $this->jenjang_pendidikan,
            'bidang_studi' => $this->bidang_studi,
            'gol_darah' => $this->gol_darah,
            'status_kesehatan' => $this->status_kesehatan,
            'waktu_baptis' => $this->waktu_baptis,
            'status_kawin' => $this->status_kawin,
            'jabatan_sosial' => $this->jabatan_sosial,
            'lama_tinggal' => $this->lama_tinggal,
            'status_gerejawi' => $this->status_gerejawi,
            'keterlibatan' => $this->keterlibatan,
            'liber_baptizatorium' => $this->liber_baptizatorium,
            'notum' => $this->notum,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'tempat_tgl_lahir', $this->tempat_tgl_lahir])
            ->andFilterWhere(['like', 'pekerjaan', $this->pekerjaan])
            ->andFilterWhere(['like', 'tempat_tgl_baptis', $this->tempat_tgl_baptis])
            ->andFilterWhere(['like', 'tempat_tgl_penguatan', $this->tempat_tgl_penguatan])
            ->andFilterWhere(['like', 'tempat_tinggal', $this->tempat_tinggal]);

        if($id == NULL){
            $query->andWhere("hub_KRT = 1");
        }else{
            $query->orWhere("id = $id")
                ->orWhere("idkk = $id");
        }

        return $dataProvider;
    }
}
