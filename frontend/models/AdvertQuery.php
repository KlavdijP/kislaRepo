<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Advert]].
 *
 * @see Advert
 */
class AdvertQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Advert[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Advert|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
