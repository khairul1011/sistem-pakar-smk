<?php 

function answer ($kode){

	 if($kode=='u-1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='soal.php?kode=pu-1'>Ya</a>";
        //echo "<a class='btn col-sm-2 mrg btn-lg btn-outline-light' href='soal.php?kode=b-1'>Mungkin Iya</a>";
        //echo "<a class='btn col-sm-2 mrg btn-lg btn-outline-light' href='soal.php?kode=b-1'>Mungkin tidak</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=b-1'>Tidak</a>";
		}
	if($kode=='b-1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='soal.php?kode=pu-1'>Ya</a>";
        echo "<a class='btn col-sm-2 mrg btn-lg btn-outline-lightbtn btn-warning' href='soal.php?kode=bs-1'>Mungkin </a>";
        //echo "<a class='btn col-sm-2 mrg btn-lg btn-outline-light' href='soal.php?kode=bs-2'>Mungkin tidak</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=pu-1'>Tidak</a>";
		}		
	if($kode=='b-2'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='index.php'>akhiri</a>";
		}
	if($kode=='bs-1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='soal.php?kode=m'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=pu-1'>Tidak</a>";
		}		
	if($kode=='bs-3'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='soal.php?kode='>Ya</a>";
        echo "<a class='btn col-sm-2 mrg btn-lg btn-outline-light' href='soal.php?kode='>Mungkin Iya</a>";
        echo "<a class='btn col-sm-2 mrg btn-lg btn-outline-light' href='soal.php?kode='>Mungkin tidak</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='soal.php?kode=tm'>Tidak</a>";
		}	
	if($kode=='tm'){
        echo "<a class='btn col-sm-2 mrg btn-lg btn-outline-light' href='index.php?'>Akhiri</a>";
		}						
	if($kode=='m'){
        echo "<a class='btn col-sm-2 mrg btn-lg btn-outline-light btn btn-success' href='soal.php?kode=p-1'>Lanjutkan</a>";
		}	
	if($kode=='pu-1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='soal.php?kode=p-1'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=p-2'>Tidak</a>";
		}
	if($kode=='pu-2'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='soal.php?kode=p-5'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=pu-3'>Tidak</a>";
		}	
	if($kode=='pu-3'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='solusi.php?kode=j-8'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=pu-4'>Tidak</a>";
		}	
	if($kode=='pu-4'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='solusi.php?kode=j-9'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=pu-5'>Tidak</a>";
		}	
	if($kode=='pu-5'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='solusi.php?kode=j-10'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=b-2'>Tidak</a>";
		}	
	//multimedia
	if($kode=='p-1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='soal.php?kode=p-1-1'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=p-1-1'>Tidak</a>";
		}
	if($kode=='p-1-1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='soal.php?kode=p-1-2'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=p-1-2'>Tidak</a>";
		}
	if($kode=='p-1-2'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='solusi.php?kode=j-1'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=p-2'>Tidak</a>";
		}	

		//rpl		
	if($kode=='p-2'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='soal.php?kode=p-2-1'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=p-2-1'>Tidak</a>";
		}
	if($kode=='p-2-1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='soal.php?kode=p-2-2'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=p-2-2'>Tidak</a>";
		}	
	if($kode=='p-2-2'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='solusi.php?kode=j-2'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=p-3'>Tidak</a>";
		}
		//tkj	
	if($kode=='p-3'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='soal.php?kode=p-3-1'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=p-3-1'>Tidak</a>";
		}	
	if($kode=='p-3-1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='soal.php?kode=p-3-2'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=p-3-2'>Tidak</a>";
		}	
	if($kode=='p-3-2'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='solusi.php?kode=j-3'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=p-4'>Tidak</a>";
		}	
		//av
	if($kode=='p-4'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='soal.php?kode=p-4-1'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=p-4-1'>Tidak</a>";
		}	
	if($kode=='p-4-1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='soal.php?kode=p-4-2'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=p-4-2'>Tidak</a>";
		}	
	if($kode=='p-4-2'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='solusi.php?kode=j-4'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=pu-2'>Tidak</a>";
		}	
		//sm
	if($kode=='p-5'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='soal.php?kode=p-5-1'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=p-5-1'>Tidak</a>";
		}
	if($kode=='p-5-1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='soal.php?kode=p-5-2'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=p-5-2'>Tidak</a>";
		}	
	if($kode=='p-5-2'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='solusi.php?kode=j-5'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=p-6'>Tidak</a>";
		}	

		//kr
	if($kode=='p-6'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='soal.php?kode=p-6-1'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=p-6-1'>Tidak</a>";
		}
	if($kode=='p-6-1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='soal.php?kode=p-6-2'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=p-6-2'>Tidak</a>";
		}	
	if($kode=='p-6-2'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='solusi.php?kode=j-6'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=p-7'>Tidak</a>";
		}	
		//tp
	if($kode=='p-7'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='soal.php?kode=p-7-1'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=p-7-1'>Tidak</a>";
		}
	if($kode=='p-7-1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='soal.php?kode=p-7-2'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=p-7-2'>Tidak</a>";
		}	
	if($kode=='p-7-2'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-success' href='solusi.php?kode=j-7'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light btn btn-danger' href='soal.php?kode=pu-3'>Tidak</a>";
		}							


}

function jawaban($kode) {
	if ($kode=='j-1') {
        echo "<a style='margin-bottom: 10px;'' class='btn btn-success btn btn-outline-light col-sm-2' href='soal.php?kode=p-2'>Coba Pertanyaan Lain </a>";
	}
	if ($kode=='j-2') {
        echo "<a style='margin-bottom: 10px;'' class='btn btn-success btn btn-outline-light col-sm-2' href='soal.php?kode=p-3'>Coba Pertanyaan Lain </a>";
	}
	if ($kode=='j-3') {
        echo "<a style='margin-bottom: 10px;'' class='btn btn-success btn btn-outline-light col-sm-2' href='soal.php?kode=p-4'>Coba Pertanyaan Lain </a>";
	}
	if ($kode=='j-4') {
        echo "<a style='margin-bottom: 10px;'' class='btn btn-success btn btn-outline-light col-sm-2' href='soal.php?kode=p-5'>Coba Pertanyaan Lain </a>";
	}
	if ($kode=='j-5') {
        echo "<a style='margin-bottom: 10px;'' class='btn btn-success btn btn-outline-light col-sm-2' href='soal.php?kode=p-6'>Coba Pertanyaan Lain </a>";
	}
	if ($kode=='j-6') {
        echo "<a style='margin-bottom: 10px;'' class='btn btn-success btn btn-outline-light col-sm-2' href='soal.php?kode=pu-3'>Coba Pertanyaan Lain </a>";
	}
	if ($kode=='j-7') {
        echo "<a style='margin-bottom: 10px;'' class='btn btn-success btn btn-outline-light col-sm-2' href='soal.php?kode=pu-4'>Coba Pertanyaan Lain </a>";
	}
	if ($kode=='j-8') {
       // echo "<a style='margin-bottom: 10px;'' class='btn btn-success btn btn-outline-light col-sm-2' href='soal.php?kode=p-9'>Coba Pertanyaan Lain </a>";
	}
	if ($kode=='j-9') {
       // echo "<a style='margin-bottom: 10px;'' class='btn btn-success btn btn-outline-light col-sm-2' href='soal.php?kode=p-10'>Coba Pertanyaan Lain </a>";

	}
	if ($kode=='j-10') {
	}
}	
 ?> 

