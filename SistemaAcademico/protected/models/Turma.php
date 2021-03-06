<?php

/**
 * This is the model class for table "turma".
 *
 * The followings are the available columns in table 'turma':
 * @property integer $id
 * @property integer $id_disciplina
 * @property integer $id_pessoa
 * @property string $nome
 * @property string $dataInicio
 * @property string $dataFinal
 * @property string $diasSemana
 * @property string $periodo
 *
 * The followings are the available model relations:
 * @property Aula[] $aulas
 * @property Disciplina $idDisciplina
 * @property Pessoa $idPessoa
 */
class Turma extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'turma';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_disciplina, id_pessoa', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>30),
			array('diasSemana', 'length', 'max'=>50),
			array('periodo', 'length', 'max'=>6),
			array('dataInicio, dataFinal', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_disciplina, id_pessoa, nome, dataInicio, dataFinal, diasSemana, periodo', 'safe', 'on'=>'search'),
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
			'aulas' => array(self::HAS_MANY, 'Aula', 'id_turma'),
			'disciplina' => array(self::BELONGS_TO, 'Disciplina', 'id_disciplina'),
			'pessoa' => array(self::BELONGS_TO, 'Pessoa', 'id_pessoa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_disciplina' => 'Id Disciplina',
			'id_pessoa' => 'Id Pessoa',
			'nome' => 'Nome',
			'dataInicio' => 'Data Inicio',
			'dataFinal' => 'Data Final',
			'diasSemana' => 'Dias Semana',
			'periodo' => 'Periodo',
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
		$criteria->compare('id_disciplina',$this->id_disciplina);
		$criteria->compare('id_pessoa',$this->id_pessoa);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('dataInicio',$this->dataInicio,true);
		$criteria->compare('dataFinal',$this->dataFinal,true);
		$criteria->compare('diasSemana',$this->diasSemana,true);
		$criteria->compare('periodo',$this->periodo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Turma the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
