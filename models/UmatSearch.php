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
    public function search($params, $id=NULL, $attr=Null, $id_lingkungan=NULL)
    {
        $query = Umat::find()
            ->innerJoinWith('agama', true)
            ->innerJoinWith('hubkk', true)
            ->innerJoinWith('keuskupan', true)
            ->innerJoinWith('paroki', true)
            ->innerJoinWith('wilayah', true)
            ->innerJoinWith('lingkungan', true)
            ->innerJoinWith('ekonomi', true)
            ->innerJoinWith('jenisrt', true)
            ->innerJoinWith('suku', true)
            ->innerJoinWith('pendidikan', true)
            ->innerJoinWith('bidangstudi', true)
            ->innerJoinWith('pekerjaan', true)
            ->innerJoinWith('golongandarah', true)
            ->innerJoinWith('statuskesehatan', true)
            ->innerJoinWith('waktubaptis', true)
            ->innerJoinWith('statusperkawinan', true)
            ->innerJoinWith('jabatansosial', true)
            ->innerJoinWith('statusgerejawi', true)
            ->innerJoinWith('keterlibatan', true);

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
            'jen_kel' => $this->jen_kel,
        ]);

        $query->andFilterWhere(['like', 'id_keuskupan', $this->id_keuskupan])
            ->andFilterWhere(['like', 'nama_anggota_rt', $this->nama_anggota_rt])
            ->andFilterWhere(['like', 'notum', $this->notum]);

            if($id == NULL){
                $query->andWhere("no_urut = 1");
            }else{
                $query->orWhere(['np' => $id]);
            }    

            if($attr != NULL){
                $query->andFilterWhere($attr);
            }    

            if($id_lingkungan != NULL){
                $query->andFilterWhere(['uamt.id_lingkungan' => $id_lingkungan]);
            }   
             
        return $dataProvider;
    }
}
