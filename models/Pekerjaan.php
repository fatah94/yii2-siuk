<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pekerjaan".
 *
 * @property string $id_pekerjaan
 * @property string $deskripsi_pekerjaan
 */
class Pekerjaan extends \yii\db\ActiveRecord
{
    public static function getNextId() {
        return DBHelper::getNextId(self::tableName(), 'id_pekerjaan', 2);
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pekerjaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pekerjaan', 'deskripsi_pekerjaan'], 'required'],
            [['id_pekerjaan'], 'string', 'max' => 2],
            [['deskripsi_pekerjaan'], 'string', 'max' => 50],
            [['id_pekerjaan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pekerjaan' => 'Id Pekerjaan',
            'deskripsi_pekerjaan' => 'Deskripsi Pekerjaan',
        ];
    }
}
