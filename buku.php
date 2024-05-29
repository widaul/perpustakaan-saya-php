<?php
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM buku" );


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title> Daftar Buku </title>
</head>
<body>

<div class="container w-75">

    <h1 class="my-4" >Daftar Buku</h1>


    <table class="table">
        <thead>
            <tr>
            <th scope="col">Nama</th>
            <th scope="col">ISBN</th>
            <th scope="col">Unit</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php  foreach ($query as $buku) { ?>
            <tr>
                <td> <?php  echo $buku["nama"]  ?></td>
                <td> <?php  echo $buku["isbn"]  ?></td>
                <td> <?php  echo $buku["unit"]  ?></td>
                <td> 
                    <a class="btn btn-warning" href="editBuku.php?id=<?php echo $buku['id']; ?>">EDIT</a> |
                    <a class="btn btn-danger" href="hapusBuku.php?id=<?php echo $buku['id']; ?>">HAPUS</a>
                </td>

            </tr>
        <?php  } ?>
            
        </tbody>
</table>


    <br>
        <a  class="btn btn-primary" href="tambahBuku.php"> Tambah Data Buku </a>
        <a  class="btn btn-success" href="index.php"> Kembali ke Halaman Utama </a>

    </div>
</body>
</html>