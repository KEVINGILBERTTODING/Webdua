<!DOCTYPE html>
<html>
<head>
	<title>Membuat Kalkulator Sederhana Dengan HTML, PHP, dan CSS3</title>
	<link rel="stylesheet" type="text/css" href="kalkulator-style.css">
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;			
		}
	}
	?>
	<div class="kalkulator">
    <center>
		<h2 class="judul">Kalkulator Sederhana</h2>
		<form method="post" action="kalkulator.php">			
			<p>bil 1 <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="">
            <br>
			<p>bil 2 <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="">
			
			<br><br>
			hitung<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>
			<br><br><br>operator <select class="opt" name="operasi">
				<option value="tambah">+ (tambah)</option>
				<option value="kurang">- (kurang)</option>
				<option value="kali">x (kali)</option>
				<option value="bagi">/ (bagi)</option>
			</select>
			<input type="submit" name="hitung" value="=" class="tombol">											
		</form>
	
    </center>			
	</div>
</body>
</html>