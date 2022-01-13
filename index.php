<?php
require_once("DB.php");
?>
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

        <a href="./insert.php" class="btn btn-success">Tambah Data</a>

        <table class="table table-sm table-hover mt-3">
          <thead>
            <tr>
              <th>#</th>
              <th>NPM</th>
              <th>Nama</th>
              <th colspan="2" class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($getData as $key => $data) { ?>
              <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $data['npm'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td class="text-center"><a href="./edit.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-warning">Edit</a></td>
                <td class="text-center"><a href="./delete.php?id=<?= $data['id'] ?>&&delete=true" class="btn btn-sm btn-danger">Hapus</a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>