<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "waktu_baptis".
 *
 * @property string $id_wkt_baptis
 * @property string $deskripsi_wkt_baptis
 */
class WaktuBaptis extends \yii\db\ActiveRecord
{
    public static function getNextId() {
        return DBHelper::getNextId(self::tableName(), 'id_wkt_baptis', 2);
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'waktu_baptis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_wkt_baptis', 'deskripsi_wkt_baptis'], 'required'],
            [['id_wkt_baptis'], 'string', 'max' => 2],
            [['deskripsi_wkt_baptis'], 'string', 'max' => 50],
            [['id_wkt_baptis'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_wkt_baptis' => 'Id Waktu Baptis',
            'deskripsi_wkt_baptis' => 'Deskripsi Waktu Baptis',
        ];
    }
}
