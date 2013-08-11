<?php
class Person extends CModel
{
	public $id;
	public $firstName;
	public $lastName;
	public $language;
	public $hours;
	public $firstLetter;
	public $status;

	/* editable testing attributes */
	public $textField;
	public $textArea;
	public $dateField;
	public $dropDown;

	/**
	 * @return array the attribute names
	 */
	public function attributeNames()
	{
		return array(
			'id',
			'firstName',
			'lastName',
			'language',
			'hours'
		);
	}

	/**
	 * Fake
	 * @return string
	 */
	public function getPrimaryKey(){
		return 'id';
	}

	/**
	 * safe attributes for editable
	 * @return array
	 */
	public function rules() {

		return array(
			array('firstName, lastName, language, textField, textArea, dateField, dropDown', 'safe')
		);
	}

	/**
	 * Work around for editable
	 * @return bool
	 */
	public function getIsNewRecord()
	{
		return true;
	}

	/**
	 * @return Person
	 */
	public function search()
	{
		return new Person();
	}

	/**
	 * Helper function to test editable
	 * @return Person
	 */
	public static function create()
	{
		$person = new Person();
		$person->firstName = 'Antonio';
		$person->lastName = 'Ramirez';
		$person->language = 'Spanish';
		$person->hours = 'Hours';
		return $person;
	}

	/**
	 * Helper function to get example grid data provider
	 * @return CArrayDataProvider
	 */
	public static function getGridDataProvider()
	{
		$mark = new Person();
		$mark->id = 1;
		$mark->firstName = 'Mark';
		$mark->lastName = 'Otto';
		$mark->language = 'CSS';
		$mark->hours = 10;
		$mark->status = 1;

		$jacob = new Person();
		$jacob->id = 2;
		$jacob->firstName = 'Jacob';
		$jacob->lastName = 'Thornton';
		$jacob->language = 'JavaScript';
		$jacob->hours = 20;
		$jacob->status = 0;

		$stu = new Person();
		$stu->id = 3;
		$stu->firstName = 'Stu';
		$stu->lastName = 'Dent';
		$stu->language = 'HTML';
		$stu->hours = 15;
		$stu->status = 1;

		$sunny = new Person();
		$sunny->id = 4;
		$sunny->firstName = 'Sunny';
		$sunny->lastName = 'Man';
		$sunny->language = 'HTML';
		$sunny->hours = 15;
		$sunny->status = 0;

		$persons = array($mark, $jacob, $stu, $sunny);

		return new CArrayDataProvider($persons);
	}

	/**
	 * Helper function to get example grid columns
	 * @return array
	 */
	public static function getGridColumns()
	{
		return array(
			array('name' => 'id', 'header' => '#'),
			array('name' => 'firstName', 'header' => 'First name'),
			array('name' => 'lastName', 'header' => 'Last name'),
			array('name' => 'language', 'header' => 'Language'),
			array('name' => 'hours', 'header' => 'Hours worked', 'htmlOptions'=>array('class'=>'tobeselected')),
			array(
				'htmlOptions' => array('nowrap' => 'nowrap'),
				'class' => 'bootstrap.widgets.TbButtonColumn',
				'header' => 'Edit',
				'viewButtonUrl' => null,
				'updateButtonUrl' => null,
				'deleteButtonUrl' => null,
				'buttons' => array(
					'delete' => array(
						'click' => 'function(){return false;}'
					)
				)
			)
		);
	}
}
