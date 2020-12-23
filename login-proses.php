<?php
   session_start();
   require_once("koneksi.php");
   $idkaryawan = $_POST['idkaryawan'];
   $pass = $_POST['password'];
   $tampil = "SELECT * FROM tb_user WHERE Id_karyawan ='$idkaryawan' ";
   $cekuser = mysqli_query($conn, $tampil);
   $array = mysqli_fetch_array($cekuser);
   if(mysqli_num_rows($cekuser) == 0) {
     echo "<div align='center'>idkaryawan Belum Terdaftar! <a href='index.php'>Back</a></div>";
   } else {
	 if($pass <> $array['pass']) {
	   echo "<div align='center'>Password salah!<a href='index.php'>Back</a></div>";


     } else {
       $_SESSION['idkaryawan'] = $array['Id_karyawan'];
       $_SESSION['departement'] = $array['departement'];
       if($array['departement']=="Administrator"){
         $_SESSION["admin"] = true;
            header("location:production/daftarmaterial.php");
        }
        else if($array['departement']=="QC"){
          $_SESSION["QC"] = true;
            header("location:qc/daftarkedatangan-qc.php");
        }
        else if($array['departement']=="Warehouse"){
          $_SESSION["Warehouse"] = true;
            header("location:warehouse/formulir.php");
        }
      }
   }
?>