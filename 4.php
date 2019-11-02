<?php

echo "<h4>APLIKASI HITUNG BARANG</h4>";

$barangA = array( "Harga"			=> 3000,
				  "Qty_Diskon"	 	=> 10
		   );
$barangB = array( "Harga"			=> 3500,
				  "Qty_Diskon"	 	=> 5
		   );
$barangC = array( "Harga"			=> 5000,
				  "Qty_Diskon"	 	=> 0
		   );

echo "<form action='' method='post'>";
echo "  <select name='barang' required>
			<option value='' holder>Pilih Barang Dibawah</option>
			<option value='A'>Barang A</option>
			<option value='B'>Barang B</option>
			<option value='C'>Barang C</option>
		</select>" ;
echo "<br>";
echo "<br>";
echo "<input name='qty' type='number' placeholder='Inputkan qty pembelian' required>";
echo "<br>";
echo "<br>";

echo "Harga Barang A : ".$barangA['Harga']."<br>";
echo "Harga Barang B : ".$barangB['Harga']."<br>";
echo "Harga Barang C : ".$barangC['Harga']."<br>";
echo "==========================<Br>";
echo "<button type='submit'>Submit</button>";
echo "</form>";



function hitungbarang($barang, $jumlah){

	global $barangA;
	global $barangB;
	global $barangC;

	if(!$barang == ''){

	if($barang == "A"){
		$total = $barangA['Harga'] * $jumlah;
		if($jumlah > 10){
			$potongan_qty = $jumlah * 500;
		}
		elseif($jumlah <= 10){
			$potongan_qty = 0;
		}
	}

	if($barang == "B"){
		$hargaB = $barangB['Harga'];
		$total =  $hargaB * $jumlah;
		if($jumlah > 5){
			$diskon = $hargaB * 0.5;
			$potongan_qty = $jumlah * $diskon;			
		}
		elseif($jumlah <= 5){
			$potongan_qty = 0;
		}
	}

	if($barang == "C"){
		$total = $barangC['Harga'] * $jumlah;		
			$potongan_qty = 0;
	}

	$total_bayar = $total - $potongan_qty; 
	}
	else{
		$total = 0;
		$potongan_qty = 0;
		$total_bayar = 0;
	}


	return 'Total Harga Barang : '.$total.'<br>'.
		   'Potongan : ' .$potongan_qty.'<br>'.
		   'Total yang harus dibayar :' .$total_bayar;

}

if (!empty($_POST)){
$barang = $_POST['barang'];
$qty = $_POST['qty'];
}
else{
	$barang = '';
	$qty = 0;
}

echo hitungbarang($barang, $qty);
?>