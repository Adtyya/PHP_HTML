<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<?php 

if (isset($_POST['submit'])){
    $nama_barang = $_POST['barang'];
    $j_barang = $_POST['j-barang'];
    $username = $_POST['username'];
    $password = $_POST['password'];

}

    



?>
<div class="container">

    <div class="row d-flex justify-content-center">
    
        <div class="col col-8">
            <h4>Nama Barang = <?= $nama_barang ?></h4>
            <h4>Jumlah Barang = <?= $j_barang ?></h4>
            <h4>Username = <?= $username ?></h4>
            <h4>password = <?= $password ?></h4>
        </div>

    </div>

</div>    
</body>
</html>