<?php

session_start();

$nama = $_SESSION['nama'];
$lives = $_SESSION['lives'];
$skor = $_SESSION['skor'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permainan Selesai</title>

    <!-- Link & Scripts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js""></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container pt-4">
        <h1>Hallo <?php echo $nama ?>, Permainan telah selesai</h1>
        <h1>Nilai akhir anda : <?php echo $skor ?></h1>
        
        <a href="ulang.php" class="btn btn-primary">Main Lagi</a>
        <a href="login.php" class="btn btn-danger">Keluar</a>
    </div>
</body>

<body>
    <div class="container pt-4">
        <br>
                <php
                setcookie('skor', $_SESSION['skor']);
                include 'koneksi.php';
				$query=mysqli_query($conn, "insert into skor set nama='".$_SESSION['nama']."', email='".$_SESSION['email']."', skor='".$_SESSION['skor']."'");
		        ?>
				<br>
				<h1>HALL OF FAME</h1>
				<div class="container pt-4">
				<table class='table table-dark'>
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>Email</td>
                            <td>Skor</td>
                        </tr>
                    </thead>
                    <tbody>
				        <?php
					        $result=mysqli_query($conn, "SELECT * FROM skor ORDER BY skor DESC");
					        $no=1;
					        foreach ($result as $row) {
					  	    echo "<tr align=center>
					  	    <td>" .$no. "</td>
					  	    <td>" .$row['nama'] . "</td>
					  	    <td>" .$row['skor']. "</td>
					  	    </tr>";
					  	    $no++;
					  	        if ($no>10){
					  		break;
					  	            }
					            }
				        ?>
        
            </tbody>
        </table>
        </hr>
    </div>
</body>

</html>