<?php
session_start();

$nama = $_SESSION['nama'];
$lives = $_SESSION['lives'];
$skor = $_SESSION['skor'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salah!</title>

    <!-- Link & Scripts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js""></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container pt-4">
        <h1>Hallo <?php echo $nama ?>, Jawabanmu Salah, Tetap Semangat dan Perhatikan Livesmu!!!</h1>
        <h1><font color="red">Lives : <?php echo $lives ?> | Score : <?php echo $skor ?></font></h1>
        <a href="mulaigame.php" class="btn btn-primary">Soal Selanjutnya</a>
    </div>
</body>

</html>