<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "keterlibatan".
 *
 * @property string $id_keterlibatan
 * @property string $deskripsi_keterlibatan
 */
class Keterlibatan extends \yii\db\ActiveRecord
{
    public function beforeSave($insert) {
        if ($insert) {
            $this->id_keterlibatan = DBHelper::getNextId(self::tableName(), 'id_keterlibatan', 2);
        }
        return parent::beforeSave($insert);
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'keterlibatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_keterlibatan', 'deskripsi_keterlibatan'], 'required'],
            [['id_keterlibatan'], 'string', 'max' => 2],
            [['deskripsi_keterlibatan'], 'string', 'max' => 50],
            [['id_keterlibatan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_keterlibatan' => 'Id Keterlibatan',
            'deskripsi_keterlibatan' => 'Deskripsi Keterlibatan',
        ];
    }
}
