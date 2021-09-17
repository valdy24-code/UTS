<?php

// Class pegawai (CRUD pegawai)
class controller_spp{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

     var $Mspp;

     var $id_spp;
     var $tahun;
     var $nominal;
     

     // Method main variabel
        function __construct()
        {
            // Membuat Object dari Class Module pegawai
            include '../model/model_spp.php';
            $this->Mspp = new model_spp();
        }




    // Method untuk memasukan data ke dalam table
    function POSTData ($id_spp,$tahun,$nominal){

        // perintah POST data
        $this->Mspp->POST($id_spp,$tahun,$nominal);

    }



    
    // Method untuk mengambil semua data dari table
    function GetData_All(){

        // perintah GET data
        return $this->Mspp->GET();
        

    }


    // Method untuk mengambil data seleksi dari table
    function GetData_Where ($id_spp){

        // perintah GET data
        return $this->Mspp->GET_Where($id_spp);
    }




    // Method untuk memasukan data ke dalam table
    function PUTData ($id_spp,$tahun,$nominal){

        // perintah PUT data
        $this->Mspp->PUT($id_spp,$tahun,$nominal);

    }




    // Method untuk menghapus data dari table
    function DELETEData ($id_spp){

        // perintah DELETE data
        $this->Msiswa->DELETE($id_spp);

    }


 


}


?>