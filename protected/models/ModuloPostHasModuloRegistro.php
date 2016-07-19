<?php

/**
 * This is the model class for table "modulo_post_has_modulo_registro".
 *
 * The followings are the available columns in table 'modulo_post_has_modulo_registro':
 * @property string $mod_post_id
 * @property string $mod_reg_id
 * @property string $contenido
 */
class ModuloPostHasModuloRegistro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'modulo_post_has_modulo_registro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mod_post_id, mod_reg_id', 'required'),
			array('mod_post_id, mod_reg_id', 'length', 'max'=>20),
			array('contenido', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('mod_post_id, mod_reg_id, contenido', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'mod_post_id' => 'Mod Post',
			'mod_reg_id' => 'Mod Reg',
			'contenido' => 'Contenido',
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

		$criteria->compare('mod_post_id',$this->mod_post_id,true);
		$criteria->compare('mod_reg_id',$this->mod_reg_id,true);
		$criteria->compare('contenido',$this->contenido,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModuloPostHasModuloRegistro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
