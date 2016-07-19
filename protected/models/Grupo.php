<?php

/**
 * This is the model class for table "grupo".
 *
 * The followings are the available columns in table 'grupo':
 * @property string $grupo_id
 * @property string $grupo_nombre
 * @property string $grupo_descripcion
 * @property integer $grup_publico
 * @property string $grupo_color
 * @property string $grupo_fechacreacion
 * @property string $grupo_fechamodificacion
 *
 * The followings are the available model relations:
 * @property Usuario[] $usuarios
 * @property ModuloPost[] $moduloPosts
 */
class Grupo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'grupo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('grup_publico', 'numerical', 'integerOnly'=>true),
			array('grupo_nombre', 'length', 'max'=>100),
			array('grupo_descripcion, grupo_color', 'length', 'max'=>45),
			array('grupo_fechacreacion, grupo_fechamodificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('grupo_id, grupo_nombre, grupo_descripcion, grup_publico, grupo_color, grupo_fechacreacion, grupo_fechamodificacion', 'safe', 'on'=>'search'),
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
			'usuarios' => array(self::MANY_MANY, 'Usuario', 'grupo_has_usuario(grupo_id, usuario_id)'),
			'moduloPosts' => array(self::MANY_MANY, 'ModuloPost', 'modulo_post_has_grupo(grupo_id, mod_post_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'grupo_id' => 'Grupo',
			'grupo_nombre' => 'Grupo Nombre',
			'grupo_descripcion' => 'Grupo Descripcion',
			'grup_publico' => 'Grup Publico',
			'grupo_color' => 'Grupo Color',
			'grupo_fechacreacion' => 'Grupo Fechacreacion',
			'grupo_fechamodificacion' => 'Grupo Fechamodificacion',
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

		$criteria->compare('grupo_id',$this->grupo_id,true);
		$criteria->compare('grupo_nombre',$this->grupo_nombre,true);
		$criteria->compare('grupo_descripcion',$this->grupo_descripcion,true);
		$criteria->compare('grup_publico',$this->grup_publico);
		$criteria->compare('grupo_color',$this->grupo_color,true);
		$criteria->compare('grupo_fechacreacion',$this->grupo_fechacreacion,true);
		$criteria->compare('grupo_fechamodificacion',$this->grupo_fechamodificacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Grupo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
