<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $body
 * @property string $verifyCode
 * @property string $created_at
 * @property string $modified_at
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'subject', 'body', 'verifyCode', 'created_at', 'modified_at'], 'required'],
            [['body'], 'string'],
            [['created_at', 'modified_at'], 'safe'],
            [['name', 'email'], 'string', 'max' => 100],
            [['subject'], 'string', 'max' => 200],
            [['verifyCode'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'image' => 'Image',
            'email' => 'Email',
            'subject' => 'Subject',
            'body' => 'Body',
            'verifyCode' => 'Verify Code',
            'created_at' => 'Created At',
            'modified_at' => 'Modified At',
        ];
    }
}
