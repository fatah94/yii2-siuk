<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "keuskupan".
 *
 * @property string $id_keuskupan
 * @property string $nama_keuskupan
 * @property string $alamat_keuskupan
 */
class Keuskupan extends \yii\db\ActiveRecord
{
    public function beforeSave($insert) {
        if ($insert) {
            $this->id_keuskupan = DBHelper::getNextId(self::tableName(), 'id_keuskupan', 3);
        }
        return parent::beforeSave($insert);
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'keuskupan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_keuskupan', 'nama_keuskupan', 'alamat_keuskupan'], 'required'],
            [['id_keuskupan'], 'string', 'max' => 4],
            [['nama_keuskupan', 'alamat_keuskupan'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_keuskupan' => 'Id Keuskupan',
            'nama_keuskupan' => 'Nama Keuskupan',
            'alamat_keuskupan' => 'Alamat Keuskupan',
        ];
    }
}
