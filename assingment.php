<?php
 class Number{
 	public function calculator($firstNumber,$lastNumber,$btn){
 		$firstNumber = $firstNumber;
 		$lastNumber = $lastNumber;
 		$btn = $btn;

 		if(is_numeric($firstNumber) && is_numeric($lastNumber)){
 			switch ($btn) {
 				case '+':
 					 $result = $firstNumber + $lastNumber;
 					break;
 					case '-':
 					 $result = $firstNumber - $lastNumber;
 					break;
 				case '*':
 					 $result = $firstNumber * $lastNumber;
 					break;
 				case '/':
 					 $result = $firstNumber / $lastNumber;
 					break;
 				 
 				default:
 					 echo "Enter Invalid number";
 					break;

 			}
 				return $result;
 		}

 	}


 }


?>



















