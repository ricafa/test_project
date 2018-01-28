<?php
require_once('../../simpletest/autorun.php');
require_once('../../simpletest/web_tester.php');
 
class MySiteTest extends WebTestCase {
    
    function testHomePageTitleChange() {
        $this->get('http://localhost/phpprojects/test_project/classes/home.php');
        $this->assertTitle('Meu Titulo');
        $this->clickSubmit('Novo Título');
        $this->assertTitle('Nosso Titulo');
        $this->assertText('Salvo com sucesso!');
    }
}
?>