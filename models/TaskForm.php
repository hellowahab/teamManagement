<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tasks".
 *
 * @property integer $ID
 * @property string $Task
 * @property integer $Duration
 * @property integer $TaskCategory
 * @property integer $Assigned
 * @property integer $Status
 * @property integer $ParentID
 */
class TaskForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tasks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Duration', 'TaskCategory', 'Assigned', 'Status', 'ParentID'], 'integer'],
            [['Task'], 'string', 'max' => 2000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Task' => 'Task',
            'Duration' => 'Duration',
            'TaskCategory' => 'Task Category',
            'Assigned' => 'Assigned',
            'Status' => 'Status',
            'ParentID' => 'Parent ID',
        ];
    }
}
