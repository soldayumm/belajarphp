<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Belajar</title>
</head>

<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg">

        <form method="POST" action="insert.php">
          <div class="mb-3">
            <label for="npm" class="form-label">NPM</label>
            <input type="text" class="form-control" id="npm" name="npm">
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <input type="submit" name="submit-insert" value="Submit" class="btn btn-success">
          <a href="./index.php" class="btn btn-danger">Cancel</a>
        </form>

        <?php
        if (isset($_POST['submit-insert'])) {
          include("DB.php");
          $npm = $_POST['npm'];
          $nama = $_POST['nama'];
          $result = mysqli_query($connect, "INSERT INTO mahasiswa (id, npm, nama) VALUES (null, '$npm', '$nama')");
          header('Location:index.php');
          exit();
        }
        ?>

      </div>
    </div>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>