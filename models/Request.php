<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "request".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $mail
 * @property string $desc
 * @property string $created
 * @property int $status
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone'], 'required'],
            [['name', 'phone', 'mail', 'desc', 'created'], 'string'],
            [['status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'mail' => 'Mail',
            'desc' => 'Desc',
            'created' => 'Created',
            'status' => 'Status',
        ];
    }
}
