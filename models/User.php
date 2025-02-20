<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string|null $created_at
 */
class User extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'password'], 'required'], // These fields must not be empty
            ['email', 'email'], // Ensures the email is a valid email format
            ['username', 'string', 'max' => 50], // Limits the username to 50 characters max
            [['username', 'email'], 'unique'], // Ensures username and email are unique in the database
            ['password', 'string', 'min' => 6], // Ensures password is at least 6 characters long
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'created_at' => 'Created At',
        ];
    }

}
