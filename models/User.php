<?php

namespace app\models;

class User extends \yii\base\Object implements \yii\web\IdentityInterface
{
    public $id;
    public $email;
    public $name;
    public $lastname;
    public $activate;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;
    public $role;

    /*
    private static $users = [
        'admin' => [
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
            'role' => 'admin',
        ],
        'estudiante' => [
            'username' => 'estudiante',
            'password' => 'estudiante',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
            'role' => 'estudiante',
        ],
        'maestro' => [
            'username' => 'maestro',
            'password' => 'maestro',
            'authKey' => 'test102key',
            'accessToken' => '102-token',
            'role' => 'maestro',
        ],
    ];
*/
    public static function isUserAdmin($id)
{
   if (Users::findOne(['id' => $id, 'activate' => '1', 'role' => 'admin'])){
    return true;
   } else {
    return false;
   }
}
    public static function isUserEstudiante($id)
{
   if (Users::findOne(['id' => $id, 'activate' => '1', 'role' => 'estudiante'])){
    return true;
   } else {
    return false;
   }
}
    public static function isUserMaestro($id)
{
   if (Users::findOne(['id' => $id, 'activate' => '1', 'role' => 'maestro'])){
    return true;
   } else {
    return false;
   }
}

    /**
     * @inheritdoc
     */

    public static function findIdentity($id)
    {
        $user = Users::find()
                ->where("activate=:activate", [":activate" => 1])
                ->andWhere("id=:id", ["id" => $id])
                ->one();
        return isset($user) ? new static($user) : null;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
                $users = Users::find()
                ->where("activate=:activate", [":activate" => 1])
                ->andWhere("accessToken=:accessToken", [":accessToken" => $token])
                ->all();
        foreach ($users as $user) {
            if ($user->accessToken === $token) {
                return new static($user);
            }
        }
        return null;

    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        $users = Users::find()
                ->where("activate=:activate", [":activate" => 1])
                ->andWhere("username=:username", [":username" => $username])
                ->all();
        foreach ($users as $user) {
            if (strcasecmp($user->username, $username) === 0) {
                return new static($user);
            }
        }
        return null;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }
    

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
