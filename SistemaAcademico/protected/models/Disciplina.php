<?php

/**
 * This is the model class for table "disciplina".
 *
 * The followings are the available columns in table 'disciplina':
 * @property integer $id
 * @property integer $id_curso
 * @property string $nome
 * @property integer $creditos
 * @property integer $cargaHorario
 *
 * The followings are the available model relations:
 * @property Curso $idCurso
 * @property Turma[] $turmas
 */
class Disciplina extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'disciplina';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_curso, creditos, cargaHorario', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_curso, nome, creditos, cargaHorario', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'Curso' => array(self::BELONGS_TO, 'Curso', 'id_curso'),
			'turmas' => array(self::HAS_MANY, 'Turma', 'id_disciplina'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_curso' => 'Id Curso',
			'nome' => 'Nome',
			'creditos' => 'Creditos',
			'cargaHorario' => 'Carga Horario',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_curso',$this->id_curso);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('creditos',$this->creditos);
		$criteria->compare('cargaHorario',$this->cargaHorario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Disciplina the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
