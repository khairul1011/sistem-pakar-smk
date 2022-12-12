<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="image/smk.png">
	<title>solusi</title>
</head>
<body>

	 <main class="batas-atas">
        <div class="card text-white bg-primary mb-3">
          <h5 class="card-header" align="center">Jawaban</h5>
          <div class="card-body text-center ukuran-30">

                <?php
                include ('koneksi.php');
                    session_start();
                    if(isset($_GET['kode'])){
                        $kode=$_GET['kode'];
                    }  

                  

                $cek = "SELECT * from tb_jawaban WHERE kode_jawaban='$kode'";
                $cekkolom = mysqli_query($c,$cek);
                $row = mysqli_fetch_assoc($cekkolom);

                ?>
              
 
               <p>Kamu cocok masuk ke jurusan:<?php echo $row ['jawaban'];
               ?></p>

            
            <br>
            <div class="text-center">
              <?php 
              include "fungsi.php";
                 jawaban($kode);
               ?>
              <a style="margin-bottom: 10px;" href="hapus-session.php?jurusan=<?php echo $row ['jawaban'];?>" class="btn btn-danger btn btn-outline-light col-sm-2">Akhiri</a>
            </div>
          </div>
          
        </div>
    </main>
</body>
</html>