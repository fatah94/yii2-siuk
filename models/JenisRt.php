<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenis_rt".
 *
 * @property string $id_jenis_rt
 * @property string $kriteria_rt
 * @property string $deskripsi_jenis_rt
 */
class JenisRt extends \yii\db\ActiveRecord
{
    public static function getNextId() {
        return DBHelper::getNextId(self::tableName(), 'id_jenis_rt', 2);
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_rt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jenis_rt', 'kriteria_rt', 'deskripsi_jenis_rt'], 'required'],
            [['id_jenis_rt'], 'string', 'max' => 2],
            [['kriteria_rt', 'deskripsi_jenis_rt'], 'string', 'max' => 50],
            [['id_jenis_rt'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jenis_rt' => 'Id Jenis RT',
            'kriteria_rt' => 'Kriteria RT',
            'deskripsi_jenis_rt' => 'Deskripsi Jenis RT',
        ];
    }
}
