<?php
namespace app\models;
use Yii;
use yii\base\Model;

/**
 * LoginForm is the model basename(path)ehind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class CreateUser extends Model
{
    public $id_user_role;
    public $username;
    public $password;
    public $nama;
    public $telp;
    public $email;
    public $foto;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['username', 'match', 'pattern' => '/^[a-z]\w*$/i', 'message' => 'Username tidak boleh kosong'],
            [['password'], 'string', 'min' => 10],
            [['id_user_role'], 'integer'],
            [['nama'], 'required', 'message'=> 'Data tidak boleh kosong'],
            ['telp', 'match', 'pattern' => '/((\+[0-9]{6})|0)[-]?[0-9]{7}/', 'message' => 'Hanya dari nomor 0 sampai 9'],
            [['email'], 'email'],
            [['email'], 'unique', 'targetClass' => '\app\models\UserPanel'],
            [['foto'], 'file', 'extensions'=>'jpg, gif, png', 'maxSize'=>5218288, 'tooBig' => 'batas limit upload gambar 5mb'],
            // [['foto'], 'required', 'message'=> 'Data tidak boleh kosong'],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id_user_role' => 'User',
            'username' => 'Username',
            'password' => 'Password',
            'nama' => 'Nama',
            'telp' => 'Telepon',
            'email' => 'Email',
            'foto' => 'Foto',
        ];
    }   
}