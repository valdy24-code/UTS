<?php

class model_petugas{
    var $db;
    var $con;
    var $query;
    var $data;
    var $result;

    var $id_petugas;
    var $username;
    var $password;
    var $nama_petugas;
    var $level;

    function __construct()
    {
    include_once '../Config/Database.php';
    $this->db = new Database();
    $this->con=$this->db->Connect();
    }

    function POST($id_petugas,$username,$password,$nama_petugas,$level){
        mysqli_query($this->con,"insert into tbl_petugas values(
            '".$id_petugas."',
            '".$username."',
            '".$password."',
            '".$nama_petugas."',
            '".$level."'
        )");
    }

    function GET(){

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from tbl_petugas");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    function GET_Where ($id_petugas){
        $this->query=mysqli_query($this->con,"select * from tbl_petugas where id_petugas='$id_petugas'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    function PUT($id_petugas,$username,$password,$nama_petugas,$level){
        mysqli_query($this->con,"update tbl_petugas set
        username='".$username."',
        password='".$password."',
        nama_petugas='".$nama_petugas."',
        level='".$level."'
        where id_petugas='".$id_petugas."'");
    }
    
    function DELETE ($id_petugas){

        // perintah DELETE data
        mysqli_query($this->con,"delete from tbl_petugas where id_petugas='$id_petugas'");

    }
}
?>