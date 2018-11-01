<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pendidikan".
 *
 * @property string $id_pendidikan
 * @property string $deskripsi_pendidikan
 */
class Pendidikan extends \yii\db\ActiveRecord
{
    public function beforeSave($insert) {
        if ($insert) {
            $this->id_pendidikan = DBHelper::getNextId(self::tableName(), 'id_pendidikan', 2);
        }
        return parent::beforeSave($insert);
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pendidikan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pendidikan', 'deskripsi_pendidikan'], 'required'],
            [['id_pendidikan'], 'string', 'max' => 3],
            [['deskripsi_pendidikan'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pendidikan' => 'Id Pendidikan',
            'deskripsi_pendidikan' => 'Deskripsi Pendidikan',
        ];
    }
}
