<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "berita".
 *
 * @property int $id
 * @property string $img_url
 * @property string $judul
 * @property string $deskripsi
 */
class Berita extends \yii\db\ActiveRecord
{
    public $file_upload;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'berita';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul', 'deskripsi'], 'required'],
            [['deskripsi'], 'string'],
            [['judul'], 'string', 'max' => 255],
            [['file_upload'], 'file', 'extensions' => 'jpg, jpeg, png, jfif'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img_url' => 'Img Url',
            'judul' => 'Judul',
            'deskripsi' => 'Deskripsi',
        ];
    }
}
