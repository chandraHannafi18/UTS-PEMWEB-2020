<?php

$koneksi = mysqli_connect('localhost', 'root', 'root', '');
if(!$koneksi){
    echo "err : " . mysqli_error($koneksi);
}