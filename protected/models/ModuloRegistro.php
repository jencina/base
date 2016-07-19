<?php

/**
 * This is the model class for table "modulo_registro".
 *
 * The followings are the available columns in table 'modulo_registro':
 * @property string $mod_reg_id
 * @property string $mod_reg_nombre
 * @property integer $mod_reg_posicion
 * @property integer $mod_reg_icono_id
 * @property integer $mod_reg_tipo_id
 * @property string $mod_reg_mod_id
 * @property string $mod_reg_fechacreacion
 * @property string $mod_reg_fechamodificacion
 *
 * The followings are the available model relations:
 * @property ModuloPost[] $moduloPosts
 * @property Modulo $modRegMod
 * @property ModuloRegistroIcono $modRegIcono
 * @property ModuloRegistroTipo $modRegTipo
 */
class ModuloRegistro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'modulo_registro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mod_reg_icono_id, mod_reg_tipo_id, mod_reg_mod_id', 'required'),
			array('mod_reg_posicion, mod_reg_icono_id, mod_reg_tipo_id', 'numerical', 'integerOnly'=>true),
			array('mod_reg_nombre', 'length', 'max'=>100),
			array('mod_reg_mod_id', 'length', 'max'=>20),
			array('mod_reg_fechacreacion, mod_reg_fechamodificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('mod_reg_id, mod_reg_nombre, mod_reg_posicion, mod_reg_icono_id, mod_reg_tipo_id, mod_reg_mod_id, mod_reg_fechacreacion, mod_reg_fechamodificacion', 'safe', 'on'=>'search'),
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
			'moduloPosts' => array(self::MANY_MANY, 'ModuloPost', 'modulo_post_has_modulo_registro(mod_reg_id, mod_post_id)'),
			'modRegMod' => array(self::BELONGS_TO, 'Modulo', 'mod_reg_mod_id'),
			'modRegIcono' => array(self::BELONGS_TO, 'ModuloRegistroIcono', 'mod_reg_icono_id'),
			'modRegTipo' => array(self::BELONGS_TO, 'ModuloRegistroTipo', 'mod_reg_tipo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'mod_reg_id' => 'Mod Reg',
			'mod_reg_nombre' => 'Mod Reg Nombre',
			'mod_reg_posicion' => 'Mod Reg Posicion',
			'mod_reg_icono_id' => 'Mod Reg Icono',
			'mod_reg_tipo_id' => 'Mod Reg Tipo',
			'mod_reg_mod_id' => 'Mod Reg Mod',
			'mod_reg_fechacreacion' => 'Mod Reg Fechacreacion',
			'mod_reg_fechamodificacion' => 'Mod Reg Fechamodificacion',
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

		$criteria->compare('mod_reg_id',$this->mod_reg_id,true);
		$criteria->compare('mod_reg_nombre',$this->mod_reg_nombre,true);
		$criteria->compare('mod_reg_posicion',$this->mod_reg_posicion);
		$criteria->compare('mod_reg_icono_id',$this->mod_reg_icono_id);
		$criteria->compare('mod_reg_tipo_id',$this->mod_reg_tipo_id);
		$criteria->compare('mod_reg_mod_id',$this->mod_reg_mod_id,true);
		$criteria->compare('mod_reg_fechacreacion',$this->mod_reg_fechacreacion,true);
		$criteria->compare('mod_reg_fechamodificacion',$this->mod_reg_fechamodificacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModuloRegistro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
