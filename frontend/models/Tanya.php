<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tanya".
 *
 * @property int $id
 * @property string $tanya
 * @property string $jawab
 */
class Tanya extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tanya';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanya', 'jawab'], 'required'],
            [['tanya', 'jawab'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tanya' => 'Tanya',
            'jawab' => 'Jawab',
        ];
    }

    public function getTanya()
    {
        return Tanya::find()->all();
    }
}
