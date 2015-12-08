<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Usuario".
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $name
 * @property string $lastname
 * @property string $role
 * @property string $password
 * @property string $authKey
 * @property integer $activate
 * @property string $accessToken
 *
 * @property AlumnoCurso[] $alumnoCursos
 * @property ImparteCurso[] $imparteCursos
 * @property Curso[] $cursoIdCursos
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'email', 'role', 'password'], 'required'],
            [['activate'], 'integer'],
            [['username', 'email', 'name', 'lastname', 'role', 'password'], 'string', 'max' => 45],
            [['authKey', 'accessToken'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'name' => 'Name',
            'lastname' => 'Lastname',
            'role' => 'Role',
            'password' => 'Password',
            'authKey' => 'Auth Key',
            'activate' => 'Activate',
            'accessToken' => 'Access Token',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnoCursos()
    {
        return $this->hasMany(AlumnoCurso::className(), ['Usuarios_Usuario' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImparteCursos()
    {
        return $this->hasMany(ImparteCurso::className(), ['Usuarios_Usuario' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCursoIdCursos()
    {
        return $this->hasMany(Curso::className(), ['idCurso' => 'Curso_idCurso'])->viaTable('ImparteCurso', ['Usuarios_Usuario' => 'id']);
    }
}
