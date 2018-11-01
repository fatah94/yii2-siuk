<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "status_perkawinan".
 *
 * @property string $id_sts_kawin
 * @property string $deskripsi_sts_kawin
 * @property string $keterangan_sts_kawin
 */
class StatusPerkawinan extends \yii\db\ActiveRecord
{
    public function beforeSave($insert) {
        if ($insert) {
            $this->id_sts_kawin = DBHelper::getNextId(self::tableName(), 'id_sts_kawin', 2);
        }
        return parent::beforeSave($insert);
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status_perkawinan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sts_kawin', 'deskripsi_sts_kawin', 'keterangan_sts_kawin'], 'required'],
            [['id_sts_kawin'], 'string', 'max' => 2],
            [['deskripsi_sts_kawin', 'keterangan_sts_kawin'], 'string', 'max' => 50],
            [['id_sts_kawin'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_sts_kawin' => 'Id Sts Kawin',
            'deskripsi_sts_kawin' => 'Deskripsi Sts Kawin',
            'keterangan_sts_kawin' => 'Keterangan Sts Kawin',
        ];
    }
}
