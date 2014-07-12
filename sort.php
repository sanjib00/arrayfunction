<?php
//$age=array("Peter"=>"39","Ben"=>"37","Joe"=>"43");
//asort($age);
//print_r($age);


$cars=array("Volvo","BMW","Toyota");
sort($cars);

$clength=count($cars);
for($x=0;$x<$clength;$x++)
   {
   echo $cars[$x];
   echo "<br>";
   }

?>