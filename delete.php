<?php
include("DB.php");

if ($_GET['delete'] == true) {
  $id = $_GET['id'];
  $result = mysqli_query($connect, "DELETE FROM mahasiswa WHERE id=$id");
  header('Location:index.php');
}
