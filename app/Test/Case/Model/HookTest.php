<?php
App::uses('Hook', 'Model');

/**
 * Hook Test Case
 *
 */
class HookTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hook',
		'app.plugin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Hook = ClassRegistry::init('Hook');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Hook);

		parent::tearDown();
	}

}
