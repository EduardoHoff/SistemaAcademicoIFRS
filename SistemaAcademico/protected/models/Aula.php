<?php

/**
 * This is the model class for table "aula".
 *
 * The followings are the available columns in table 'aula':
 * @property integer $id
 * @property integer $id_turma
 * @property string $dataAula
 * @property string $conteudo
 *
 * The followings are the available model relations:
 * @property Turma $idTurma
 */
class Aula extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'aula';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_turma', 'numerical', 'integerOnly'=>true),
			array('dataAula, conteudo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_turma, dataAula, conteudo', 'safe', 'on'=>'search'),
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
			'turma' => array(self::BELONGS_TO, 'Turma', 'id_turma'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_turma' => 'Turma',
			'dataAula' => 'Data da Aula',
			'conteudo' => 'Conteudo',
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
		$criteria->compare('id_turma',$this->id_turma);
		$criteria->compare('dataAula',$this->dataAula,true);
		$criteria->compare('conteudo',$this->conteudo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Aula the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
