<?php

/**
 * This is the model class for table "modulo_post".
 *
 * The followings are the available columns in table 'modulo_post':
 * @property string $mod_post_id
 * @property string $mod_post_titulo
 * @property string $mod_post_fechacreacion
 * @property string $mod_post_fechamodificacion
 * @property string $mod_post_asignado_usu_id
 *
 * The followings are the available model relations:
 * @property Usuario $modPostAsignadoUsu
 * @property ModuloPostComentario[] $moduloPostComentarios
 * @property Grupo[] $grupos
 * @property ModuloRegistro[] $moduloRegistros
 */
class ModuloPost extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'modulo_post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mod_post_asignado_usu_id', 'required'),
			array('mod_post_titulo', 'length', 'max'=>100),
			array('mod_post_asignado_usu_id', 'length', 'max'=>20),
			array('mod_post_fechacreacion, mod_post_fechamodificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('mod_post_id, mod_post_titulo, mod_post_fechacreacion, mod_post_fechamodificacion, mod_post_asignado_usu_id', 'safe', 'on'=>'search'),
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
			'modPostAsignadoUsu' => array(self::BELONGS_TO, 'Usuario', 'mod_post_asignado_usu_id'),
			'moduloPostComentarios' => array(self::HAS_MANY, 'ModuloPostComentario', 'com_mod_post_id'),
			'grupos' => array(self::MANY_MANY, 'Grupo', 'modulo_post_has_grupo(mod_post_id, grupo_id)'),
			'moduloRegistros' => array(self::MANY_MANY, 'ModuloRegistro', 'modulo_post_has_modulo_registro(mod_post_id, mod_reg_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'mod_post_id' => 'Mod Post',
			'mod_post_titulo' => 'Mod Post Titulo',
			'mod_post_fechacreacion' => 'Mod Post Fechacreacion',
			'mod_post_fechamodificacion' => 'Mod Post Fechamodificacion',
			'mod_post_asignado_usu_id' => 'Mod Post Asignado Usu',
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
		$criteria->compare('mod_post_titulo',$this->mod_post_titulo,true);
		$criteria->compare('mod_post_fechacreacion',$this->mod_post_fechacreacion,true);
		$criteria->compare('mod_post_fechamodificacion',$this->mod_post_fechamodificacion,true);
		$criteria->compare('mod_post_asignado_usu_id',$this->mod_post_asignado_usu_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModuloPost the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
