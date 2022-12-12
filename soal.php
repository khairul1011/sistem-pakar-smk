<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="image/smk.png">
    
	<title>simtem pakar</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	 <main class="batas-atas">
        <div class="card text-white bg-primary mb-3">
          <h5 class="card-header">Pertanyaan Umum</h5>
          <div class="card-body text-center ukuran-30">

            <form method="post" action="" enctype="multipart/form-data" role="form">

                <?php
                include ('koneksi.php');
                $kode='u-1';
              
               
                    
                    if(isset($_GET['kode'])){
                        $kode=$_GET['kode'];
                    }

                    $sql = "SELECT * from tb_pertanyaan WHERE kode_pertanyaan='$kode'";
                    $data = mysqli_query($c,$sql);
                    $row = mysqli_fetch_assoc($data);     
                ?>
                
                <label for="exampleFormControlInput1"><?php echo $row['jawaban_pertanyaan']; ?></label>
                
                <br>
                <br>
                
                <div class="option">
                    <?php 
                        include "fungsi.php";
                        answer($kode);                    
                    ?>
                    
                    
                </div>
                

            </form>

          </div>
        </div>
    



    </main>
</body>
</html>