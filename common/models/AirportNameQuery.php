<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[AirportName]].
 *
 * @see AirportName
 */
class AirportNameQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return AirportName[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return AirportName|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
