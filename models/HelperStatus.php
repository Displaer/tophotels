<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_helper_status".
 *
 * @property int $id
 * @property string $skey
 * @property string $name
 */
class HelperStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_helper_status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['skey', 'name'], 'required'],
            [['skey', 'name'], 'string'],
            [['skey'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'skey' => Yii::t('app', 'Skey'),
            'name' => Yii::t('app', 'Name'),
        ];
    }
}
