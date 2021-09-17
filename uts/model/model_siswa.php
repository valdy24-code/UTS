<?php

class model_siswa{
    var $db;
    var $con;
    var $query;
    var $data;
    var $result;

    var $nisn;
    var $nis;
    var $nama;
    var $id_kelas;
    var $alamat;
    var $no_telp;
    var $id_spp;

    function __construct()
    {
    include_once '../Config/Database.php';
    $this->db = new Database();
    $this->con=$this->db->Connect();
    }

    function POST($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp){
        mysqli_query($this->con,"insert into tbl_siswa values(
            '".$nisn."',
            '".$nis."',
            '".$nama."',
            '".$id_kelas."',
            '".$alamat."',
            '".$no_telp."',
            '".$id_spp."'
        )");
    }

    function GET(){

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from tbl_siswa");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    function GET_Where ($nisn){
        $this->query=mysqli_query($this->con,"select * from tbl_siswa where nisn='$nisn'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    function PUT($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp){
        mysqli_query($this->con,"update tbl_siswa set
        nis='".$nis."',
        nama='".$nama."',
        id_kelas='".$id_kelas."',
        alamat='".$alamat."',
        no_telp='".$no_telp."',
        id_spp='".$id_spp."'
        where nisn='".$nisn."'");
    }
    
    function DELETE ($nisn){

        // perintah DELETE data
        mysqli_query($this->con,"delete from tbl_siswa where nisn='$nisn'");

    }
}
?>