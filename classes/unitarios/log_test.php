<?php
require_once('../Log.class.php');
require_once('../../simpletest/autorun.php');

class TestOfLogging extends UnitTestCase {
	
  function testSoma() {
  	$log = new Log;
  	$a = rand(1,1000);
  	$b = rand(1,1000);
  	$this->assertEqual($log->soma($a,$b),($a+$b));
  }
}
?>