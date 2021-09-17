<?php

// Class pegawai (CRUD pegawai)
class controller_kelas{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

     var $MKelas;

     var $id_kelas;
     var $nama_kelas;
     var $kompetensi_keahlian;
     

     // Method main variabel
        function __construct()
        {
            // Membuat Object dari Class Module pegawai
            include '../model/model_kelas.php';
            $this->MKelas = new model_kelas();
        }




    // Method untuk memasukan data ke dalam table
    function POSTData ($id_kelas, $nama_kelas, $kompetensi_keahlian){

        // perintah POST data
        $this->MKelas->POST($id_kelas, $nama_kelas, $kompetensi_keahlian);

    }



    
    // Method untuk mengambil semua data dari table
    function GetData_All(){

        // perintah GET data
        return $this->MKelas->GET();
        

    }
    function ComboBOX(){

        // perintah GET data
        return $this->MKelas->COM();
        

    }

    // Method untuk mengambil data seleksi dari table
    function GetData_Where ($id_kelas){

        // perintah GET data
        return $this->MKelas->GET_Where($id_kelas);
    }




    // Method untuk memasukan data ke dalam table
    function PUTData ($id_kelas, $nama_kelas, $kompetensi_keahlian){

        // perintah PUT data
        $this->MKelas->PUT($id_kelas, $nama_kelas, $kompetensi_keahlian);

    }




    // Method untuk menghapus data dari table
    function DELETEData ($id_kelas){

        // perintah DELETE data
        $this->MKelas->DELETE($id_kelas);

    }


 


}


?>