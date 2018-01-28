<?php
require_once('../simpletest/autorun.php');
require_once('log_test.php');
require_once('calculadora_test.php');

class AllTests extends TestSuite {
    function __construct() {
        parent::__construct();
        //$this->add(new TestOfLogging());
        //$this->add(new CalculadoraTest());
    }
}
?>