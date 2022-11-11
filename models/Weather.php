<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "weather".
 *
 * @property int $id
 * @property int $current_id
 * @property string $main
 * @property string $description
 */
class Weather extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'weather';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'respon_id'], 'required'],
            [['id', 'respon_id'], 'integer'],
            [['main', 'description'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'respon_id' => 'Respon ID',
            'main' => 'Main',
            'description' => 'Description',
        ];
    }
}
