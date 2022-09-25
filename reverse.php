<?php 

function FirstReverse($str) {

  // code goes here
  $strLen = strlen($str);
  $reverseStr = "";

  for($i = 0; $i < $strLen; $i++){
    $reverseStr = $reverseStr . $str[$strLen - $i - 1];
  }
  $str = $reverseStr;
  return $str;

}
   
// keep this function call here 
// echo $strLen;
echo FirstReverse(fgets(fopen('php://stdin', 'r')));  

?>
