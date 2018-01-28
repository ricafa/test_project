<?php

class Log {
  function soma($a,$b){
    return $a+$b;
  }
      
  function message($message) {
  }
}

class Calculadora {
    function soma($a,$b){
    	if(($a>0) && ($b>0) ){
    		return $a+$b;
    	}else{
        throw new Exception("Soma de números negativos não permitida.");
    	}
    }
}
?>