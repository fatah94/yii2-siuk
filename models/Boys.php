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
            'boy' => 'Boy',
            'toy_id' => 'Toy ID',
        ];
    }
}
