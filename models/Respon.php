<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "respon".
 *
 * @property int $id
 * @property float $lat
 * @property float $lon
 * @property string $timezone
 */
class Respon extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'respon';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lat', 'lon'], 'required'],
            [['lat', 'lon', 'wind_speed'], 'number'],
            [['pressure', 'humidity', 'timezone'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lat' => 'Lat',
            'lon' => 'Lon',
            'timezone' => 'Timezone',
            'pressure' => 'Pressure',
            'humidity' => 'Humidity',
            'wind_speed' => 'Wind Speed',
        ];
    }
}
