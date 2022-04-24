<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form edit</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<?php 
	include 'koneksi.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM tbl_145 WHERE id_145='$id'";
	$hasil = mysqli_query($koneksi, $sql);
	 ?>
	 <?php 
	 while ($row = mysqli_fetch_array($hasil)) 
	{?>

<div class="container">
<h1 class="text-center">Form Edit</h1>
    <div class="card mt-3">
        <div class="card-header bg-primary text-white">
        Form Edit
        </div>
        <div class="card-body">
            <form method="post" action="update.php">
                <div>
                <input type="hidden" name="id_145" value="<?php echo $row['id_145']?>">
                </div>
                <div class="form-group">
                    <label>Nama 145 </label>
                    <input type="text" name="nama_145" class="form-control" placeholder="Input Nama"  value="<?php echo $row['nama_145']?>" required>
                </div>
                <div class="form-group">
                    <label>Email 145 </label>
                    <input type="text"  name="email_145" class="form-control" placeholder="Input email" value="<?php echo $row['email_145']?>" required>
                </div>
                <div class="form-group">
                    <label>Alamat </label>
                    <input type="text" name="alamat_145" class="form-control" placeholder="Alamat" value="<?php echo $row['alamat_145']?>" required>
                </div>
                <br>
                <button type="submit" class="btn btn-success" name="kirim">Update</button>
                
            </form>
        </div>
    </div>
</div>
<?php }?>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

