<?php

include ("../config.php");

if(isset($_POST['daftar'])){

    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];

    $insert_data = "INSERT INTO calon_siswa (nama, jenis_kelamin, alamat, jurusan) VALUE ('$nama', '$jk', '$alamat', '$jurusan')";
    $query_insert_data = mysqli_query($dbPPDB_SMA_Garuda, $insert_data);

    if($query_insert_data){
        header ('Location: ../index.php?status=sukses');
    }
    else{
        header ('Location: ../index.php?status=gagal');
    }

}
else{
    die ("akses dilarang");
}

?>