<?php
session_start();

if(!isset($_SESSION['loggedin'])){
    header('Location: login.php');
}else{
    $nama = $_SESSION['nama'];
    $_SESSION['skor'] = 0;
    $_SESSION['lives'] = 5;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>

</head>

<body>
    <div class="container">
        <h1 class="display-1">Hallo <?php echo $nama ?>....</h1>
        <h1 class="display-5">Selamat datang di game penjumlahan sederhana</h1>
        <a href="mulaigame.php" class="btn btn-primary">Start</a>
        <a href="rules.php" class="btn btn-info">Rules</a>
        <a href="logout.php" class="btn btn-danger">Exit</a>
        <hr>
        <h2>Hall of Fame</h2>
        <table class='table table-dark'>
            <thead>
                <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Skor</td>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $q = mysqli_query($koneksi, "select * from hof order by skor desc limit 10");
                $no = 0;
                while($dt = mysqli_fetch_array($q)){
                    $no += 1;
                    echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>".$dt['nama']."</td>";
                    echo "<td>".$dt['email']."</td>";
                    echo "<td>".$dt['skor']."</td>";
                }
                ?>
            </tbody>
        </table>
        </hr>
    </div>

</body>

</html>