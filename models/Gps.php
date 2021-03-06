<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gps".
 *
 * @property int $id
 * @property string|null $brand
 * @property string|null $model
 * @property string|null $nama
 * @property string|null $garansi
 * @property string|null $tgl_beli
 * @property string|null $tgl_jual
 * @property int|null $dijual_ke
 * @property string|null $deskripsi
 */
class Gps extends \yii\db\ActiveRecord
{
    // public $foto_upload;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gps';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_beli', 'tgl_jual'], 'safe'],
            [['deskripsi'], 'string'],
            [['brand', 'model', 'nama', 'garansi'], 'string', 'max' => 100],
            [['sold'], 'string', 'max' => 100],
            [['garansi'], 'number'],
            [['nama'], 'unique'],
            [['foto'], 'file', 'extensions' => 'png, jpg, jpeg', 'maxSize' => 1024 * 1024 * 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand' => 'Brand',
            'model' => 'Model',
            'nama' => 'Nama',
            'garansi' => 'Garansi',
            'tgl_beli' => 'Tgl Beli',
            'tgl_jual' => 'Tgl Jual',
            // 'dijual_ke' => 'Dijual Ke',
            'deskripsi' => 'Deskripsi',
            'foto' => 'Foto',
        ];
    }
    public function getCount()
    {
        return static::find()->count();
    }
}
