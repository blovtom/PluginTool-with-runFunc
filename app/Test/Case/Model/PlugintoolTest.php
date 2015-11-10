<?php
App::uses('Plugintool', 'Model');

/**
 * Plugintool Test Case
 *
 */
class PlugintoolTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.plugintool',
		'app.functionality',
		'app.plugin',
		'app.filter'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Plugintool = ClassRegistry::init('Plugintool');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Plugintool);

		parent::tearDown();
	}

}
