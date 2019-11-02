<?php

echo "<h4>SORT ARRAY [Input array manual di source code]</h4>";

function sort_array($data){
  sort($data);  
  $panjang = count($data); 

  for($x = 0; $x < $panjang; $x++) { 
    echo $data[$x]; 
    echo " "; 
  }  
}

$data  = array("g", "h", "i", "j"); 
$data2  = array("a", "c", "b", "e", "d"); 
$data3  = array("g", "e", "f"); 

echo sort_array($data);
echo "<br>";
echo sort_array($data2);
echo "<br>";
echo sort_array($data3);

?>
