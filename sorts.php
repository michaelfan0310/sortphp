<?php
$arr1=array(3,1,-2,-5,15,9,38,2,78,87,-33,-55);
$arr2=array(3,1,-2,-5,15,9,38,2,78,87,-33,-55);
$temp=-10000;
function bubbleSort($arr){
   for($i=0;$i<count($arr)-1;$i++){
    for($j=0;$j<count($arr)-1-$i;$j++){
        if($arr[$j]>$arr[$j+1]){
            $temp=$arr[$j];
            $arr[$j]=$arr[$j+1];
            $arr[$j+1]=$temp;
        }
    }
}
var_dump($arr);
return $arr;
}
bubbleSort($arr1);

function insertSort($arr){
    for($i=1;$i<count($arr);$i++){

        $insertVal=$arr[$i];
        $insertInd=$i-1;
    while($insertInd>=0 && $insertVal<$arr[$insertInd]){

      $arr[$insertInd+1]=$arr[$insertInd];
             $insertInd--;
        }
        $arr[$insertInd+1]=$insertVal;
   
  }
  var_dump($arr);
} 
insertSort($arr2);
?>