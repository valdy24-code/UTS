<?php

// Class pegawai (CRUD pegawai)
class controller_pembayaran{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

     var $MBayar;

     var $id_pembayaran;
     var $id_petugas;
     var $nisn;
     var $tgl_bayar;
     var $bulan_bayar;
     var $tahun_bayar;
     var $id_spp;
     var $jumlah_bayar;
     

     // Method main variabel
        function __construct()
        {
            // Membuat Object dari Class Module pegawai
            include '../model/model_pembayaran.php';
            $this->MBayar = new model_pembayaran();
        }




    // Method untuk memasukan data ke dalam table
    function POSTData ($id_pembayaran,$id_petugas,$nisn,$tgl_bayar,$bulan_bayar,$tahun_bayar,$id_spp,$jumlah_bayar){

        // perintah POST data
        $this->MBayar->POST($id_pembayaran,$id_petugas,$nisn,$tgl_bayar,$bulan_bayar,$tahun_bayar,$id_spp,$jumlah_bayar);

    }



    
    // Method untuk mengambil semua data dari table
    function GetData_All(){

        // perintah GET data
        return $this->MBayar->GET();
        

    }


    // Method untuk mengambil data seleksi dari table
    function GetData_Where ($id_pembayaran){

        // perintah GET data
        return $this->MBayar->GET_Where($id_pembayaran);
    }




    // Method untuk memasukan data ke dalam table
    function PUTData ($id_pembayaran,$id_petugas,$nisn,$tgl_bayar,$bulan_bayar,$tahun_bayar,$id_spp,$jumlah_bayar){

        // perintah PUT data
        $this->MBayar->PUT($id_pembayaran,$id_petugas,$nisn,$tgl_bayar,$bulan_bayar,$tahun_bayar,$id_spp,$jumlah_bayar);

    }




    // Method untuk menghapus data dari table
    function DELETEData ($id_pembayaran){

        // perintah DELETE data
        $this->MBayar->DELETE($id_pembayaran);

    }


 


}


?>