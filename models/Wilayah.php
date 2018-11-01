<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wilayah".
 *
 * @property string $id_wilayah
 * @property string $nama_wilayah
 * @property string $wil_pengurus
 * @property string $wil_kontak
 */
class Wilayah extends \yii\db\ActiveRecord
{
    public function beforeSave($insert) {
        if ($insert) {
            $this->id_wilayah = DBHelper::getNextId(self::tableName(), 'id_wilayah', 2);
        }
        return parent::beforeSave($insert);
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wilayah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_wilayah', 'nama_wilayah', 'wil_pengurus', 'wil_kontak'], 'required'],
            [['id_wilayah'], 'string', 'max' => 2],
            [['nama_wilayah', 'wil_pengurus'], 'string', 'max' => 50],
            [['wil_kontak'], 'string', 'max' => 20],
            [['id_wilayah'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_wilayah' => 'Id Wilayah',
            'nama_wilayah' => 'Nama Wilayah',
            'wil_pengurus' => 'Wil Pengurus',
            'wil_kontak' => 'Wil Kontak',
        ];
    }
}
