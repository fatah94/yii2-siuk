<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "agama".
 *
 * @property string $id_agama
 * @property string $nama_agama
 * @property string $deskripsi_agama
 */
class Agama extends \yii\db\ActiveRecord
{
    public function beforeSave($insert) {
        if ($insert) {
            $this->id_agama = DBHelper::getNextId(self::tableName(), 'id_agama', 2);
        }
        return parent::beforeSave($insert);
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agama';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_agama', 'nama_agama', 'deskripsi_agama'], 'required'],
            [['id_agama'], 'string', 'max' => 2],
            [['nama_agama'], 'string', 'max' => 50],
            [['deskripsi_agama'], 'string', 'max' => 255],
            [['id_agama'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_agama' => 'Id Agama',
            'nama_agama' => 'Nama Agama',
            'deskripsi_agama' => 'Deskripsi Agama',
        ];
    }

    public function getUmats()
    {
        return $this->hasMany(Umat::className(), ['id_agama' => 'id_agama']);
    }
}
