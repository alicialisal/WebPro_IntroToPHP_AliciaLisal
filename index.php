<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP dan HTML</title>
</head>
<body>
    <?php 
	echo "<b>Print 'Hello World'</b><br>";
	echo "Hello World<br>";
	
	echo "<br>";

	echo "<b>Print 'Hello World' 10 kali</b><br>";
	for ($i = 1; $i <= 10; $i++) {
		echo "Hello World<br>";
	}
	
	echo "<br>";

	echo "<b>Print 'Hello World' 10 kali dengan nomor urut di perulangan genap</b><br>";
	for ($i = 1; $i <= 10; $i++) {
		if ($i % 2 == 0) {
			echo "Hello World - $i<br>";
		}
		else {
			echo "Hello World<br>";
		}
	}

	echo "<br>";
	echo "<b>Print Daftar Bulan menggunakan Array</b><br>";
	echo "<ul>"; //Membuat Array 1 Dimensi
    $months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    foreach ($months as $month) {
        echo "<li>$month</li>";
    }
	echo "</ul>";

	echo "<b>Print Daftar Bulan dan Hari Raya menggunakan Array 2 Dimensi</b><br>";
	echo "<ul>"; //Membuat Array 2 Dimensi
	$holidays = [
		"Januari" => "Tahun Baru",
		"Februari" => "Imlek",
		"Maret" => "Hari Raya Nyepi",
		"April" => "Hari Kartini",
		"Mei" => "Hari Buruh",
		"Juni" => "Hari Pancasila",
		"Juli" => "Hari Kemerdekaan Amerika",
		"Agustus" => "Hari Kemerdekaan Indonesia",
		"September" => "Hari Kesaktian Pancasila",
		"Oktober" => "Hari Sumpah Pemuda",
		"November" => "Hari Pahlawan",
		"Desember" => "Hari Natal"
	];

	foreach ($holidays as $month => $holiday) {
		echo "<li>$month - $holiday</li>";
	}
	echo "</ul>";

	echo "<b>Pembuatan dan Penggunaan Function Operasi</b><br>";
	function pengurangan($a, $b) { //Function Operasi Pengurangan
		return $a - $b;
	}

	function perkalian($a, $b) { //Function Operasi Perkalian
		return $a * $b;
	}

	function pembagian($a, $b) { //Function Operasi Pembagian
		if ($b == 0) {
			return "Tidak bisa membagi dengan nol";
		}
		return $a / $b;
	}

	function penjumlahan($a, $b) { //Function Operasi Penjumlahan
		return $a + $b;
	}

	$a = 34;
	$b = 5;

	//Pemanggilan Fungsi Operasi
	echo "a = $a, b = $b<br>";
	echo "Hasil pengurangan $a dan $b adalah " . pengurangan($a, $b) . "<br>";
	echo "Hasil perkalian $a dan $b adalah " . perkalian($a, $b) . "<br>";
	echo "Hasil pembagian $a dan $b adalah " . pembagian($a, $b) . "<br>";
	echo "Hasil penjumlahan $a dan $b adalah " . penjumlahan($a, $b) . "<br>";
	?>
</body>
</html>
