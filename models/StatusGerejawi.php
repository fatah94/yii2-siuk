<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "status_gerejawi".
 *
 * @property string $id_sts_gerejawi
 * @property string $deskripsi_sts_gerejawi
 */
class StatusGerejawi extends \yii\db\ActiveRecord
{
    public function beforeSave($insert) {
        if ($insert) {
            $this->id_sts_gerejawi = DBHelper::getNextId(self::tableName(), 'id_sts_gerejawi', 2);
        }
        return parent::beforeSave($insert);
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status_gerejawi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sts_gerejawi', 'deskripsi_sts_gerejawi'], 'required'],
            [['id_sts_gerejawi'], 'string', 'max' => 2],
            [['deskripsi_sts_gerejawi'], 'string', 'max' => 50],
            [['id_sts_gerejawi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_sts_gerejawi' => 'Id Sts Gerejawi',
            'deskripsi_sts_gerejawi' => 'Deskripsi Sts Gerejawi',
        ];
    }
}
