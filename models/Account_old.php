<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "old_account".
 *
 * @property string $username
 * @property string $password
 * @property string $role
 */
class OldAccount extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'old_account';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'role'], 'required'],
            [['username', 'role'], 'string', 'max' => 45],
            [['password'], 'string', 'max' => 250],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'password' => 'Password',
            'role' => 'Role',
        ];
    }
}
