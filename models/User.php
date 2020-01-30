<?php

namespace app\models;

use Yii;
use yii\helpers\Html;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property int|null $id_user
 * @property int|null $id_user_role
 * @property int|null $status
 * @property string|null $token
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{

    public function getPanel()
    {
        return $this->hasOne(Panel::className(), ['id' => 'id_user']);
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'username', 'password'], 'required'],
            [['id', 'id_user', 'id_user_role', 'status'], 'default', 'value' => null],
            [['id', 'id_user', 'id_user_role', 'status'], 'integer'],
            [['username'], 'string', 'max' => 50],
            [['password', 'token'], 'string', 'max' => 100],
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
            'username' => 'Username',
            'password' => 'Password',
            'id_user' => 'Id User',
            'id_user_role' => 'Id User Role',
            'status' => 'Status',
            'token' => 'Token',
        ];
    }
    public static function findIdentity($id)
    {
      return self::findOne($id);
  }
  public static function findIdentityByAccessToken($token, $Type = null)
  {
      return static::findOne(['access_token' => $token]);
  }
  public function getId()
  {   
      return $this->id;
  }
  public function getAuthKey()
  {
      return null;
  }
  public function validateAuthKey($authKey)
  {
      return $this->authKey === $authKey;
  }
  public static function findByUsername($username)
  {
      return self::findOne(['username' =>$username]);    
  }
  public function validatePassword($password)
  {
    return $this->password == $password;
        // return Yii::$app->getSecurity()->validatePassword($password, $this->password);
}
public static function isAdmin()
{
  if (Yii::$app->user->isGuest) {
    return false;
}
$model = User::findOne(['username' => Yii::$app->user->identity->username]);
if ($model == null) {
    return false;
} elseif ($model->id_user_role == 1) {
    return true;
}
return false;
}

public static function isPanel()
{
  if (Yii::$app->user->isGuest) {
    return false;
}
$model = User::findOne(['username' => Yii::$app->user->identity->username]);
if ($model == null) {
    return false;
} elseif ($model->id_user_role == 2) {
    return true;
}
return false;
}

public static function getFotoAdmin($htmlOptions=[])
{
  return Html::img('@web/user/admin.jpg', $htmlOptions);
}

public static function getFotoPanel($htmlOptions=[])
{
 $query = UserPanel::find()
 ->andWhere(['id' => Yii::$app->user->identity->id_user])
 ->one();

 if ($query->foto != null) {
   return Html::img('@web/user/' . $query->foto, $htmlOptions);
} else {
   return Html::img('@web/user/no-images.png', $htmlOptions);
}
}
}
