<?php

class model_pembayaran{
    var $db;
    var $con;
    var $query;
    var $data;
    var $result;

    var $id_pembayaran;
    var $id_petugas;
    var $nisn;
    var $tgl_bayar;
    var $bulan_bayar;
    var $tahun_bayar;
    var $id_spp;
    var $jumlah_bayar;

    function __construct()
    {
    include_once '../Config/Database.php';
    $this->db = new Database();
    $this->con=$this->db->Connect();
    }

    function POST($id_pembayaran,$id_petugas,$nisn,$tgl_bayar,$bulan_bayar,$tahun_bayar,$id_spp,$jumlah_bayar){
        mysqli_query($this->con,"insert into tbl_pembayaran values(
            '".$id_pembayaran."',
            '".$id_petugas."',
            '".$nisn."',
            '".$tgl_bayar."',
            '".$bulan_bayar."',
            '".$tahun_bayar."',
            '".$id_spp."',
            '".$jumlah_bayar."'
        )");
    }

    function GET(){

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from tbl_pembayaran");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    function GET_Where ($id_pembayaran){
        $this->query=mysqli_query($this->con,"select * from tbl_pembayaran where id_pembayaran='$id_pembayaran'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    function PUT($id_pembayaran,$id_petugas,$nisn,$tgl_bayar,$bulan_bayar,$tahun_bayar,$id_spp,$jumlah_bayar){
        mysqli_query($this->con,"update tbl_siswa set
        id_petugas='".$id_petugas."',
        nisn='".$nisn."',
        tgl_bayar='".$tgl_bayar."',
        bulan_bayar='".$bulan_bayar."',
        tahun_bayar='".$tahun_bayar."',
        id_spp='".$id_spp."',
        jumlah_bayar='".$jumlah_bayar."'
        where id_pembayaran='".$id_pembayaran."'");
    }
    
    function DELETE ($id_pembayaran){

        // perintah DELETE data
        mysqli_query($this->con,"delete from tbl_pembayaran where id_pembayaran='$id_pembayaran'");

    }
}
?>