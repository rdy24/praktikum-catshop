<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Categories</title>
    <link rel="stylesheet" href="../css/admin.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <div class="sidebar">
        <a href="../admin.php">Home</a>
        <a href="categories.php">Categories</a>
        <a href="../transaction/transaction.php">Transaction</a>
      </div>

      <div class="right_content">
        <div class="navbar">
          <img src="../assets/logo.png" alt="" />
          <button class="btn">
            <a href="../logout.php">Logout</a>
          </button>
        </div>
        <div class="content">
          <h3>Categories</h3>
          <button type="button" class="btn btn-tambah">
            <a href="categories-entry.html">Tambah Data</a>
          </button>
          <button type="button" class="btn">
            <a href="categories-cetak.php">Cetak</a>
          </button>
          <table class="table-data">
            <thead>
              <tr>
                <th style="width: 30%">Photo</th>
                <th>Categories</th>
                <th style="width: 20%">Price</th>
                <th style="width: 30%">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                include '../koneksi.php';
                $sql = "SELECT * FROM tb_categories";
                $result = mysqli_query($koneksi, $sql);
                while($data = mysqli_fetch_assoc($result)) {
                  echo "
                    <tr>
                      <td>
                        <img src='../img_categories/$data[photo]' width='200px'>
                      </td>
                      <td>$data[categories]</td>
                      <td>$data[price]</td>
                      <td>
                        <a href=categories-edit.php?id=$data[id]>Edit</a> | 
                        <a href=categories-hapus.php?id=$data[id]>Hapus</a>
                      </td>
                    </tr>
                  ";
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
