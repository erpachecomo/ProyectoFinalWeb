<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Tareas".
 *
 * @property integer $idTareas
 * @property string $Descripcion
 * @property string $Nombre
 * @property integer $Curso_idCurso
 *
 * @property Curso $cursoIdCurso
 */
class Tareas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Tareas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idTareas', 'Curso_idCurso'], 'required'],
            [['idTareas', 'Curso_idCurso'], 'integer'],
            [['Descripcion'], 'string', 'max' => 100],
            [['Nombre'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idTareas' => 'Id Tareas',
            'Descripcion' => 'Descripcion',
            'Nombre' => 'Nombre',
            'Curso_idCurso' => 'Curso Id Curso',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCursoIdCurso()
    {
        return $this->hasOne(Curso::className(), ['idCurso' => 'Curso_idCurso']);
    }
}
