<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "gabung".
 *
 * @property int $id
 * @property string $nama
 * @property string $no_whatsapp
 * @property string $alamat
 * @property string $divisi
 */
class Gabung extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gabung';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'no_whatsapp', 'alamat', 'divisi'], 'required'],
            [['nama', 'alamat', 'divisi'], 'string', 'max' => 255],
            [['no_whatsapp'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'no_whatsapp' => 'No Whatsapp',
            'alamat' => 'Alamat',
            'divisi' => 'Divisi',
        ];
    }
}
