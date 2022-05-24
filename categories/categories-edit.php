<?php 
  include '../koneksi.php';
  $id = $_GET['id'];
  if(!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'categories.php';
      </script>
    ";
  }

  $sql = "SELECT * FROM tb_categories WHERE id = '$id'";
  $result = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Categories Edit</title>
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
          <h3>Edit Categories</h3>
          <div class="form-login">
            <form
              action="categories-proses.php"
              method="post"
              enctype="multipart/form-data"
            >
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <input type="hidden" name="photoLama" value="<?= $data['photo'] ?>">
              <label for="categories">Categories</label>
              <input
                class="input"
                type="text"
                name="categories"
                id="categories"
                placeholder="Categories"
                value="<?= $data['categories'] ?>"
              />

              <label for="categories">Price</label>
              <input
                class="input"
                type="text"
                name="price"
                id="price"
                placeholder="Price"
                value="<?= $data['price']?>"
              />

              <label for="photo">Photo</label>
              <img src="../img_categories/<?= $data['photo'] ?>" alt="">
              <input
                type="file"
                name="photo"
                id="photo"
                style="margin-bottom: 20px"
              />

              <button type="submit" class="btn btn-simpan" name="edit">
                Simpan
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
