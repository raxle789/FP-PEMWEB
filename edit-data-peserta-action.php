<?php
    include_once('koneksi.php');
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $provinsi = $_POST['provinsi'];
    $kabupaten = $_POST['kabupaten'];
    $kecamatan = $_POST['kecamatan'];
    $desa = $_POST['desa'];
    $rerata = $_POST['rerata'];
    $target_dir_kk = 'files-kk/';
    $target_dir_ijazah = 'files-ijazah/';
    $target_dir_rapor = 'files-rapor/';
    $target_dir_foto = 'files-foto/';
    $filename_kk =  $nisn . '_kk.pdf';
    $filename_ijazah =  $nisn . '_ijazah.pdf';
    $filename_rapor = $nisn . '_rapor.pdf';
    $filename_foto = $nisn . '_foto.pdf';
    if(isset($_POST['edit-pendaftaran'])){
        if(move_uploaded_file($_FILES['kk']['tmp_name'], $target_dir_kk . $filename_kk)){
            // echo "File upload successful";
        } else {
            // echo "File upload error";
        }
    
        if(move_uploaded_file($_FILES['ijazah']['tmp_name'], $target_dir_ijazah . $filename_ijazah)){
            // echo "File upload successful";
        } else {
            // echo "File upload error";
        }
    
        if(move_uploaded_file($_FILES['rapor']['tmp_name'], $target_dir_rapor . $filename_rapor)){
            // echo "File upload successful";
        } else {
            // echo "File upload error";
        }
        
        if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_dir_foto . $filename_foto)){
            // echo "File upload successful";
        } else {
            // echo "File upload error";
        }
        $sql = "UPDATE data_pendaftar SET
        nisn = '$nisn',
        nama = '$nama',
        provinsi = '$provinsi',
        kabupaten = '$kabupaten',
        kecamatan = '$kecamatan',
        desa = '$desa',
        nama_file_kk = '$filename_kk',
        nama_file_ijazah = '$filename_ijazah',
        rerata = '$rerata',
        nama_file_rapor = '$filename_rapor'
        WHERE nisn = '$nisn'";
        $res = $mysqli->query($sql);
        if($res){
            // echo "Upload successful";
        } else {
            // echo "Upload error";
        }
        header("Location: cek-pendaftaran-admin.html");
    }

    if (isset($_GET['id'])) {
        $realNISN = $_GET['id'];
        $status = $_GET['status'];
        echo $realNISN;
        echo $status;
    }
        
    $fileStatus = $mysqli->query("SELECT * FROM data_pendaftar WHERE nisn='$realNISN'");
    $status_res = $fileStatus->fetch_assoc();
    $kk = $status_res['nama_file_kk'];
    $ijazah = $status_res['nama_file_ijazah'];
    $rapor = $status_res['nama_file_rapor'];
    $foto = $status_res['nama_file_foto'];

    if($status === 'hapus-kk'){
        if($mysqli->query("UPDATE data_pendaftar SET nama_file_kk = '' WHERE nisn='$realNISN'") === TRUE){
            // echo("Record updated");
            if(unlink('files-kk/'.$kk)){
                // echo("File deleted");
            }
        }
        // header('Location: cek-pendaftaran-admin.html');
    }
    if($status === 'hapus-ijazah'){
        if($mysqli->query("UPDATE data_pendaftar SET nama_file_ijazah = '' WHERE nisn='$realNISN'") === TRUE){
            // echo("Record updated");
            if(unlink('files-ijazah/'.$ijazah)){
                // echo("File deleted");
            };
        }
        // header('Location: cek-pendaftaran-admin.html');
    }
    if($status === 'hapus-rapor'){
        if($mysqli->query("UPDATE data_pendaftar SET nama_file_rapor = '' WHERE nisn='$realNISN'") === TRUE){
            // echo("Record updated");
            if(unlink('files-rapor/'.$rapor)){
                // echo("File deleted");
            };
        }
        // header('Location: cek-pendaftaran-admin.html');
    }
    if($status === 'hapus-foto'){
        if($mysqli->query("UPDATE data_pendaftar SET nama_file_foto = '' WHERE nisn='$realNISN'") === TRUE){
            // echo("Record updated");
            if(unlink('files-foto/'.$foto)){
                // echo("File deleted");
            };
        }
        
    }
    header('Location: cek-pendaftaran-admin.html');
?>