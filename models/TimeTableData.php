<?php

namespace kouosl\timetable\models;

use Yii;

/**
 * This is the model class for table "timetable_data".
 *
 * @property integer $id
 * @property string $name
 * @property integer $timetable_id
 *
 * @property TimeTable $timetable
 */
class TimeTableData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'timetable_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'timetable_id'], 'required'],
            [['timetable_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['timetable_id'], 'exist', 'skipOnError' => true, 'targetClass' => TimeTable::className(), 'targetAttribute' => ['timetable_id' => 'id']],
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
            'timetable_id' => 'TimeTable ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTimeTable()
    {
        return $this->hasOne(TimeTable::className(), ['id' => 'timetable_id']);
    }
}
