<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "umat".
 *
 * @property int $id
 * @property string $nama
 * @property int $agama
 * @property string $tempat_tgl_lahir
 * @property int $jenis_kelamin
 * @property int $hub_KRT
 * @property int $suku
 * @property int $status_pendidikan
 * @property int $jenjang_pendidikan
 * @property int $bidang_studi
 * @property string $pekerjaan
 * @property int $gol_darah
 * @property int $status_kesehatan
 * @property int $waktu_baptis
 * @property string $tempat_tgl_baptis
 * @property string $tempat_tgl_penguatan
 * @property int $status_kawin
 * @property int $jabatan_sosial
 * @property string $tempat_tinggal
 * @property int $lama_tinggal
 * @property int $status_gerejawi
 * @property int $keterlibatan
 * @property int $liber_baptizatorium
 * @property int $notum
 */
class Umatold extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'old_umat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['nama', 'agama', 'tempat_tgl_lahir', 'jenis_kelamin', 'hub_KRT', 'suku', 'status_pendidikan', 'jenjang_pendidikan', 'bidang_studi', 'pekerjaan', 'gol_darah', 'status_kesehatan', 'waktu_baptis', 'tempat_tgl_baptis', 'tempat_tgl_penguatan', 'status_kawin', 'jabatan_sosial', 'tempat_tinggal', 'lama_tinggal', 'status_gerejawi', 'keterlibatan', 'liber_baptizatorium', 'notum'], 'required'],
            [['nama'], 'required'],
            [['id', 'idkk','agama', 'jenis_kelamin', 'hub_KRT', 'status_pendidikan', 'jenjang_pendidikan', 'gol_darah', 'status_kesehatan', 'waktu_baptis', 'status_kawin', 'jabatan_sosial', 'lama_tinggal', 'status_gerejawi', 'keterlibatan', 'notum'], 'integer'],
            [['nama', 'suku', 'bidang_studi', 'tempat_tgl_lahir', 'pekerjaan', 'tempat_tgl_baptis', 'tempat_tgl_penguatan', 'tempat_tinggal', 'liber_baptizatorium'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idkk' => 'ID Kepala Keluarga',
            'nama' => 'Nama',
            'agama' => 'Agama',
            'tempat_tgl_lahir' => 'Tempat Tanggal Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'hub_KRT' => 'Hubungan dengan Kepala Rumah Tangga',
            'suku' => 'Suku Bangsa',
            'status_pendidikan' => 'Status Pendidikan',
            'jenjang_pendidikan' => 'Jenjang Pendidikan',
            'bidang_studi' => 'Bidang Studi',
            'pekerjaan' => 'Pekerjaan',
            'gol_darah' => 'Golongan Darah',
            'status_kesehatan' => 'Status Kesehatan',
            'waktu_baptis' => 'Waktu Baptis',
            'tempat_tgl_baptis' => 'Tempat Tanggal Baptis',
            'tempat_tgl_penguatan' => 'Tempat Tanggal Penguatan',
            'status_kawin' => 'Status Kawin',
            'jabatan_sosial' => 'Jabatan Sosial',
            'tempat_tinggal' => 'Tempat Tinggal',
            'lama_tinggal' => 'Lama Tinggal',
            'status_gerejawi' => 'Status Gerejawi',
            'keterlibatan' => 'Keterlibatan',
            'liber_baptizatorium' => 'Liber Baptizatorium',
            'notum' => 'Notum',
        ];
    }

    public static function agama($value=NULL, $show=FALSE)
    {
        $options = [
            '' => "Pilih",
            1 => "Islam",
            2 => "Kristen",
            3 => "Katolik",
            4 => "Hindu",
            5 => "Budha",
            6 => "Khonghucu",
            7 => "Lainnya",
            8 => "Kato -> Non Kato",
            9 => "Kato -> Kristen",
            10 => "Katekumen"
        ];

        if($value===NULL && $show==TRUE){
            return '';
        }else if($value===NULL){
            return $options;
        }else{
            return isset($options[$value]) ? $options[$value] : '';
        }
    }

    public static function jenis_kelamin($value=NULL, $show=FALSE)
    {
        $options = [
            '' => "Pilih",
            1 => "Laki - laki",
            2 => "Perempuan",
        ];

        if($value===NULL && $show==TRUE){
            return '';
        }else if($value===NULL){
            return $options;
        }else{
            return isset($options[$value]) ? $options[$value] : '';
        }
    }

    public static function hub_krt($value=NULL, $show=FALSE)
    {
        $options = [
            '' => "Pilih",
            1 => "Kepala rumah tangga",
            2 => "Pasangan",
            3 => "Anak",
            4 => "Kakak - adik",
            5 => "Anak adopsi/ Anak tiri",
            6 => "Cucu",
            7 => "Orang tua/Mertua (Single)",
            8 => "Famili Lain",
            9 => "Pembantu/Sopir/Tukang kebun",
            10 => "Lain - lain"
        ];

        if($value===NULL && $show==TRUE){
            return '';
        }else if($value===NULL){
            return $options;
        }else{
            return isset($options[$value]) ? $options[$value] : '';
        }
    }    

    public static function status_pendidikan($value=NULL, $show=FALSE)
    {
        $options = [
            '' => 'Pilih', 
            '1' => 'Tamat', 
            '2' => 'Sedang di sekolah Katolik', 
            '3'=> 'Sedang di sekolah Non Katolik'
        ];

        if($value===NULL && $show==TRUE){
            return '';
        }else if($value===NULL){
            return $options;
        }else{
            return isset($options[$value]) ? $options[$value] : '';
        }
    }    

    public static function jenjang_pendidikan($value=NULL, $status=FALSE, $show=FALSE)
    {
        $tamat = [
            0 => 'Belum sekolah',
            1 => 'SD',
            2 => 'SLTP',
            3 => 'SLTA',
            4 => 'Diploma (D1/D2/D3)',
            5 => 'Sarjana (S1/D4)',
            6 => 'S2/Akta 5',
            7 => 'S3',
            33 => 'Usia 7-12 tidak sekolah',
            44 => 'Usia 13-15 tidak sekolah',
            77 => 'Buta aksara',
        ];

        $sekolahKatolik = [
            11 => 'SD',
            12 => 'SLTP',
            13 => 'SLTA',
            14 => 'Diploma (D1/D2/D3)',
            15 => 'Sarjana (S1/D4)',
            16 => 'S2/Akta 5',
            17 => 'S3',
        ];

        $sekolahNonKatolik = [
            21 => 'SD',
            22 => 'SLTP',
            23 => 'SLTA',
            24 => 'Diploma (D1/D2/D3)',
            25 => 'Sarjana (S1/D4)',
            26 => 'S2/Akta 5',
            27 => 'S3',
        ];

        if($value===NULL && $show==TRUE){
            return '';
        }else if($status){
            $options = array_merge([''=>'Pilih'], $tamat, $sekolahKatolik, $sekolahNonKatolik);
            return isset($options[$value]) ? $options[$value] : '';
        }else{
            if($value==1){
                $option = $tamat;
            }else if($value==2){
                $option = $sekolahKatolik;
            }else if($value==3){
                $option = $sekolahNonKatolik;
            }else{
                $option = [''=>'Pilih'];
            }

            return $option;
        }
    }

    public static function gol_darah($value=NULL, $show=FALSE)
    {
        $options = [
            '' => "Pilih",
            1 => "A",
            2 => "B",
            3 => "O",
            4 => "AB",
            8 => "Tidak tahu",           
        ];

        if($value===NULL && $show==TRUE){
            return '';
        }else if($value===NULL){
            return $options;
        }else{
            return isset($options[$value]) ? $options[$value] : '';
        }
    }    

    public static function status_kesehatan($value=NULL, $show=FALSE)
    {
        $options = [
            '' => "Pilih",
            0 => "Normal",
            1 => "Cacat fisik",
            2 => "Buta",
            4 => "Bisu/Tuli",
            8 => "Sulit mengurus diri sendiri",
            16 => "Kesulitan mengingat",
            32 => "Penyakit kronis",
            55 => "Pikun",
        ];
 
        if($value===NULL && $show==TRUE){
            return '';
        }else if($value===NULL){
            return $options;
        }else{
            return isset($options[$value]) ? $options[$value] : '';
        }
    }    
         
    public static function waktu_baptis($value=NULL, $show=FALSE)
    {
        $options = [
            '' => "Pilih",
            1 => "Usia 0-7 th",
            2 => "Usia 8-18 th",
            3 => "Dewasa dari Islam",
            4 => "Dewasa dari Hindu",
            5 => "Dewasa dari Budha",
            6 => "Dewasa dari Kristen",
            7 => "Dewasa dari Khonghucu",
            8 => "Dewasa dari lain-lain",
            9 => "Belum Baptis (bayi, anak dewasa)",
            10 => "Katekumen",
        ];
 
        if($value===NULL && $show==TRUE){
            return '';
        }else if($value===NULL){
            return $options;
        }else{
            return isset($options[$value]) ? $options[$value] : '';
        }
    }               

    public static function status_kawin($value=NULL, $show=FALSE)
    {
        $options = [
            '' => "Pilih",
            1 => "Belum nikah",
            2 => "Sah katolik",
            3 => "Sah beda agama",
            4 => "Sah beda gereja",
            5 => "Nikah di luar gereja",
            6 => "Ditinggal pasangan",
            7 => "Krisis berkepanjangan",
            8 => "Janda/Duda mati",
            9 => "Rm/Br/Sr dari Paroki",
            10 => "Rm/Br/Sr bekerja di Paroki",
            11 => "Hidup bersama tanpa ikatan",
            12 => "Nikah adat",
        ];
 
        if($value===NULL && $show==TRUE){
            return '';
        }else if($value===NULL){
            return $options;
        }else{
            return isset($options[$value]) ? $options[$value] : '';
        }
    }               

    public static function jabatan_sosial($value=NULL, $show=FALSE)
    {
        $options = [
            '' => "Pilih",
            1 => "RT/RW/Kelurahan",
            2 => "Pengurus LSM",
            3 => "Pengurus Ormas/Partai Politik",
            4 => "Warga biasa",
        ];
 
        if($value===NULL && $show==TRUE){
            return '';
        }else if($value===NULL){
            return $options;
        }else{
            return isset($options[$value]) ? $options[$value] : '';
        }
    }               

    public static function status_gerejawi($value=NULL, $show=FALSE)
    {
        $options = [
            '' => "Pilih",
            1 => "Misa di gereja setempat, aktif di lingkungan",
            2 => "Misa di gereja setempat, aktif di paroki lain",
            3 => "Misa di gereja setempat, tidak aktif di lingkungan",
            4 => "Misa & aktif di gereja/paroki lain",
            5 => "Misa di luar gereja setempat, aktif di lingkungan/paroki",
            6 => "Kadang - kadang Misa/Ekaristi",
            7 => "Tidak aktif",
        ];
 
        if($value===NULL && $show==TRUE){
            return '';
        }else if($value===NULL){
            return $options;
        }else{
            return isset($options[$value]) ? $options[$value] : '';
        }
    }               

    public static function keterlibatan($value=NULL, $show=FALSE)
    {
        $options = [
            '' => "Pilih",
            1 => "Anggota dewan paroki",
            2 => "Pengurus tim kerja",
            3 => "Pengurus lingkungan",
            4 => "Pengurus kelompok kategorial",
            5 => "Pengurus ormas Katolik",
            6 => "Warga umat biasa",
        ];
 
        if($value===NULL && $show==TRUE){
            return '';
        }else if($value===NULL){
            return $options;
        }else{
            return isset($options[$value]) ? $options[$value] : '';
        }
    }               

    public static function notum($value=NULL, $show=FALSE)
    {
        $options = [
            '' => "Pilih",
            1 => "NA : Nikah adat",
            2 => "KB : Keluarga perlu mendapat perhatian khusus",
        ];
 

        if($value===NULL && $show==TRUE){
            return '';
        }else if($value===NULL){
            return $options;
        }else{
            return isset($options[$value]) ? $options[$value] : '';
        }
    }               


}
