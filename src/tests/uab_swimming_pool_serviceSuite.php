<?php

require_once 'PHPUnit/Framework/TestCase.php';
//require_once 'System.php';


/**
 * Static test suite.
 */
class uab_swimming_pool_serviceSuite extends PHPUnit_Framework_TestCase {
	
	/**
	 * Constructs the test suite handler.
	 */
/*	public function __construct() {
		$this->setName ( 'uab_swimming_pool_serviceSuite' );
	}

		public static function suite() {
		var_dump(class_exists('System', false));
		return new self ();
	}
*/	
	public function testFail() {
		$this->fail('Your test successfully failed!');
	}
}

