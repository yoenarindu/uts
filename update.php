<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update</title>
</head>
<body>
	<?php 
	include "koneksi.php";
	$id = $_POST['id_145'];
	$nama = $_POST['nama_145'];
	$email = $_POST['email_145'];
	$alamat = $_POST['alamat_145'];

	$sql = "UPDATE tbl_145 SET nama_145 = '$nama', email_145='$email', alamat_145='$alamat' WHERE id_145='$id'";
	$hasil = mysqli_query($koneksi, $sql);
	if (!$hasil){
		echo "<script>
		alert('Eksekusi Update data  GAGAL!');
		document.location='data.php';
		</script>";
	}else{
		echo "<script>
		alert('Eksekusi update data BERHASIL!');
		document.location='data.php';
		</script>";
	}
	 ?>

</body>
</html>