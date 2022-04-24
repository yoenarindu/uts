<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Data</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="text-center">Data</h1>
    <a href="form_data.php" class="btn btn-primary"> [+] Tambah Data</a>
    <div class="card mt-3">
        <div class="card-header bg-success text-white">
            Data 
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID 145</th>
                    <th>Nama 145</th>
                    <th>Email 145</th>
                    <th>Alamat 145</th>
                    <th>Action</th>
                </tr>
                <?php
                include 'koneksi.php';
                $sql="SELECT * FROM tbl_145";
                $hasil = mysqli_query($koneksi, $sql);
                while($row = mysqli_fetch_array($hasil))
                {
                ?>
                <tr>
					<td><?=$row['id_145'];?></td>
                    <td><?=$row['nama_145'];?></td>
                    <td><?=$row['email_145'];?></td>
                    <td><?=$row['alamat_145'];?></td>
                    <td>
                        <a href="form_edit.php?id=<?=$row['id_145']?>" class="btn btn-warning"> Edit</a> 
                        <a href="delete.php?id=<?=$row['id_145']?>" class="btn btn-danger"> Delete</a>
                    </td>
                </tr>
                <?php }
                ?> 
            </table> 
        </div>
    </div>
</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>