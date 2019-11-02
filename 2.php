<?php

echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
';

echo "
<body>
<div class='container'>
	<br>
	<div class='card-header bg-info'>
	<h4 align='center' class='text-light'>APLIKASI VENDING MACHINE MEMBAGI UANG KEMBALIAN</h4>
	</div>
	<div class='card-body'>



<form action='' method='post'>

	<div class='form-group'>
	<label>Inputkan Jumlah Belanja</label>
		<input class='form-control' name='belanja' type='number' placeholder='Inputkan Jumlah Belanja' id='number' required>
	</div>

	<div class='form-group'>
	<label>Inputkan Jumlah Bayar</label>
		<input class='form-control' name='bayar' id='number' type='number' placeholder='Inputkan Jumlah Bayar' required>
	</div>

	<button class='btn btn-info btn-block' type='submit'>Cek Pecahan Uang</button>

</form>
";

if (!empty($_POST)){

$belanja = $_POST['belanja'];
$bayar = $_POST['bayar'];
echo hitungKembalian($belanja,$bayar);

}
else{
	$belanja = 0;
	$bayar = 0;
}



function hitungKembalian($total_belanja, $uang_dimasukkan){
	if($uang_dimasukkan < $total_belanja){
		$hasil = '
		<div class="alert alert-danger" role="alert">
		<center>
			MASUKKAN INPUTAN YANG BENAR (UANG MASUK HARUS LEBIH BESAR ATAU SAMA DENGAN BELANJA)
		</center>
		</div>
		';
	}
	else{

	$kembalian = $uang_dimasukkan - $total_belanja;
	
	$uang_50k = $kembalian % 50000;
    $qty_50k = ($kembalian - $uang_50k) / 50000;

    $uang_20k = $uang_50k % 20000;
    $qty_20k = ($uang_50k - $uang_20k) / 20000;

    $uang_10k = $uang_20k % 10000;
    $qty_10k = ($uang_20k - $uang_10k) / 10000;

    $uang_5k = $uang_10k % 5000;
    $qty_5k = ($uang_10k - $uang_5k) / 5000;

    $uang_2k = $uang_5k % 2000;
    $qty_2k = ($uang_5k - $uang_2k) / 2000;

    $uang_1k = $uang_2k % 1000;
    $qty_1k = ($uang_2k - $uang_1k) / 1000;

    $uang_05k = $uang_1k % 500;
    $qty_05k = ($uang_1k - $uang_05k) / 500;

    $hasil = '
    		<b> Total Belanja Anda : '.number_format($total_belanja).'</b><br>
    		<b> Uang Anda : '.number_format($uang_dimasukkan).'</b><br>
    		<b> Uang Kembalian : '.number_format($kembalian).'</b><br><br>

    		Uang 50.000 Kembali : '.$qty_50k.' Lembar <br>
    		Uang 20.000 Kembali : '.$qty_20k.' Lembar <br>
    		Uang 10.000 Kembali : '.$qty_10k.' Lembar <br>
    		Uang 50.000 Kembali : '.$qty_5k.' Lembar <br>
    		Uang 2.000 Kembali : '.$qty_2k.' Lembar <br>
    		Uang 1.000 Kembali : '.$qty_1k.' Lembar <br>
    		Uang 500 Kembali : '.$qty_05k.' Lembar <br>
    	';
    }
    
    return $hasil;
}



echo "
</body>
<br>
<br>
<br>
<br>

 <footer id='sticky-footer' class='py-4 bg-dark text-white-50'>
    <div class='container text-center'>
      <small class='text-light'>Test Technical Bootcamp Batch 13-3 | Fadhil Darma Putera Zagoto | DumbWays.id</small>
    </div>
  </footer>

";

echo '</div></div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
';

?>