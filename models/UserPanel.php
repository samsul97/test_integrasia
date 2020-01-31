<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_panel".
 *
 * @property int $id
 * @property string|null $nama
 * @property string|null $email
 * @property string|null $telp
 * @property string|null $foto
 */
class UserPanel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_panel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'telp'], 'string', 'max' => 50],
            [['email', 'foto'], 'string', 'max' => 100],
            [['foto'], 'required', 'message'=> 'Data tidak boleh kosong'],
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
            'email' => 'Email',
            'telp' => 'Telp',
            'foto' => 'Foto',
        ];
    }
}
