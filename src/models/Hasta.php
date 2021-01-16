<?php

namespace kashichi\Randevu\models;

use Yii;

/**
 * This is the model class for table "hasta".
 *
 * @property int $id
 * @property string $isim
 * @property string $randevu
 *
 * @property Randevu $randevu0
 */
class Hasta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hasta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isim', 'randevu'], 'required'],
            [['isim'], 'string', 'max' => 50],
            [['randevu'], 'string', 'max' => 100],
            [['randevu'], 'exist', 'skipOnError' => true, 'targetClass' => Randevu::className(), 'targetAttribute' => ['randevu' => 'randevu']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isim' => 'Isim',
            'randevu' => 'Randevu',
        ];
    }

    /**
     * Gets query for [[Randevu0]].
     *
     * @return \yii\db\ActiveQuery|RandevuQuery
     */
    public function getRandevu0()
    {
        return $this->hasOne(Randevu::className(), ['randevu' => 'randevu']);
    }

    /**
     * {@inheritdoc}
     * @return HastaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HastaQuery(get_called_class());
    }
}
