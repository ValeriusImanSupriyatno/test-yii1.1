<?php

/**
 * This is the model class for table "mahasiswa".
 *
 * The followings are the available columns in table 'mahasiswa':
 * @property integer $id_mahasiswa
 * @property integer $id_jurusan
 * @property string $nim
 * @property string $nama
 * @property string $jenis_kelamin
 * @property string $tanggal_lahir
 * @property string $is_active
 *
 * The followings are the available model relations:
 * @property Jurusan $idJurusan
 */
class Mahasiswa extends CActiveRecord
{
    public $nama_jurusan;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mahasiswa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_jurusan, nim, nama, jenis_kelamin, tanggal_lahir, is_active', 'required'),
			array('id_jurusan', 'numerical', 'integerOnly'=>true),
			array('nim, nama', 'length', 'max'=>255),
			array('jenis_kelamin, is_active', 'length', 'max'=>1),
            array('id_mahasiswa, id_jurusan, nim, nama, jenis_kelamin, tanggal_lahir, is_active', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
			array('id_mahasiswa, id_jurusan, nim, nama, jenis_kelamin, tanggal_lahir, is_active', 'safe', 'on'=>'search'),
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
			'idJurusan' => array(self::BELONGS_TO, 'Jurusan', 'id_jurusan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_mahasiswa' => 'Id Mahasiswa',
			'nim' => 'Nim',
			'nama' => 'Nama',
			'jenis_kelamin' => 'Jenis Kelamin',
			'tanggal_lahir' => 'Tanggal Lahir',
			'is_active' => 'Is Active',
			'nama_jurusan' => 'Nama Jurusan',
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

		$criteria->compare('t.id_mahasiswa',$this->id_mahasiswa);
		$criteria->compare('t.id_jurusan',$this->id_jurusan);
		$criteria->compare('t.nim',$this->nim,true);
		$criteria->compare('t.nama',$this->nama,true);
		$criteria->compare('t.jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('t.tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('t.is_active',$this->is_active,true);

        $criteria->join = 'LEFT JOIN jurusan as j on t.id_jurusan = j.id_jurusan';

        if (isset($this->nama_jurusan))
            $criteria->addCondition("j.nama_jurusan like '%".$this->nama_jurusan."%'");


        return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mahasiswa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function allDataMahasiswa(){
        $criteria = new CDbCriteria;
        $criteria->select = 't.id_mahasiswa, t.id_jurusan, t.nim, t.nama, t.tanggal_lahir, t.jenis_kelamin, t.is_active, j.nama_jurusan';
        $criteria->join = 'LEFT JOIN jurusan as j on t.id_jurusan = j.id_jurusan';
        $criteria->compare('t.id_mahasiswa',$this->id_mahasiswa);
        $criteria->compare('t.id_jurusan',$this->id_jurusan);
        $criteria->compare('t.nim',$this->nim,true);
        $criteria->compare('t.nama',$this->nama,true);
        $criteria->compare('t.jenis_kelamin',$this->jenis_kelamin,true);
        $criteria->compare('t.tanggal_lahir',$this->tanggal_lahir,true);
        $criteria->compare('t.is_active',$this->is_active,true);
        $criteria->compare('j.nama_jurusan',$this->nama_jurusan,true);

//        if (isset($this->nama_jurusan))
//            $criteria->addCondition("j.nama_jurusan like '%".$this->nama_jurusan."%'");

        $criteria->order = "t.id_mahasiswa desc";

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
            'pagination' => array(
                'pageSize' => 10,
                'pageVar'=>'page',
            ),
        ));
    }
}
