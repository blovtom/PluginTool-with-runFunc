<?php
App::uses('Homepage', 'Model');

/**
 * Homepage Test Case
 *
 */
class HomepageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.homepage'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Homepage = ClassRegistry::init('Homepage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Homepage);

		parent::tearDown();
	}

}
