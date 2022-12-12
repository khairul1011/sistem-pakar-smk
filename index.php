<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="website sistem pakar">
    <meta name="author" content="mr k">
    <link rel="icon" href="image/smk.png">

    <title>Sistem Pakar</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
</head>
<body>
	<?php
		include ('navbar.php');
	?>
    
  
    <main role="main">
        <!-- Carousel -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="image/bg-1.gif" alt="First slide">
             <img src="image/jurusan.png" width="140" height="270" style="margin-left: 80px; margin-top:20px;">
              <img src="image/smk.png" width="190" height="220" align="right" style="margin-top: 40px; margin-left: 1100px;">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>SELAMAT DATANG</h1>
                <h1>Silakan Klick Tombol Mulai </h1>
                <p><button type="button" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="image/bg-3.jpeg" alt="Second slide">
           <img src="image/jurusan.png" width="140" height="270" style="margin-left: 80px; margin-top:20px;">
              <img src="image/smk.png" width="190" height="220" align="right" style="margin-top: 40px; margin-left: 1100px;">
            <div class="container">
              <div class="carousel-caption">
                <h1>UJI KEMAMPUANMU.</h1>
                <p>Aplikasi Ini Di Buat Untuk Memudahkan Anda Memilih Juruasan Yang Ada Di SMKN 1 BANGKINANG. </p>
                <p><button type="button" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="image/bg-2.jpg" alt="Third slide">
              <img src="image/jurusan.png" width="140" height="270" style="margin-left: 80px; margin-top:20px;">
              <img src="image/smk.png" width="190" height="220" align="right" style="margin-top: 40px; margin-left: 1100px;">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><button type="button" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> <!-- Carousel -->

     
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Identitas User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="simpan-session.php" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nama :</label>
                  <input type="text" name="nama" class="form-control" id="input-ame" placeholder="isikan nama anda" required autofocus >
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Umur :</label>
                  <input type="number" name="umur" class="form-control col-sm-8" placeholder="isikan umur anda" required >
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Asal Sekolah :</label>
                  <input type="text" name="asal_sekolah" class="form-control" id="input-ame" placeholder="isikan asal sekolah anda" required autofocus >
                </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Lanjut </button>
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>






      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
       
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="image/pakranto.jpeg" alt="Generic placeholder image" width="140" height="140" data-tilt data-tilt-scale="1.5" >
            <h2>PARSAORAN SITOHANG ST,M.Kom</h2>
            <p>Kepala Jurusan</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="image/pakilham.jpeg" alt="Generic placeholder image" width="140" height="140" data-tilt data-tilt-scale="1.5">
            <h2>ILHAM FITRA S.Kom,M.Kom</h2>
            <p>Guru Pembimbing</p>
            
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="image/khairul.jpeg" alt="Generic placeholder image" width="140" height="140" data-tilt data-tilt-scale="1.5">
            <h2>KHAIRUL ANUAR</h2>
            <p>Aplication Designer</p>
           
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="image/ferdi.jpeg" alt="Generic placeholder image" width="140" height="140" data-tilt data-tilt-scale="1.5">
            <h2>FERDI PRATAMA SETIA</h2>
            <p>Database Management</p>
            
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="image/abdi.jpeg" alt="Generic placeholder image" width="140" height="140" data-tilt data-tilt-scale="1.5">
            <h2>ABDI WIRA SYAHPUTRA</h2>
            <p>Web Designer</p>
            
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->



    </main>

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="vanilla-tilt.min.js"></script>

</html>