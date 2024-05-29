<?php
    include_once("./connect.php");

    if (isset($_POST["submit"])) {
        $nama = $_POST["nama"];
        $telp = $_POST["telp"];
        $email = $_POST["email"];

        $query = mysqli_query($db, "INSERT INTO staff VALUES (
            NULL, '$nama', '$telp', '$email'
        )" );
    }
        
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title> Form Tambah Staff </title>
</head>
<body>


<div class="container w-75">
    <h2 class= "my-4" > Form Tambah Data Staff </h2>

    <form action="" method="post">
   
    <div class="mb-3">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama">

  </div>
  
    <div class="mb-3">
        <label for="telp">No Telepon</label>
        <input type="number" class="form-control" id="telp" name="telp">
    </div>

    <div class="mb-3">
        <label for="email"> Email </label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
 
       <button type="submit" class="btn btn-primary"> Submit </button>
</form>


    <br>
        <a class="btn btn-warning" href="staff.php"> Kembali ke Data Staff</a>
        <a class="btn btn-success" href="index.php"> Kembali ke Halaman Utama </a>

</body>
</html>