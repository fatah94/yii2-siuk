<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "umat".
 *
 * @property int $id_umat
 * @property string $id_keuskupan
 * @property string $id_paroki
 * @property string $id_wilayah
 * @property string $id_lingkungan
 * @property string $alamat
 * @property string $tempat_nikah
 * @property string $tgl_nikah
 * @property string $liber_matrimonium
 * @property string $id_ekonomi
 * @property string $id_jenis_rt
 * @property string $np
 * @property string $no_urut
 * @property string $no_ktp
 * @property string $nama_anggota_rt
 * @property string $id_agama
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $jen_kel
 * @property string $id_hub_kk
 * @property string $id_suku
 * @property string $id_pendidikan
 * @property string $id_bidstudi
 * @property string $id_pekerjaan
 * @property string $id_goldar
 * @property string $id_sts_sehat
 * @property string $tgl_upd_sts_sehat
 * @property string $id_wkt_baptis
 * @property string $tempat_baptis
 * @property string $tgl_baptis
 * @property string $status_krisma
 * @property string $tempat_krisma
 * @property string $tgl_krisma
 * @property string $id_sts_kawin
 * @property string $id_jbt_sosial
 * @property string $tmp_tinggal
 * @property string $tahun_mulai_tinggal
 * @property string $status_komuni
 * @property string $id_sts_gerejawi
 * @property string $id_keterlibatan
 * @property string $liberbap
 * @property string $notum
 * @property string $tgl_update
 */
class Umat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'umat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_keuskupan', 'id_paroki', 'id_wilayah', 'id_lingkungan', 'alamat', 'id_ekonomi', 'id_jenis_rt', 'np', 'id_agama', 'tempat_lahir', 'tgl_lahir', 'jen_kel', 'id_hub_kk', 'id_suku', 'id_pendidikan', 'id_bidstudi', 'id_pekerjaan', 'id_goldar', 'id_sts_sehat', 'id_wkt_baptis', 'id_sts_kawin', 'id_jbt_sosial', 'tmp_tinggal', 'status_komuni', 'id_sts_gerejawi', 'id_keterlibatan'], 'required', 'message' => '{attribute} tidak boleh kosong'],
            [['tgl_nikah', 'tgl_lahir', 'tgl_upd_sts_sehat', 'tgl_baptis', 'tgl_krisma', 'tahun_mulai_tinggal', 'tgl_update'], 'safe'],
            [['id_keuskupan', 'status_krisma', 'tmp_tinggal', 'status_komuni'], 'string', 'max' => 3],
            [['id_paroki'], 'string', 'max' => 5],
            [['id_wilayah'], 'string', 'max' => 8],
            [['id_lingkungan'], 'string', 'max' => 11],
            [['alamat', 'tempat_nikah', 'liber_matrimonium', 'tempat_lahir', 'tempat_baptis', 'tempat_krisma', 'liberbap', 'notum'], 'string', 'max' => 50],
            [['id_ekonomi', 'id_jenis_rt', 'no_urut', 'id_agama', 'id_hub_kk', 'id_suku', 'id_pendidikan', 'id_bidstudi', 'id_pekerjaan', 'id_goldar', 'id_sts_sehat', 'id_wkt_baptis', 'id_sts_kawin', 'id_jbt_sosial', 'id_sts_gerejawi', 'id_keterlibatan'], 'string', 'max' => 2],
            [['np'], 'string', 'max' => 14],
            [['no_ktp'], 'string', 'max' => 16],
            [['nama_anggota_rt'], 'string', 'max' => 200],
            [['jen_kel'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_umat' => 'ID Umat',
            'id_keuskupan' => 'Keuskupan',
            'id_paroki' => 'Paroki',
            'id_wilayah' => 'Wilayah',
            'id_lingkungan' => 'Lingkungan',
            'alamat' => 'Alamat',
            'tempat_nikah' => 'Tempat Nikah',
            'tgl_nikah' => 'Tanggal Nikah',
            'liber_matrimonium' => 'Liber Matrimonium',
            'id_ekonomi' => 'Ekonomi',
            'id_jenis_rt' => 'Jenis RT',
            'np' => 'Np',
            'no_urut' => 'No Urut',
            'no_ktp' => 'No Ktp',
            'nama_anggota_rt' => 'Nama Anggota RT',
            'id_agama' => 'Agama',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tanggal Lahir',
            'jen_kel' => 'Jenis Kelamin',
            'id_hub_kk' => 'Hubungan Kepala Keluarga',
            'id_suku' => 'Suku',
            'id_pendidikan' => 'Pendidikan',
            'id_bidstudi' => 'Bidang Studi',
            'id_pekerjaan' => 'Pekerjaan',
            'id_goldar' => 'Golongan Darah',
            'id_sts_sehat' => 'Status Sehat',
            'tgl_upd_sts_sehat' => 'Tanggal Update Status Sehat',
            'id_wkt_baptis' => 'Waktu Baptis',
            'tempat_baptis' => 'Tempat Baptis',
            'tgl_baptis' => 'Tanggal Baptis',
            'status_krisma' => 'Status Krisma',
            'tempat_krisma' => 'Tempat Krisma',
            'tgl_krisma' => 'Tanggal Krisma',
            'id_sts_kawin' => 'Status Kawin',
            'id_jbt_sosial' => 'Jabatan Sosial',
            'tmp_tinggal' => 'Tempat Tinggal',
            'tahun_mulai_tinggal' => 'Tahun Mulai Tinggal',
            'status_komuni' => 'Status Komuni',
            'id_sts_gerejawi' => 'Status Gerejawi',
            'id_keterlibatan' => 'Keterlibatan',
            'liberbap' => 'Liber Baptizatorium',
            'notum' => 'Notum',
            'tgl_update' => 'Tanggal Update',
        ];
    }

    public static function getListJenKel($id = Null)
    {
        $list = [
            1 => "Laki - laki",
            2 => "Perempuan",
        ];

        if($id===NULL){
            return $list;
        }else{
            return isset($list[$id]) ? $list[$id] : '';
        }
    }

    public static function getListKeuskupan($id = Null){
        $row = Keuskupan::find()->all();

        $list = [];
        foreach($row as $i => $value){
            $list[$value->id_keuskupan] = $value->nama_keuskupan;
        }

        if($id === NULL){
            return $list;
        }else{
            return isset($list[$id]) ? $list[$id] : '';
        }
    }

    public static function getListParoki($id = Null){
        $row = Paroki::find()->all();

        $list = [];
        foreach($row as $i => $value){
            $list[$value->id_paroki] = $value->nama_paroki;
        }

        if($id === NULL){
            return $list;
        }else{
            return isset($list[$id]) ? $list[$id] : '';
        }
    }

    public static function getListWilayah($id = Null){
        $row = wilayah::find()->all();

        $list = [];
        foreach($row as $i => $value){
            $list[$value->id_wilayah] = $value->nama_wilayah;
        }

        if($id === NULL){
            return $list;
        }else{
            return isset($list[$id]) ? $list[$id] : '';
        }
    }

    public static function getListLingkungan($id = Null){
        $row = Lingkungan::find()->all();

        $list = [];
        foreach($row as $i => $value){
            $list[$value->id_lingkungan] = $value->nama_lingkungan;
        }

        if($id === NULL){
            return $list;
        }else{
            return isset($list[$id]) ? $list[$id] : '';
        }
    }

    public static function getListEkonomi($id = Null){
        $row = Ekonomi::find()->all();

        $list = [];
        foreach($row as $i => $value){
            $list[$value->id_ekonomi] = $value->kriteria_ekonomi;
        }

        if($id === NULL){
            return $list;
        }else{
            return isset($list[$id]) ? $list[$id] : '';
        }
    }

    public static function getListJenisRt($id = Null){
        $row = JenisRt::find()->all();

        $list = [];
        foreach($row as $i => $value){
            $list[$value->id_jenis_rt] = $value->kriteria_rt;
        }

        if($id === NULL){
            return $list;
        }else{
            return isset($list[$id]) ? $list[$id] : '';
        }
    }

    public static function getListAgama($id = Null){
        $row = Agama::find()->all();

        $list = [];
        foreach($row as $i => $value){
            $list[$value->id_agama] = $value->nama_agama;
        }

        if($id === NULL){
            return $list;
        }else{
            return isset($list[$id]) ? $list[$id] : '';
        }
    }

    public static function getListHubKk($id = Null){
        $row = HubunganKk::find()->all();

        $list = [];
        foreach($row as $i => $value){
            $list[$value->id_hub_kk] = $value->deskripsi_hub_kk;
        }

        if($id === NULL){
            return $list;
        }else{
            return isset($list[$id]) ? $list[$id] : '';
        }
    }

    public static function getListSuku($id = Null){
        $row = SukuBangsa::find()->all();

        $list = [];
        foreach($row as $i => $value){
            $list[$value->id_suku] = $value->deskripsi_suku;
        }

        if($id === NULL){
            return $list;
        }else{
            return isset($list[$id]) ? $list[$id] : '';
        }
    }

    public static function getListPendidikan($id = Null){
        $row = Pendidikan::find()->all();

        $list = [];
        foreach($row as $i => $value){
            $list[$value->id_pendidikan] = $value->deskripsi_pendidikan;
        }

        if($id === NULL){
            return $list;
        }else{
            return isset($list[$id]) ? $list[$id] : '';
        }
    }

    public static function getListBidStudi($id = Null){
        $row = BidangStudi::find()->all();

        $list = [];
        foreach($row as $i => $value){
            $list[$value->id_bidstudi] = $value->deskripsi_bidstudi;
        }

        if($id === NULL){
            return $list;
        }else{
            return isset($list[$id]) ? $list[$id] : '';
        }
    }

    public static function getListPekerjaan($id = Null){
        $row = Pekerjaan::find()->all();

        $list = [];
        foreach($row as $i => $value){
            $list[$value->id_pekerjaan] = $value->deskripsi_pekerjaan;
        }

        if($id === NULL){
            return $list;
        }else{
            return isset($list[$id]) ? $list[$id] : '';
        }
    }

    public static function getListGolDar($id = Null){
        $row = GolonganDarah::find()->all();

        $list = [];
        foreach($row as $i => $value){
            $list[$value->id_goldar] = $value->deskripsi_goldar;
        }

        if($id === NULL){
            return $list;
        }else{
            return isset($list[$id]) ? $list[$id] : '';
        }
    }

    public static function getListStsSehat($id = Null){
        $row = StatusKesehatan::find()->all();

        $list = [];
        foreach($row as $i => $value){
            $list[$value->id_sts_sehat] = $value->deskripsi_sts_sehat;
        }

        if($id === NULL){
            return $list;
        }else{
            return isset($list[$id]) ? $list[$id] : '';
        }
    }

    public static function getListWktBaptis($id = Null){
        $row = WaktuBaptis::find()->all();

        $list = [];
        foreach($row as $i => $value){
            $list[$value->id_wkt_baptis] = $value->deskripsi_wkt_baptis;
        }

        if($id === NULL){
            return $list;
        }else{
            return isset($list[$id]) ? $list[$id] : '';
        }
    }

    public static function getListStsKawin($id = Null){
        $row = StatusPerkawinan::find()->all();

        $list = [];
        foreach($row as $i => $value){
            $list[$value->id_sts_kawin] = $value->deskripsi_sts_kawin;
        }

        if($id === NULL){
            return $list;
        }else{
            return isset($list[$id]) ? $list[$id] : '';
        }
    }

    public static function getListJbtSosial($id = Null){
        $row = JabatanSosial::find()->all();

        $list = [];
        foreach($row as $i => $value){
            $list[$value->id_jbt_sosial] = $value->deskripsi_jbt_sosial;
        }

        if($id === NULL){
            return $list;
        }else{
            return isset($list[$id]) ? $list[$id] : '';
        }
    }

    public static function getListStsGerejawi($id = Null){
        $row = StatusGerejawi::find()->all();

        $list = [];
        foreach($row as $i => $value){
            $list[$value->id_sts_gerejawi] = $value->deskripsi_sts_gerejawi;
        }

        if($id === NULL){
            return $list;
        }else{
            return isset($list[$id]) ? $list[$id] : '';
        }
    }

    public static function getListKeterlibatan($id = Null){
        $row = Keterlibatan::find()->all();

        $list = [];
        foreach($row as $i => $value){
            $list[$value->id_keterlibatan] = $value->deskripsi_keterlibatan;
        }

        if($id === NULL){
            return $list;
        }else{
            return isset($list[$id]) ? $list[$id] : '';
        }
    }
}
