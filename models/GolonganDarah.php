<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "golongan_darah".
 *
 * @property string $id_goldar
 * @property string $deskripsi_goldar
 */
class GolonganDarah extends \yii\db\ActiveRecord
{
    public static function getNextId() {
        return DBHelper::getNextId(self::tableName(), 'id_goldar', 2);
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'golongan_darah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_goldar', 'deskripsi_goldar'], 'required'],
            [['id_goldar'], 'string', 'max' => 2],
            [['deskripsi_goldar'], 'string', 'max' => 10],
            [['id_goldar'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_goldar' => 'Id Goldar',
            'deskripsi_goldar' => 'Deskripsi Goldar',
        ];
    }
}
