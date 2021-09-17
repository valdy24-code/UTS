<?php

//========================== Routes Siswa ==========================//

include('csrf.php');

include '../controllers/controller_siswa.php';
$db = new controller_siswa();
$function = $_GET['function'];

if($function == "create_siswa"){
    if(validation()==true){
        $db->POSTData(
            $_POST['nisn'],
            $_POST['nis'],
            $_POST['nama'],
            $_POST['id_kelas'],
            $_POST['alamat'],
            $_POST['no_telp'],
            $_POST['id_spp']
        );
    }
    header("location:../views/view_siswa.php");
}
elseif($function == 'update_siswa'){
    if(validation()==true){
        $db->PUTData(
            $_POST['nisn'],
            $_POST['nis'],
            $_POST['nama'],
            $_POST['id_kelas'],
            $_POST['alamat'],
            $_POST['no_telp'],
            $_POST['id_spp']
        );
    }
    header("location:../views/view_siswa.php");
}
elseif($function == "delete_siswa"){
    $db->DELETEData($_GET['nisn']);
    header("location:../views/view_siswa.php");
}

    //========================== Routes SPP ==========================//

include '../controllers/controller_spp.php';
$db = new controller_spp();
$function = $_GET['function'];

if($function == "create_spp"){
    if(validation()==true){
        $db->POSTData(
            $_POST['id_spp'],
            $_POST['tahun'],
            $_POST['nominal']
        );
    }
    header("location:../views/view_spp.php");
}
elseif($function == "update_spp"){
    if(validation()==true){
        $db->PUTData(
            $_POST['id_spp'],
            $_POST['tahun'],
            $_POST['nominal']
        );
    }
    header("location:../views/view_spp.php");
}
elseif($function == "delete_spp"){
    $db->DELETEData($_GET['id_spp']);
    header("location:../views/view_spp.php");
    }

    //========================== Routes Kelas ==========================//

include '../controllers/controller_kelas.php';
$db = new controller_kelas();
$function = $_GET['function'];

if($function == "create_kelas"){
    if(validation()==true){
        $db->POSTData(
            $_POST['id_kelas'],
            $_POST['nama_kelas'],
            $_POST['kompetensi_keahlian']
        );
    }
    header("location:../views/view_kelas.php");
}
elseif($function == "update_kelas"){
    if(validation()==true){
        $db->PUTData(
            $_POST['id_kelas'],
            $_POST['nama_kelas'],
            $_POST['kompetensi_keahlian']
        );
    }
    header("location:../views/view_kelas.php");
}
elseif($function == "delete_kelas"){
    $db->DELETEData($_GET['id_kelas']);
    header("location:../views/view_kelas.php");
    }

        //========================== Routes Pembayaran ==========================//

include '../controllers/controller_pembayaran.php';
$db = new controller_pembayaran();
$function = $_GET['function'];

if($function == "create_pembayaran"){
    if(validation()==true){
        $db->POSTData(
            $_POST['id_pembayaran'],
            $_POST['id_petugas'],
            $_POST['nisn'],
            $_POST['tgl_bayar'],
            $_POST['bulan_bayar'],
            $_POST['tahun_bayar'],
            $_POST['id_spp'],
            $_POST['jumlah_bayar']
        );
    }
    header("location:../views/view_pembayaran.php");
}
elseif($function == "update_pembayaran"){
    if(validation()==true){
        $db->PUTData(
            $_POST['id_pembayaran'],
            $_POST['id_petugas'],
            $_POST['nisn'],
            $_POST['tgl_bayar'],
            $_POST['bulan_bayar'],
            $_POST['tahun_bayar'],
            $_POST['id_spp'],
            $_POST['jumlah_bayar']
        );
    }
    header("location:../views/view_pembayaran.php");
}
elseif($function == "delete_pembayaran"){
    $db->DELETEData($_GET['id_pembayaran']);
    header("location:../views/view_pembayaran.php");
    }    

            //========================== Routes Petugas ==========================//

include '../controllers/controller_petugas.php';
$db = new controller_petugas();
$function = $_GET['function'];

if($function == "create_petugas"){
    if(validation()==true){
        $db->POSTData(
            $_POST['id_petugas'],
            $_POST['username'],
            $_POST['password'],
            $_POST['nama_petugas'],
            $_POST['level']
        );
    }
    header("location:../views/view_petugas.php");
}
elseif($function == "update_petugas"){
    if(validation()==true){
        $db->PUTData(
            $_POST['id_petugas'],
            $_POST['username'],
            $_POST['password'],
            $_POST['nama_petugas'],
            $_POST['level']
        );
    }
    header("location:../views/view_petugas.php");
}
elseif($function == "delete_petugas"){
    $db->DELETEData($_GET['id_petugas']);
    header("location:../views/view_petugas.php");
    }    
?>