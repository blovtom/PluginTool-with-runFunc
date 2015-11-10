<?php
/**
 * HomepageFixture
 *
 */
class HomepageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'Plugin_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'name' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'ID' => array('column' => 'ID', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'ID' => 1,
			'Plugin_id' => 1,
			'name' => 1
		),
	);

}
