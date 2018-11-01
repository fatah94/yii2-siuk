<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "status_kesehatan".
 *
 * @property string $id_sts_sehat
 * @property string $deskripsi_sts_sehat
 */
class StatusKesehatan extends \yii\db\ActiveRecord
{
    public function beforeSave($insert) {
        if ($insert) {
            $this->id_sts_sehat = DBHelper::getNextId(self::tableName(), 'id_sts_sehat', 2);
        }
        return parent::beforeSave($insert);
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status_kesehatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sts_sehat', 'deskripsi_sts_sehat'], 'required'],
            [['id_sts_sehat'], 'string', 'max' => 2],
            [['deskripsi_sts_sehat'], 'string', 'max' => 50],
            [['id_sts_sehat'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_sts_sehat' => 'Id Sts Sehat',
            'deskripsi_sts_sehat' => 'Deskripsi Sts Sehat',
        ];
    }
}
