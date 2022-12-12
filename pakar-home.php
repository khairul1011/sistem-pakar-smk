<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/icon.png">

    <title>Dashboard Pakar</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-dark fixed-top bg-info flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Dashboard Pakar</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="proseslogout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <?php include 'pakar-sidebar.php';?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
          </div>
          <h4>Data Siswa</h4>
        <table class="table">
          <?php 
          include 'koneksi.php';
          $get=mysqli_query($c,"SELECT * FROM pilihanjurusan order by id_pilihan");
          $i = 1; 
           ?>
           
  <thead>
    <tr>
    <th>No</th>  
    <th>Nama</th>
    <th>Umur</th>
    <th>Asal Sekolah</th>
    <th>Pilihan Jurusan</th>
    <th>waktu</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    while ($data=mysqli_fetch_array($get)) { 
             
     ?>
    <tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['umur']; ?></td>
    <td><?php echo $data['asal_sekolah']; ?></td>
    <td><?php echo $data['jurusan']; ?></td>
    <td><?php echo $data['waktu']; ?></td>

    </tr>
    <?php 
}
 ?>
  </tbody>

  <tfoot>
      
  </tfoot>
</table>

        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>    
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
  </body>
</html>

<?php
include "koneksi.php";
if (!empty($_POST['simpan1'])){
	$fakta= $_POST['fakta'];
	$solusi=$_POST['solusi'];
  $oleh="pakar";
  $status="setuju";

    $sql1 = "INSERT INTO tb_kesimpulan (solusi, fakta, oleh, status) VALUES ('$solusi', '$fakta', '$oleh', '$status')";
    if (mysqli_query($connect,$sql1)){
    	echo "<script>alert('Berhasil memasukan kesimpulan baru!'); window.location=('pakar-home.php');</script>";
	//echo "<script type='text/javascript'>window.location.replace('pakar-mode.php');</script>";
  }
}
?>