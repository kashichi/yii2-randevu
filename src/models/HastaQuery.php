<?php

namespace kashichi\Randevu\models;

/**
 * This is the ActiveQuery class for [[Hasta]].
 *
 * @see Hasta
 */
class HastaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Hasta[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Hasta|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
