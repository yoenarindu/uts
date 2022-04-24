<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
<h1 class="text-center">Form Tambah</h1>
    <div class="card mt-3">
        <div class="card-header bg-primary text-white">
        Form Tambah
        </div>
        <div class="card-body">
            <form method="post" action="action.php">
                <div class="form-group">
                    <label>Nama 145 </label>
                    <input type="text" name="nama_145" class="form-control" placeholder="Input Nama"  required>
                </div>
                <div class="form-group">
                    <label>Email 145 </label>
                    <input type="text"  name="email_145" class="form-control" placeholder="Input email"  required>
                </div>
                <div class="form-group">
                    <label>Alamat </label>
                    <input type="text" name="alamat_145" class="form-control" placeholder="Alamat"  required>
                </div>
                <br>
                <button type="submit" class="btn btn-success" name="kirim">Tambah</button>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

