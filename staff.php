<?php
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM staff" );


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title> Daftar Staff </title>
</head>
<body>


<div class="container w-75">

<h1 class="my-4" >Daftar Staff</h1>


<table class="table">
    <thead>
        <tr>
        <th scope="col">Nama</th>
        <th scope="col">No Telepon </th>
        <th scope="col">Email </th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php  foreach ($query as $staff) { ?>
            <tr>
                <td> <?php  echo $staff["nama"]  ?></td>
                <td> <?php  echo $staff["telp"]  ?></td>
                <td> <?php  echo $staff["email"]  ?></td>
                <td> 
                    <a href="editStaff.php?id=<?php echo $staff['id']; ?>">EDIT</a> |
                    <a href="hapusStaff.php?id=<?php echo $staff['id']; ?>">HAPUS</a>
                </td>

            </tr>
        <?php  } ?>
        
    </tbody>
</table>


<br>
    <a  class="btn btn-primary" href="tambahStaff.php"> Tambah Data Staff </a>
    <a  class="btn btn-success" href="index.php"> Kembali ke Halaman Utama </a>

</div>

</body>
</html>