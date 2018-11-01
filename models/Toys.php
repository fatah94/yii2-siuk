<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "toys".
 *
 * @property int $toy_id
 * @property string $toy
 */
class Toys extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'toys';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['toy'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'toy_id' => 'Toy ID',
            'toy' => 'Toy',
        ];
    }
}
