<?php

/**
 * This is the model class for table "modulo_post_comentario".
 *
 * The followings are the available columns in table 'modulo_post_comentario':
 * @property string $com_id
 * @property string $com_comentario
 * @property string $com_fechacreacion
 * @property string $com_fechamodificacion
 * @property string $com_mod_post_id
 * @property string $com_usuario_id
 *
 * The followings are the available model relations:
 * @property ModuloPost $comModPost
 * @property Usuario $comUsuario
 */
class ModuloPostComentario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'modulo_post_comentario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('com_mod_post_id, com_usuario_id', 'required'),
			array('com_mod_post_id, com_usuario_id', 'length', 'max'=>20),
			array('com_comentario, com_fechacreacion, com_fechamodificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('com_id, com_comentario, com_fechacreacion, com_fechamodificacion, com_mod_post_id, com_usuario_id', 'safe', 'on'=>'search'),
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
			'comModPost' => array(self::BELONGS_TO, 'ModuloPost', 'com_mod_post_id'),
			'comUsuario' => array(self::BELONGS_TO, 'Usuario', 'com_usuario_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'com_id' => 'Com',
			'com_comentario' => 'Com Comentario',
			'com_fechacreacion' => 'Com Fechacreacion',
			'com_fechamodificacion' => 'Com Fechamodificacion',
			'com_mod_post_id' => 'Com Mod Post',
			'com_usuario_id' => 'Com Usuario',
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

		$criteria->compare('com_id',$this->com_id,true);
		$criteria->compare('com_comentario',$this->com_comentario,true);
		$criteria->compare('com_fechacreacion',$this->com_fechacreacion,true);
		$criteria->compare('com_fechamodificacion',$this->com_fechamodificacion,true);
		$criteria->compare('com_mod_post_id',$this->com_mod_post_id,true);
		$criteria->compare('com_usuario_id',$this->com_usuario_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModuloPostComentario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
