<?php
class SampleTest extends PHPUnit\Framework\TestCase {
        private static $user;

        public static function setUpBeforeClass(){
                self::$user = new visitor('ahmed',000);
        }
	public function test_check(){
		$this->assertTrue(self::$user->validate('ahmed',000)===true);
	}
        
}
