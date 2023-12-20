<?php
    require_once 'dbkoneksi.php';// konsep MVC. INI adalah Models
    require_once 'class_produk.php';// ini adalah Controller

    $objproduk = new Produk($dbh);
    $rsproduk = $objproduk->getAllProduk();
    // ini adalah View
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h3 {
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #e0e0e0;
        }

        button.edit-button {
        display: inline-block;
        padding: 10px;
        background-color: #4CAF50; /* Warna untuk tombol Edit */
        color: white;
        text-decoration: none;
        border: none;
        border-radius:10px;
        cursor: pointer;
        margin-right: 5px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            text-decoration: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        button.del-button {
        display: inline-block;
        padding: 10px;
        background-color: #ff3333; /* Warna untuk tombol Del */
        color: white;
        text-decoration: none;
        border: none;
        border-radius:10px;
        cursor: pointer;
        margin-right: 5px;
        }

        button.edit-button:hover {
        background-color: #45a049;
        }

        button.del-button:hover {
        background-color: #ff6666;
        }
    </style>
</head>
<body>


    <h3>Daftar Produk</h3>
    <button onclick="window.location.href='tambah.php'">Tambah Data Barang</button>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $nomor =1;
                foreach($rsproduk as $row){
                    echo '<tr><td>'.$nomor.'</td>
                    <td>'.$row->nama.'</td>
                    <td>'.$row->qty.'</td>
                    <td>'.$row->harga.'</td>
                    <td align="center">
                        <button class="edit-button" onclick="window.location.href=\'edit.php?id='.$row->id.'\'">Edit</button>||
                        <button class="del-button" onclick="window.location.href=\'delete.php?id='.$row->id.'\'">Del</button>
                    </td></tr>';
                    $nomor++;
                }
            ?>
        </tbody>
    </table>


</body>
</html>

