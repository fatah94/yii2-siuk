<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ekonomi".
 *
 * @property string $id_ekonomi
 * @property string $kriteria_ekonomi
 * @property string $deskripsi_ekonomi
 */
class Ekonomi extends \yii\db\ActiveRecord
{
    public function beforeSave($insert) {
        if ($insert) {
            $this->id_ekonomi = DBHelper::getNextId(self::tableName(), 'id_ekonomi', 2);
        }
        return parent::beforeSave($insert);
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ekonomi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ekonomi', 'kriteria_ekonomi', 'deskripsi_ekonomi'], 'required'],
            [['id_ekonomi'], 'string', 'max' => 2],
            [['kriteria_ekonomi', 'deskripsi_ekonomi'], 'string', 'max' => 50],
            [['id_ekonomi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ekonomi' => 'Id Ekonomi',
            'kriteria_ekonomi' => 'Kriteria Ekonomi',
            'deskripsi_ekonomi' => 'Deskripsi Ekonomi',
        ];
    }
}
