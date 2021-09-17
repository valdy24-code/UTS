<?php

// Class pegawai (CRUD pegawai)
class controller_petugas{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

     var $MPetugas;

     var $id_petugas;
     var $username;
     var $password;
     var $nama_petugas;
     var $level;
     

     // Method main variabel
        function __construct()
        {
            // Membuat Object dari Class Module pegawai
            include '../model/model_petugas.php';
            $this->MPetugas = new model_petugas();
        }




    // Method untuk memasukan data ke dalam table
    function POSTData ($id_petugas,$username,$password,$nama_petugas,$level){

        // perintah POST data
        $this->MPetugas->POST($id_petugas,$username,$password,$nama_petugas,$level);

    }



    
    // Method untuk mengambil semua data dari table
    function GetData_All(){

        // perintah GET data
        return $this->MPetugas->GET();
        

    }


    // Method untuk mengambil data seleksi dari table
    function GetData_Where ($id_petugas){

        // perintah GET data
        return $this->MPetugas->GET_Where($id_petugas);
    }




    // Method untuk memasukan data ke dalam table
    function PUTData ($id_petugas,$username,$password,$nama_petugas,$level){

        // perintah PUT data
        $this->MPetugas->PUT($id_petugas,$username,$password,$nama_petugas,$level);

    }




    // Method untuk menghapus data dari table
    function DELETEData ($id_petugas){

        // perintah DELETE data
        $this->MPetugas->DELETE($id_petugas);

    }


 


}


?>