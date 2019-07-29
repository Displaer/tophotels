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
 * @property string $direction
 * @property HelperStatus $status0
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
            [['name', 'phone', 'mail', 'desc', 'created', 'direction'], 'string'],
            [['status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'phone' => Yii::t('app', 'Phone'),
            'mail' => Yii::t('app', 'Mail'),
            'desc' => Yii::t('app', 'Desc'),
            'created' => Yii::t('app', 'Created'),
            'status' => Yii::t('app', 'Status'),
            'status0' => Yii::t('app', 'Status'),
            'direction' => Yii::t('app', 'Direction'),
        ];
    }


    /**
     * @return array
     */
    public function getStatus0()
    {
        return $this->hasOne(HelperStatus::class, ['id' => 'status']);
    }
}
