<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "paroki".
 *
 * @property string $id_paroki
 * @property string $nama_paroki
 * @property string $alamat_paroki
 */
class Paroki extends \yii\db\ActiveRecord
{
    public static function getNextId() {
        return DBHelper::getNextId(self::tableName(), 'id_paroki', 3);
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'paroki';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_paroki', 'nama_paroki', 'alamat_paroki'], 'required'],
            [['id_paroki'], 'string', 'max' => 5],
            [['nama_paroki', 'alamat_paroki'], 'string', 'max' => 50],
            [['id_paroki'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_paroki' => 'Id Paroki',
            'nama_paroki' => 'Nama Paroki',
            'alamat_paroki' => 'Alamat Paroki',
        ];
    }
}
