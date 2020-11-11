<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<center>
	<h2><font color="RED">DATA MAHASISWA PRODI SISTEM INFORMASI</font></h2>
	<br/>
	<a href="tambah01.php">Tambah Data</a>
	<br/>
	<a href="listmahasiswa01.php">Tampilkan Data</a>
	<br/>
	<br/>
		<?php
		//Nama Muhamad Afril Rohmansyah Putra
		//NIM  19515005
		//Prodi Sistem Informasi 2019 
		//Universitas Gajayana Malang
		//PromnetR2
		//Create Read Update and Delete
		//Ceklist status penambahan 
		include "koneksi01.php";
		if(isset($_GET['status'])): ?>
    	<p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Penambahan Data Baru Sukses!";
            } else {
                echo "Penambahan Data Baru GAGAL!";
            }
        ?>
    	</p>
		<?php endif; ?>
	</center>
</body>
</html>