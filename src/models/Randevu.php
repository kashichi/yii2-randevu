<?php

namespace kashichi\Randevu\models;

use Yii;

/**
 * This is the model class for table "randevu".
 *
 * @property string $randevu
 *
 * @property Hasta[] $hastas
 */
class Randevu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'randevu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['randevu'], 'required'],
            [['randevu'], 'string', 'max' => 100],
            [['randevu'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'randevu' => 'Randevu',
        ];
    }

    /**
     * Gets query for [[Hastas]].
     *
     * @return \yii\db\ActiveQuery|HastaQuery
     */
    public function getHastas()
    {
        return $this->hasMany(Hasta::className(), ['randevu' => 'randevu']);
    }

    /**
     * {@inheritdoc}
     * @return RandevuQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RandevuQuery(get_called_class());
    }
}
