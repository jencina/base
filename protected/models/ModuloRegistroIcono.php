<?php

/**
 * This is the model class for table "modulo_registro_icono".
 *
 * The followings are the available columns in table 'modulo_registro_icono':
 * @property integer $icon_id
 * @property string $icon_nombre
 *
 * The followings are the available model relations:
 * @property ModuloRegistro[] $moduloRegistros
 */
class ModuloRegistroIcono extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'modulo_registro_icono';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('icon_nombre', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('icon_id, icon_nombre', 'safe', 'on'=>'search'),
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
			'moduloRegistros' => array(self::HAS_MANY, 'ModuloRegistro', 'mod_reg_icono_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'icon_id' => 'Icon',
			'icon_nombre' => 'Icon Nombre',
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

		$criteria->compare('icon_id',$this->icon_id);
		$criteria->compare('icon_nombre',$this->icon_nombre,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModuloRegistroIcono the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
