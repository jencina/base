<?php

/**
 * This is the model class for table "modulo".
 *
 * The followings are the available columns in table 'modulo':
 * @property string $mod_id
 * @property string $mod_nombre
 * @property string $mod_descripcion
 * @property integer $mod_activo
 * @property string $mod_fechacreacion
 * @property string $mod_fechamodificacion
 *
 * The followings are the available model relations:
 * @property ModuloRegistro[] $moduloRegistros
 */
class Modulo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'modulo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mod_activo', 'numerical', 'integerOnly'=>true),
			array('mod_nombre', 'length', 'max'=>100),
			array('mod_descripcion, mod_fechacreacion, mod_fechamodificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('mod_id, mod_nombre, mod_descripcion, mod_activo, mod_fechacreacion, mod_fechamodificacion', 'safe', 'on'=>'search'),
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
			'moduloRegistros' => array(self::HAS_MANY, 'ModuloRegistro', 'mod_reg_mod_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'mod_id' => 'Mod',
			'mod_nombre' => 'Mod Nombre',
			'mod_descripcion' => 'Mod Descripcion',
			'mod_activo' => 'Mod Activo',
			'mod_fechacreacion' => 'Mod Fechacreacion',
			'mod_fechamodificacion' => 'Mod Fechamodificacion',
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

		$criteria->compare('mod_id',$this->mod_id,true);
		$criteria->compare('mod_nombre',$this->mod_nombre,true);
		$criteria->compare('mod_descripcion',$this->mod_descripcion,true);
		$criteria->compare('mod_activo',$this->mod_activo);
		$criteria->compare('mod_fechacreacion',$this->mod_fechacreacion,true);
		$criteria->compare('mod_fechamodificacion',$this->mod_fechamodificacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Modulo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
