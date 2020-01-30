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
            // [['id'], 'required'],
            [['id', 'dijual_ke'], 'default', 'value' => null],
            [['id', 'dijual_ke'], 'integer'],
            [['tgl_beli', 'tgl_jual'], 'safe'],
            [['deskripsi'], 'string'],
            [['brand', 'model', 'nama', 'garansi'], 'string', 'max' => 100],
            // [['id'], 'unique'],
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
            'dijual_ke' => 'Dijual Ke',
            'deskripsi' => 'Deskripsi',
        ];
    }
    public function getCount()
    {
        return static::find()->count();
    }
}
