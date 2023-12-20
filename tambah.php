<?php 
require_once 'functions.php';
// cek apakah tombol submit sudah di tekan atau belum
if( isset($_POST["submit"]) ) {
    
    // cek apakah data berhasil di tambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'list_produk.php'
        </script>";
    } else {
        echo "<script>
        alert('data gagal ditambahkan');
        document.location.href = 'list_produk.php'
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style>
        body {
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            margin-top: 50px;
        }
        button[type="submit"] {
            background-color: #39A7FF;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #87C4FF;
        }
    </style>
</head>

<body>
    <div class="container mt-5" >
    <form class="form-horizontal mx-auto" method="post">
    <fieldset>
    <legend class="text-center">Tambah Data Barang</legend>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Produk</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-credit-card-alt"></i>
          </div>
        </div> 
        <input name="nama" id="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="qty" class="col-4 col-form-label">Stok</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="qty" name="qty" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="harga" class="col-4 col-form-label">Harga Barang</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-money"></i>
          </div>
        </div> 
        <input id="harga" name="harga" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <button type="submit" name="submit">Simpan</button>
      </div>
  </div>
    </fieldset>
</form>
    </div>
    </body>

</html>