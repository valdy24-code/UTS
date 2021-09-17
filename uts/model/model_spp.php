<?php

class model_spp{
    var $db;
    var $con;
    var $query;
    var $data;
    var $result;

    var $id_spp;
    var $tahun;
    var $nominal;

    function __construct()
    {
    include '../config/Database.php';
    $this->db = new Database();
    $this->con=$this->db->Connect();
    }

    function POST($id_spp,$tahun,$nominal){
        mysqli_query($this->con,"insert into tbl_spp values(
            '".$id_spp."',
            '".$tahun."',
            '".$nominal."'
        )");
    }

    function GET(){

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from tbl_spp");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    function GET_Where ($id_spp){
        $this->query=mysqli_query($this->con,"select * from tbl_spp where id_spp='$id_spp'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    function PUT($id_spp,$tahun,$nominal){
        mysqli_query($this->con,"update tbl_spp set
        tahun='".$tahun."',
        nominal='".$nominal."',
        where id_spp='".$id_spp."'");
    }
    
    function DELETE ($id_spp){

        // perintah DELETE data
        mysqli_query($this->con,"delete from tbl_spp where id_spp='$id_spp'");

    }
}
?>