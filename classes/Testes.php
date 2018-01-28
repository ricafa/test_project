<?php
require_once('../simpletest/autorun.php');

class AllTests extends TestSuite {
    function __construct() {
        parent::__construct();
        $this->addFile('/unitarios/calculadora_test.php');
        $this->addFile('/unitarios/log_test.php');
    }
}
?>