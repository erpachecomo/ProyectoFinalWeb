<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Usuario".
 *
 * @property string $nombreUsuario
 * @property string $correo
 * @property string $nombre
 * @property string $apellidos
 * @property string $tipo
 *
 * @property AlumnoCurso[] $alumnoCursos
 * @property Curso[] $cursoIdCursos
 * @property ImparteCurso[] $imparteCursos
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
            [['nombreUsuario', 'correo', 'tipo'], 'required'],
            [['nombreUsuario', 'correo', 'nombre', 'apellidos', 'tipo'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nombreUsuario' => 'Nombre Usuario',
            'correo' => 'Correo',
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
            'tipo' => 'Tipo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnoCursos()
    {
        return $this->hasMany(AlumnoCurso::className(), ['Usuarios_nombreUsuario' => 'nombreUsuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCursoIdCursos()
    {
        return $this->hasMany(Curso::className(), ['idCurso' => 'Curso_idCurso'])->viaTable('AlumnoCurso', ['Usuarios_nombreUsuario' => 'nombreUsuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImparteCursos()
    {
        return $this->hasMany(ImparteCurso::className(), ['Usuarios_nombreUsuario' => 'nombreUsuario']);
    }
}
