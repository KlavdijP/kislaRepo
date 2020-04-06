<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "advert".
 *
 * @property int $id
 * @property string|null $naslov
 * @property string|null $povzetek
 * @property int|null $avtor
 * @property string $image_src_filename                      
 * @property string $image_web_filename                       
 */
class Advert extends \yii\db\ActiveRecord
{
    public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'advert';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['avtor'], 'integer'],
            [['naslov'], 'string', 'max' => 150],
            [['povzetek'], 'string', 'max' => 600],
            
            [['image'], 'safe'],                   
            [['image'], 'file', 'extensions'=>'jpg, gif, png'],
            [['image'], 'file', 'maxSize'=>'100000'],
            [['image_src_filename', 'image_web_filename'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'naslov' => Yii::t('app', 'Naslov'),
            'povzetek' => Yii::t('app', 'Povzetek'),
            'avtor' => Yii::t('app', 'Avtor'),
            'image_src_filename' => Yii::t('app', 'Filename'),       
            'image_web_filename' => Yii::t('app', 'Pathname'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return AdvertQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AdvertQuery(get_called_class());
    }
}
