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
    <div class="container">
    
<form action="action.php" method="POST">
    <div class="mb-3">
        <label for="barang" class="form-label">Nama Barang</label>
        <input name= "barang" type="barang" id="barang" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="j-barang" class="form-label">Jumlah Barang</label>
        <input name="j-barang" type="number" class="form-control" id="j-barang">
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">username</label>
        <input name="username" type="text" class="form-control" id="username">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="Password">
     </div>
    <div class="mb-3 form-check">
     <input type="checkbox" class="form-check-input" id="Check1">
     <label class="form-check-label" for="Check1">Saya bukan robot</label>
    </div>
         <button name="submit" type="submit" class="btn btn-primary">Submit</button>
 </form>

    </div>
</body>
</html>