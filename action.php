<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Action</title>
</head>
<body>
	<?php
	include 'koneksi.php';
	$nama = $_POST['nama_145'];
	$email = $_POST['email_145'];
	$alamat = $_POST['alamat_145'];

	$sql = "INSERT INTO tbl_145 VALUES (null, '$nama','$email','$alamat')";
	$hasil = mysqli_query ($koneksi, $sql);
	if (!$hasil){
		echo "<script>
		alert('Eksekusi tambah data  GAGAL!');
		document.location='data.php';
		</script>";
	}else{
		echo "<script>
		alert('Eksekusi tambah data BERHASIL!');
		document.location='data.php';
		</script>";
	}
	?>

	
</body>
</html>