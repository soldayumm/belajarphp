<?php

$connect = mysqli_connect("localhost", "root", "", "belajarphp");

$getData = mysqli_query($connect, "SELECT * FROM mahasiswa");
