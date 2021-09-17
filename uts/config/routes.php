<?php

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


include '../controllers/controller_spp.php';
$db = new controller_spp();

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
elseif($function == "delete_siswa"){
    $db->DELETEData($_GET['nisn']);
    header("location:../views/view_spp.php");
    }
?>