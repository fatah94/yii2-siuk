<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "suku_bangsa".
 *
 * @property string $id_suku
 * @property string $deskripsi_suku
 */
class SukuBangsa extends \yii\db\ActiveRecord
{
    public function beforeSave($insert) {
        if ($insert) {
            $this->id_suku = DBHelper::getNextId(self::tableName(), 'id_suku', 2);
        }
        return parent::beforeSave($insert);
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'suku_bangsa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_suku', 'deskripsi_suku'], 'required'],
            [['id_suku'], 'string', 'max' => 2],
            [['deskripsi_suku'], 'string', 'max' => 50],
            [['id_suku'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_suku' => 'Id Suku',
            'deskripsi_suku' => 'Deskripsi Suku',
        ];
    }
}
