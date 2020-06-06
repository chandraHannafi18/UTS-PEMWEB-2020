<?php
session_start();

$nama = $_SESSION['nama'];
$lives = $_SESSION['lives'];
$skor = $_SESSION['skor'];

if($lives != 0){
    
    $a1 = rand(1,20);
    $a2 = rand(1,20);
    
    $_SESSION['hasil'] = $a1 + $a2;
}else{
    header('Location: gameover.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal</title>

    <!-- Link & Scripts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js""></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container pt-4">
        <h1>Hello <?php echo $nama ?>,You Can Do The Best!!!</h1>
        <h1></h1>
        <h1><font color ="green"> Lives : <?php echo $lives ?> | Score : <?php echo $skor ?></font></h1>
        <h2>Berapakah hasil dari...</h2><h2 class="display-4"><?php echo $a1; echo '+'; echo $a2 ?> </h2>
        <form action="cekjawaban.php" method="post">
            <input type="text" name="jawaban" class="form-control mb-3" placeholder="Masukkan jawaban..." autocomplete="off">
            <button type="submit" class="btn btn-primary" name="btnJawab">Submit</button>
        </form>
        <a href="gameover.php" class="btn btn-danger">Exit</a>
    </div>
</body>

</html>