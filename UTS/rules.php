<?php
session_start();
$nama = $_SESSION['nama'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rules</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js""></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <h1 class="display-1">Hallo <?php echo $nama ?>...</h1>
        <h4 class="display-5">Berikut beberapa ketentuan dari game penjumlahan ini : </h4>
        <h4 class="display-5"><font color="blue">~Kamu dibekali 5 nyawa (lives)</font></h4>
        <h4 class="display-5"><font color="blue">~Bila kamu menjawab soal dengan benar, maka skor mu bertambah 10</font></h4>
        <h4 class="display-5"><font color="blue">~Bila kamu menjawab soal namun salah, maka skor mu berkurang 2</font></h4>
        <h4 class="display-5"><font color="blue">~Bila kamu menjawab soal namun salah, maka lives mu berkurang 1</font></h4>
        <h4 class="display-5"><font color="blue">~Bila lives mu sudah habis, maka game akan berakhir</font></h4>
        <h5 class="display-5">-------------------------------------------------------------------------------------------</h5>
        <a href="index.php" class="btn btn-danger">Kembali</a>
        <a href="mulaigame.php" class="btn btn-primary">Langsung mulai</a>
    </div>
</body>
</html>