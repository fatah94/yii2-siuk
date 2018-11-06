<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "lingkungan".
 *
 * @property string $id_lingkungan
 * @property string $nama_lingkungan
 * @property string $lingk_pengurus
 * @property string $lingk_kontak
 * @property string $id_wilayah
 */
class Lingkungan extends \yii\db\ActiveRecord
{
    public static function getNextId() {
        return DBHelper::getNextId(self::tableName(), 'id_lingkungan', 3);
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lingkungan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_lingkungan', 'nama_lingkungan', 'lingk_pengurus', 'lingk_kontak', 'id_wilayah'], 'required'],
            [['id_lingkungan'], 'string', 'max' => 11],
            [['nama_lingkungan', 'lingk_pengurus'], 'string', 'max' => 50],
            [['lingk_kontak'], 'string', 'max' => 20],
            [['id_wilayah'], 'string', 'max' => 2],
            [['id_lingkungan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_lingkungan' => 'Id Lingkungan',
            'nama_lingkungan' => 'Nama Lingkungan',
            'lingk_pengurus' => 'Lingkungan Pengurus',
            'lingk_kontak' => 'Lingkungan Kontak',
            'id_wilayah' => 'Nama Wilayah',
        ];
    }

    public function getWilayah(){
        return $this->hasOne(Wilayah::className(), ['id_wilayah' => 'id_wilayah']);
    }

    public static function getListWilayah(){
        return ArrayHelper::map(Wilayah::find()->all(), 'id_wilayah', 'nama_wilayah');
    }
}
