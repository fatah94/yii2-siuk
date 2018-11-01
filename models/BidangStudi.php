<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bidang_studi".
 *
 * @property string $id_bidstudi
 * @property string $deskripsi_bidstudi
 */
class BidangStudi extends \yii\db\ActiveRecord
{
    public static function getNextId() {
        return DBHelper::getNextId(self::tableName(), 'id_bidstudi', 2);
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bidang_studi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_bidstudi', 'deskripsi_bidstudi'], 'required'],
            [['id_bidstudi'], 'string', 'max' => 2],
            [['deskripsi_bidstudi'], 'string', 'max' => 50],
            [['id_bidstudi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_bidstudi' => 'Id Bidstudi',
            'deskripsi_bidstudi' => 'Deskripsi Bidstudi',
        ];
    }
}
