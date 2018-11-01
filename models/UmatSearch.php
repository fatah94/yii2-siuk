<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Umat;

/**
 * UmatSearch represents the model behind the search form of `app\models\Umat`.
 */
class UmatSearch extends Umat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_umat'], 'integer'],
            [['id_keuskupan', 'id_paroki', 'id_wilayah', 'id_lingkungan', 'alamat', 'tempat_nikah', 'tgl_nikah', 'liber_matrimonium', 'id_ekonomi', 'id_jenis_rt', 'np', 'no_urut', 'no_ktp', 'nama_anggota_rt', 'id_agama', 'tempat_lahir', 'tgl_lahir', 'jen_kel', 'id_hub_kk', 'id_suku', 'id_pendidikan', 'id_bidstudi', 'id_pekerjaan', 'id_goldar', 'id_sts_sehat', 'tgl_upd_sts_sehat', 'id_wkt_baptis', 'tempat_baptis', 'tgl_baptis', 'status_krisma', 'tempat_krisma', 'tgl_krisma', 'id_sts_kawin', 'id_jbt_sosial', 'tmp_tinggal', 'tahun_mulai_tinggal', 'status_komuni', 'id_sts_gerejawi', 'id_keterlibatan', 'liberbap', 'notum', 'tgl_update'], 'safe'],
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
    public function search($params, $id=NULL, $attr=Null)
    {
        $query = Umat::find();

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
            'id_umat' => $this->id_umat,
            'tgl_nikah' => $this->tgl_nikah,
            'tgl_lahir' => $this->tgl_lahir,
            'tgl_upd_sts_sehat' => $this->tgl_upd_sts_sehat,
            'tgl_baptis' => $this->tgl_baptis,
            'tgl_krisma' => $this->tgl_krisma,
            'tahun_mulai_tinggal' => $this->tahun_mulai_tinggal,
            'tgl_update' => $this->tgl_update,
        ]);

        $query->andFilterWhere(['like', 'id_keuskupan', $this->id_keuskupan])
            ->andFilterWhere(['like', 'id_paroki', $this->id_paroki])
            ->andFilterWhere(['like', 'id_wilayah', $this->id_wilayah])
            ->andFilterWhere(['like', 'id_lingkungan', $this->id_lingkungan])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'tempat_nikah', $this->tempat_nikah])
            ->andFilterWhere(['like', 'liber_matrimonium', $this->liber_matrimonium])
            ->andFilterWhere(['like', 'id_ekonomi', $this->id_ekonomi])
            ->andFilterWhere(['like', 'id_jenis_rt', $this->id_jenis_rt])
            ->andFilterWhere(['like', 'np', $this->np])
            ->andFilterWhere(['like', 'no_urut', $this->no_urut])
            ->andFilterWhere(['like', 'no_ktp', $this->no_ktp])
            ->andFilterWhere(['like', 'nama_anggota_rt', $this->nama_anggota_rt])
            ->andFilterWhere(['like', 'id_agama', $this->id_agama])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'jen_kel', $this->jen_kel])
            ->andFilterWhere(['like', 'id_hub_kk', $this->id_hub_kk])
            ->andFilterWhere(['like', 'id_suku', $this->id_suku])
            ->andFilterWhere(['like', 'id_pendidikan', $this->id_pendidikan])
            ->andFilterWhere(['like', 'id_bidstudi', $this->id_bidstudi])
            ->andFilterWhere(['like', 'id_pekerjaan', $this->id_pekerjaan])
            ->andFilterWhere(['like', 'id_goldar', $this->id_goldar])
            ->andFilterWhere(['like', 'id_sts_sehat', $this->id_sts_sehat])
            ->andFilterWhere(['like', 'id_wkt_baptis', $this->id_wkt_baptis])
            ->andFilterWhere(['like', 'tempat_baptis', $this->tempat_baptis])
            ->andFilterWhere(['like', 'status_krisma', $this->status_krisma])
            ->andFilterWhere(['like', 'tempat_krisma', $this->tempat_krisma])
            ->andFilterWhere(['like', 'id_sts_kawin', $this->id_sts_kawin])
            ->andFilterWhere(['like', 'id_jbt_sosial', $this->id_jbt_sosial])
            ->andFilterWhere(['like', 'tmp_tinggal', $this->tmp_tinggal])
            ->andFilterWhere(['like', 'status_komuni', $this->status_komuni])
            ->andFilterWhere(['like', 'id_sts_gerejawi', $this->id_sts_gerejawi])
            ->andFilterWhere(['like', 'id_keterlibatan', $this->id_keterlibatan])
            ->andFilterWhere(['like', 'liberbap', $this->liberbap])
            ->andFilterWhere(['like', 'notum', $this->notum]);

            if($id == NULL){
                $query->andWhere("id_hub_kk = 01");
            }else{
                $query->orWhere(['id_umat' => $id])
                    ->orWhere(['id_keluarga' => $id]);
            }    

            if($attr != NULL){
                $query->andWhere($attr);
            }    

        return $dataProvider;
    }
}
