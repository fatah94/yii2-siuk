<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jabatan_sosial".
 *
 * @property string $id_jbt_sosial
 * @property string $deskripsi_jbt_sosial
 */
class JabatanSosial extends \yii\db\ActiveRecord
{
    public function beforeSave($insert) {
        if ($insert) {
            $this->id_jbt_sosial = DBHelper::getNextId(self::tableName(), 'id_jbt_sosial', 2);
        }
        return parent::beforeSave($insert);
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jabatan_sosial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jbt_sosial', 'deskripsi_jbt_sosial'], 'required'],
            [['id_jbt_sosial'], 'string', 'max' => 2],
            [['deskripsi_jbt_sosial'], 'string', 'max' => 50],
            [['id_jbt_sosial'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jbt_sosial' => 'Id Jbt Sosial',
            'deskripsi_jbt_sosial' => 'Deskripsi Jbt Sosial',
        ];
    }
}
