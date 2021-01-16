<?php

namespace kashichi\Randevu\models;

/**
 * This is the ActiveQuery class for [[Randevu]].
 *
 * @see Randevu
 */
class RandevuQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Randevu[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Randevu|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
