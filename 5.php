<?php

echo "<h4>KEY GENERATOR</h4>";

echo "<form action='' method='post'>";
echo "<input name='qty' type='number' placeholder='Inputkan Jumlah Digenerate' required>";
echo "<br>";
echo "<br>";
echo "<button type='submit'>Submit</button>";

echo "</form>";

function generateRandomString($length = 4) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  

}

function tes(){
   return generateRandomString().'-'.generateRandomString().'-'.generateRandomString().'-'.generateRandomString();
}

function generate($jumlah){
  for($i = 0; $i < $jumlah; $i++){
    echo tes().'<br>';  
  }
  
  
}

if (!empty($_POST)){
$jumlah = $_POST['qty'];

}
else{
	$jumlah = 0;
}

echo generate($jumlah);

?>

