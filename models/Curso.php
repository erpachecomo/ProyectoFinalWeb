<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Curso".
 *
 * @property integer $idCurso
 * @property string $Nombre
 * @property string $Descripcion
 * @property string $FechaInicio
 * @property string $FechaFin
 * @property integer $Horas
 *
 * @property AlumnoCurso[] $alumnoCursos
 * @property Usuario[] $usuariosNombreUsuarios
 * @property ImparteCurso[] $imparteCursos
 * @property Tareas[] $tareas
 */
class Curso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Curso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idCurso'], 'required'],
            [['idCurso', 'Horas'], 'integer'],
            [['FechaInicio', 'FechaFin'], 'safe'],
            [['Nombre', 'Descripcion'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCurso' => 'Id Curso',
            'Nombre' => 'Nombre',
            'Descripcion' => 'Descripcion',
            'FechaInicio' => 'Fecha Inicio',
            'FechaFin' => 'Fecha Fin',
            'Horas' => 'Horas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnoCursos()
    {
        return $this->hasMany(AlumnoCurso::className(), ['Curso_idCurso' => 'idCurso']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuariosNombreUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['nombreUsuario' => 'Usuarios_nombreUsuario'])->viaTable('AlumnoCurso', ['Curso_idCurso' => 'idCurso']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImparteCursos()
    {
        return $this->hasMany(ImparteCurso::className(), ['Curso_idCurso' => 'idCurso']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTareas()
    {
        return $this->hasMany(Tareas::className(), ['Curso_idCurso' => 'idCurso']);
    }
}
