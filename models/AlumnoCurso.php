<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "AlumnoCurso".
 *
 * @property integer $Curso_idCurso
 * @property string $Usuarios_nombreUsuario
 *
 * @property Usuario $usuariosNombreUsuario
 * @property Curso $cursoIdCurso
 */
class AlumnoCurso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'AlumnoCurso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Curso_idCurso', 'Usuarios_nombreUsuario'], 'required'],
            [['Curso_idCurso'], 'integer'],
            [['Usuarios_nombreUsuario'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Curso_idCurso' => 'Curso Id Curso',
            'Usuarios_nombreUsuario' => 'Usuarios Nombre Usuario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuariosNombreUsuario()
    {
        return $this->hasOne(Usuario::className(), ['nombreUsuario' => 'Usuarios_nombreUsuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCursoIdCurso()
    {
        return $this->hasOne(Curso::className(), ['idCurso' => 'Curso_idCurso']);
    }
}
