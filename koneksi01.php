<?php
	//koneksi.php
	//Nama Muhamad Afril Rohmansyah Putra
	//NIM  19515005
	//Prodi Sistem Informasi 2019 
	//Universitas Gajayana Malang
	//PromnetR2
	//Create Read Update and Delete
	$servername = "localhost";
	$database = "data_mahasiswa";
	//$table = "mahasiswa";
	$username = "root";
	$password = "";
		// membuat koneksi
		$koneksi = mysqli_connect($servername, $username, $password, $database);
		// mengecek koneksi
		if (!$koneksi) {
    		die("Koneksi gagal: " . mysqli_connect_error());
		}
		echo "Koneksi berhasil";
		//mysqli_close($koneksi);

?>