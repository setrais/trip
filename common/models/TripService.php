<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "trip_service".
 *
 * @property integer $id
 * @property integer $trip_id
 * @property integer $service_id
 * @property integer $status
 * @property integer $type_booking
 * @property integer $variants
 * @property string $price
 * @property string $currency
 * @property string $confirmation_number
 * @property integer $deadline
 * @property integer $date_start
 * @property integer $date_end
 * @property integer $start_city_id
 * @property integer $start_point_id
 * @property integer $end_point_id
 * @property integer $end_city_id
 * @property string $description
 *
 * @property Trip $trip
 */
class TripService extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trip_service';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['trip_id', 'service_id', 'type_booking', 'variants', 'description'], 'required'],
            [['trip_id', 'service_id', 'status', 'type_booking', 'variants', 'deadline', 'date_start', 'date_end', 'start_city_id', 'start_point_id', 'end_point_id', 'end_city_id'], 'integer'],
            [['price'], 'number'],
            [['description'], 'string'],
            [['currency'], 'string', 'max' => 3],
            [['confirmation_number'], 'string', 'max' => 16],
            [['trip_id'], 'exist', 'skipOnError' => true, 'targetClass' => Trip::className(), 'targetAttribute' => ['trip_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'trip_id' => 'Trip ID',
            'service_id' => 'Service ID',
            'status' => 'Status',
            'type_booking' => 'Type Booking',
            'variants' => 'Variants',
            'price' => 'Price',
            'currency' => 'Currency',
            'confirmation_number' => 'Confirmation Number',
            'deadline' => 'Deadline',
            'date_start' => 'Date Start',
            'date_end' => 'Date End',
            'start_city_id' => 'Start City ID',
            'start_point_id' => 'Start Point ID',
            'end_point_id' => 'End Point ID',
            'end_city_id' => 'End City ID',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrip()
    {
        return $this->hasOne(Trip::className(), ['id' => 'trip_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAirPortStart()
    {
        return $this->hasOne(AirportName::className(), ['airport_id'=>'start_city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAirPortEnd()
    {
        return $this->hasOne(AirportName::className(), ['airport_id'=>'end_city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAirPortStartPoint()
    {
        return $this->hasOne(AirportName::className(), ['airport_id'=>'start_point_city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAirPortEndPoint()
    {
        return $this->hasOne(AirportName::className(), ['airport_id'=>'end_point_city_id']);
    }

    /**
     * @inheritdoc
     * @return TripQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TripQuery(get_called_class());
    }
}
