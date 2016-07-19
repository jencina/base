<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $usu_id
 * @property string $usu_nombre
 * @property string $usu_apellido
 * @property string $usu_email
 * @property string $usu_direccion
 * @property string $usu_imagen
 * @property string $usu_departamento
 * @property string $usu_cargo
 * @property string $usu_username
 * @property string $usu_password
 * @property string $usu_fechacreacion
 * @property string $usu_fechamodificacion
 * @property integer $usu_activo
 *
 * The followings are the available model relations:
 * @property Grupo[] $grupos
 * @property ModuloPost[] $moduloPosts
 * @property ModuloPostComentario[] $moduloPostComentarios
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usu_activo', 'numerical', 'integerOnly'=>true),
			array('usu_nombre, usu_apellido, usu_direccion', 'length', 'max'=>255),
			array('usu_email, usu_departamento, usu_cargo, usu_username, usu_password', 'length', 'max'=>100),
			array('usu_imagen', 'length', 'max'=>200),
			array('usu_fechacreacion, usu_fechamodificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('usu_id, usu_nombre, usu_apellido, usu_email, usu_direccion, usu_imagen, usu_departamento, usu_cargo, usu_username, usu_password, usu_fechacreacion, usu_fechamodificacion, usu_activo', 'safe', 'on'=>'search'),
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
			'grupos' => array(self::MANY_MANY, 'Grupo', 'grupo_has_usuario(usuario_id, grupo_id)'),
			'moduloPosts' => array(self::HAS_MANY, 'ModuloPost', 'mod_post_asignado_usu_id'),
			'moduloPostComentarios' => array(self::HAS_MANY, 'ModuloPostComentario', 'com_usuario_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'usu_id' => 'Usu',
			'usu_nombre' => 'Usu Nombre',
			'usu_apellido' => 'Usu Apellido',
			'usu_email' => 'Usu Email',
			'usu_direccion' => 'Usu Direccion',
			'usu_imagen' => 'Usu Imagen',
			'usu_departamento' => 'Usu Departamento',
			'usu_cargo' => 'Usu Cargo',
			'usu_username' => 'Usu Username',
			'usu_password' => 'Usu Password',
			'usu_fechacreacion' => 'Usu Fechacreacion',
			'usu_fechamodificacion' => 'Usu Fechamodificacion',
			'usu_activo' => 'Usu Activo',
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

		$criteria->compare('usu_id',$this->usu_id,true);
		$criteria->compare('usu_nombre',$this->usu_nombre,true);
		$criteria->compare('usu_apellido',$this->usu_apellido,true);
		$criteria->compare('usu_email',$this->usu_email,true);
		$criteria->compare('usu_direccion',$this->usu_direccion,true);
		$criteria->compare('usu_imagen',$this->usu_imagen,true);
		$criteria->compare('usu_departamento',$this->usu_departamento,true);
		$criteria->compare('usu_cargo',$this->usu_cargo,true);
		$criteria->compare('usu_username',$this->usu_username,true);
		$criteria->compare('usu_password',$this->usu_password,true);
		$criteria->compare('usu_fechacreacion',$this->usu_fechacreacion,true);
		$criteria->compare('usu_fechamodificacion',$this->usu_fechamodificacion,true);
		$criteria->compare('usu_activo',$this->usu_activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
