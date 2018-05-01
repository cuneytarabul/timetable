<?php

namespace kouosl\gallery\models;

use Yii;

/**
 * This is the model class for table "gallery_data".
 *
 * @property integer $id
 * @property string $name
 * @property integer $gallery_id
 *
 * @property Gallery $gallery
 */
class GalleryData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'gallery_id'], 'required'],
            [['gallery_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['gallery_id'], 'exist', 'skipOnError' => true, 'targetClass' => Gallery::className(), 'targetAttribute' => ['gallery_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'gallery_id' => 'Gallery ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGallery()
    {
        return $this->hasOne(Gallery::className(), ['id' => 'gallery_id']);
    }
}
