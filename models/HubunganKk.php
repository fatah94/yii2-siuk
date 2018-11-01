<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hubungan_kk".
 *
 * @property string $id_hub_kk
 * @property string $deskripsi_hub_kk
 */
class HubunganKk extends \yii\db\ActiveRecord
{
    public static function getNextId() {
        return DBHelper::getNextId(self::tableName(), 'id_hub_kk', 2);
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hubungan_kk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_hub_kk', 'deskripsi_hub_kk'], 'required'],
            [['id_hub_kk'], 'string', 'max' => 2],
            [['deskripsi_hub_kk'], 'string', 'max' => 50],
            [['id_hub_kk'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_hub_kk' => 'Id Hub Kk',
            'deskripsi_hub_kk' => 'Deskripsi Hub Kk',
        ];
    }
}
