<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200),
		'login' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 46),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'login' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet'
		),
	);

}
