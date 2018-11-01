<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "boys".
 *
 * @property int $boy_id
 * @property string $boy
 * @property int $toy_id
 */
class Boys extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'boys';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['toy_id'], 'required'],
            [['toy_id'], 'integer'],
            [['boy'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'boy_id' => 'Boy ID',
            'boy' => 'Nama Anak',
            'toy_id' => 'Mainan',
        ];
    }

    public static function getListToys($id = Null){
        $row = Toys::find()->all();

        $list = [];
        foreach($row as $i => $value){
            $list[$value->toy_id] = $value->toy;
        }

        if($id === NULL){
            return $list;
        }else{
            return isset($list[$id]) ? $list[$id] : '';
        }
    }
}
