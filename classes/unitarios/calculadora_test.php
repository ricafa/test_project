<?php
require_once('../Log.class.php');
require_once('../../simpletest/autorun.php');

class CalculadoraTest extends UnitTestCase {

  function testSoma() {
  	$log = new Calculadora;
  	$a = rand(1,1000);
  	$b = rand(1,1000);
  	$this->assertEqual($log->soma($a,$b),($a+$b));
  }

  function testSomaErroSeMenorQueZero(){
    $this->expectException();
  	$log = new Calculadora;
  	$a = rand(1,1000);
  	$b = -2;
  	$log->soma($a,$b);
  	//$this->assertEqual($soma,"Soma de números negativos não permitida.");
  }
}
?>