<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

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
        return self::getList($id, $list);
    }

    public static function getListKeuskupan($id = Null){
        $row = Keuskupan::find()->all();
        return  ArrayHelper::map($row, 'id_keuskupan', 'nama_keuskupan');
    }

    public static function getListParoki($id = Null){
        $row = Paroki::find()->all();
        return  ArrayHelper::map($row, 'id_paroki', 'nama_paroki');
    }

    public static function getListWilayah($id = Null){
        $row = Wilayah::find()->all();
        return  ArrayHelper::map($row, 'id_wilayah', 'nama_wilayah');
    }

    public static function getListLingkungan($id = Null){
        $row = Lingkungan::find()->all();
        return  ArrayHelper::map($row, 'id_lingkungan', 'nama_lingkungan');
    }

    public static function getListEkonomi($id = Null){
        $row = Ekonomi::find()->all();
        return  ArrayHelper::map($row, 'id_ekonomi', 'kriteria_ekonomi');
    }

    public static function getListJenisRt($id = Null){
        $row = JenisRt::find()->all();
        return  ArrayHelper::map($row, 'id_jenis_rt', 'kriteria_rt');
    }

    public static function getListAgama($id = Null){
        $row = Agama::find()->all();
        return  ArrayHelper::map($row, 'id_agama', 'nama_agama');
    }

    public static function getListHubKk($id = Null){
        $row = HubunganKk::find()->all();
        return  ArrayHelper::map($row, 'id_hub_kk', 'deskripsi_hub_kk');
    }

    public static function getListSuku($id = Null){
        $row = SukuBangsa::find()->all();
        return  ArrayHelper::map($row, 'id_suku', 'deskripsi_suku');
    }

    public static function getListPendidikan($id = Null){
        $row = Pendidikan::find()->all();
        return  ArrayHelper::map($row, 'id_pendidikan', 'deskripsi_pendidikan');
    }

    public static function getListBidStudi($id = Null){
        $row = BidangStudi::find()->all();
        return  ArrayHelper::map($row, 'id_bidstudi', 'deskripsi_bidstudi');
    }

    public static function getListPekerjaan($id = Null){
        $row = Pekerjaan::find()->all();
        return  ArrayHelper::map($row, 'id_pekerjaan', 'deskripsi_pekerjaan');
    }

    public static function getListGolDar($id = Null){
        $row = GolonganDarah::find()->all();
        return  ArrayHelper::map($row, 'id_goldar', 'deskripsi_goldar');
    }

    public static function getListStsSehat($id = Null){
        $row = StatusKesehatan::find()->all();
        return  ArrayHelper::map($row, 'id_sts_sehat', 'deskripsi_sts_sehat');
    }

    public static function getListWktBaptis($id = Null){
        $row = WaktuBaptis::find()->all();
        return  ArrayHelper::map($row, 'id_wkt_baptis', 'deskripsi_wkt_baptis');
    }

    public static function getListStsKawin($id = Null){
        $row = StatusPerkawinan::find()->all();
        return  ArrayHelper::map($row, 'id_sts_kawin', 'deskripsi_sts_kawin');
    }

    public static function getListJbtSosial($id = Null){
        $row = JabatanSosial::find()->all();
        return  ArrayHelper::map($row, 'id_jbt_sosial', 'deskripsi_jbt_sosial');
    }

    public static function getListStsGerejawi($id = Null){
        $row = StatusGerejawi::find()->all();
        return  ArrayHelper::map($row, 'id_sts_gerejawi', 'deskripsi_sts_gerejawi');
    }

    public static function getListKeterlibatan($id = Null){
        $row = Keterlibatan::find()->all();
        return ArrayHelper::map($row, 'id_keterlibatan', 'deskripsi_keterlibatan');
    }

    public static function getList($id, $list){
        if($id === NULL){
            return $list;
        }else{
            return isset($list[$id]) ? $list[$id] : '';
        }
    }

    public function getAgama(){
        return $this->hasOne(Agama::className(), ['id_agama' => 'id_agama']);
    }

    public function getHubkk(){
        return $this->hasOne(HubunganKk::className(), ['id_hub_kk' => 'id_hub_kk']);
    }

    public function getKeuskupan(){
        return $this->hasOne(Keuskupan::className(), ['id_keuskupan' => 'id_keuskupan']);
    }

    public function getParoki(){
        return $this->hasOne(Paroki::className(), ['id_paroki' => 'id_paroki']);
    }

    public function getWilayah(){
        return $this->hasOne(Wilayah::className(), ['id_wilayah' => 'id_wilayah']);
    }

    public function getLingkungan(){
        return $this->hasOne(Lingkungan::className(), ['id_lingkungan' => 'id_lingkungan']);
    }

    public function getEkonomi(){
        return $this->hasOne(Ekonomi::className(), ['id_ekonomi' => 'id_ekonomi']);
    }

    public function getJenisrt(){
        return $this->hasOne(JenisRt::className(), ['id_jenis_rt' => 'id_jenis_rt']);
    }
    
    public function getSuku(){
        return $this->hasOne(SukuBangsa ::className(), ['id_suku' => 'id_suku']);
    }

    public function getPendidikan(){
        return $this->hasOne(Pendidikan::className(), ['id_pendidikan' => 'id_pendidikan']);
    }

    public function getBidangstudi(){
        return $this->hasOne(BidangStudi::className(), ['id_bidstudi' => 'id_bidstudi']);
    }

    public function getPekerjaan(){
        return $this->hasOne(Pekerjaan::className(), ['id_pekerjaan' => 'id_pekerjaan']);
    }

    public function getGolongandarah(){
        return $this->hasOne(GolonganDarah::className(), ['id_goldar' => 'id_goldar']);
    }

    public function getStatuskesehatan(){
        return $this->hasOne(StatusKesehatan::className(), ['id_sts_sehat' => 'id_sts_sehat']);
    }

    public function getWaktubaptis(){
        return $this->hasOne(WaktuBaptis::className(), ['id_wkt_baptis' => 'id_wkt_baptis']);
    }

    public function getStatusperkawinan(){
        return $this->hasOne(StatusPerkawinan::className(), ['id_sts_kawin' => 'id_sts_kawin']);
    }

    public function getJabatansosial(){
        return $this->hasOne(JabatanSosial::className(), ['id_jbt_sosial' => 'id_jbt_sosial']);
    }

    public function getStatusgerejawi(){
        return $this->hasOne(StatusGerejawi::className(), ['id_sts_gerejawi' => 'id_sts_gerejawi']);
    }

    public function getKeterlibatan(){
        return $this->hasOne(Keterlibatan::className(), ['id_keterlibatan' => 'id_keterlibatan']);
    }

}
