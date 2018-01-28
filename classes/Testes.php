<?php
require_once('../simpletest/autorun.php');

class AllTests extends TestSuite {
    function __construct() {
        parent::__construct();
        $this->addFile('calculadora_test.php');
        $this->addFile('log_test.php');
    }
}
?>