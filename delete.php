<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete</title>
</head>
<body>
		<?php 
		include "koneksi.php";

		$id = $_GET['id'];

        $sql = "DELETE FROM tbl_145 WHERE id_145 = '$id'";
        $hasil = mysqli_query($koneksi, $sql);
		if (!$hasil){
			echo "<script>
			alert('Eksekusi Delete data  GAGAL!');
			document.location='data.php';
			</script>";
		}else{
			echo "<script>
			alert('Eksekusi delete data BERHASIL!');
			document.location='data.php';
			</script>";
		}
		 ?>
	</div>

</body>
</html>