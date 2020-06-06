<?php
session_start();

if(!isset($_SESSION['loggedin'])){
    header('Location: login.php');
}else{
    $nama = $_SESSION['nama'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home<?php echo $nama ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js""></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <h1 class="display-1">Hallo <?php echo $nama ?></h1>
        <h1 class="display-5">Selamat datang di kembali Game ini</h1>
        <a href="index.php" class="btn btn-primary">Mulai lagi</a>
        <a href="login.php" class="btn btn-danger">Bukan anda?</a>
    </div>
</body>
</html>