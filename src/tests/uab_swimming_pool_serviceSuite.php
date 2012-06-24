<?php

require_once 'PHPUnit\Framework\TestSuite.php';

/**
 * Static test suite.
 */
class uab_swimming_pool_serviceSuite extends PHPUnit_Framework_TestSuite {
	
	/**
	 * Constructs the test suite handler.
	 */
	public function __construct() {
		$this->setName ( 'uab_swimming_pool_serviceSuite' );
	}
	
	/**
	 * Creates the suite.
	 */
	public static function suite() {
		return new self ();
	}
}

