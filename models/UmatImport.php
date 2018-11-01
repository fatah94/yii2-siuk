<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "umat_import".
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
class UmatImport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'umat_import';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_umat'], 'integer'],
            [['id_keuskupan', 'id_paroki', 'id_wilayah', 'id_lingkungan', 'alamat', 'id_ekonomi', 'id_jenis_rt', 'np', 'id_agama', 'tempat_lahir', 'tgl_lahir', 'jen_kel', 'id_hub_kk', 'id_suku', 'id_pendidikan', 'id_bidstudi', 'id_pekerjaan', 'id_goldar', 'id_sts_sehat', 'id_wkt_baptis', 'id_sts_kawin', 'id_jbt_sosial', 'tmp_tinggal', 'status_komuni', 'id_sts_gerejawi', 'id_keterlibatan'], 'required'],
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
            'id_umat' => 'Id Umat',
            'id_keuskupan' => 'Id Keuskupan',
            'id_paroki' => 'Id Paroki',
            'id_wilayah' => 'Id Wilayah',
            'id_lingkungan' => 'Id Lingkungan',
            'alamat' => 'Alamat',
            'tempat_nikah' => 'Tempat Nikah',
            'tgl_nikah' => 'Tgl Nikah',
            'liber_matrimonium' => 'Liber Matrimonium',
            'id_ekonomi' => 'Id Ekonomi',
            'id_jenis_rt' => 'Id Jenis Rt',
            'np' => 'Np',
            'no_urut' => 'No Urut',
            'no_ktp' => 'No Ktp',
            'nama_anggota_rt' => 'Nama Anggota Rt',
            'id_agama' => 'Id Agama',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'jen_kel' => 'Jen Kel',
            'id_hub_kk' => 'Id Hub Kk',
            'id_suku' => 'Id Suku',
            'id_pendidikan' => 'Id Pendidikan',
            'id_bidstudi' => 'Id Bidstudi',
            'id_pekerjaan' => 'Id Pekerjaan',
            'id_goldar' => 'Id Goldar',
            'id_sts_sehat' => 'Id Sts Sehat',
            'tgl_upd_sts_sehat' => 'Tgl Upd Sts Sehat',
            'id_wkt_baptis' => 'Id Wkt Baptis',
            'tempat_baptis' => 'Tempat Baptis',
            'tgl_baptis' => 'Tgl Baptis',
            'status_krisma' => 'Status Krisma',
            'tempat_krisma' => 'Tempat Krisma',
            'tgl_krisma' => 'Tgl Krisma',
            'id_sts_kawin' => 'Id Sts Kawin',
            'id_jbt_sosial' => 'Id Jbt Sosial',
            'tmp_tinggal' => 'Tmp Tinggal',
            'tahun_mulai_tinggal' => 'Tahun Mulai Tinggal',
            'status_komuni' => 'Status Komuni',
            'id_sts_gerejawi' => 'Id Sts Gerejawi',
            'id_keterlibatan' => 'Id Keterlibatan',
            'liberbap' => 'Liberbap',
            'notum' => 'Notum',
            'tgl_update' => 'Tgl Update',
        ];
    }
}
