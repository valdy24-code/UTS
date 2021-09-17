<?php
include('../config/csrf.php');
include '../controllers/controller_kelas.php';
$kelas = new controller_kelas();
$GetKelas = $kelas->GetData_Where($_GET['id_kelas']);
?>
<?php
    foreach($GetKelas as $Get){
?>

<h1>Update Form Kelas</h1>
<form action="../config/routes.php?function=update_kelas" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
        <input type="hidden" name="id_kelas" value="<?php echo $Get['id_kelas']; ?>">
    <tr>
    <td>Nama Kelas</td>
        <td>
            <select name="nama_kelas">

                <!-- Logic combo Get database -->
                <option value="<?php echo $Get['nama_kelas']; ?>">
                <?php
                    if($Get['nama_kelas']=="Regular")
                    {
                        echo "Regular";
                    }
                    else{
                        echo "Regular Malam";
                    }
                ?>
                </option>
                <!-- Logic combo Get database -->
                <option value="Regular">Regular</option>
                <option value="Regular Malam">Regular Malam</option>
                <option value="Karyawan">Karyawan</option>
            </select>
    </tr>
    <tr>
    <td>Kompetensi Keahlian</td>
        <td>
            <select name="kompetensi_keahlian">

                <!-- Logic combo Get database -->
                <option value="<?php echo $Get['kompetensi_keahlian']; ?>">
                <?php
                    if($Get['kompetensi_keahlian']=="Sistem Informasi")
                    {
                        echo "Sistem Informasi";
                    }
                    else{
                        echo "Teknik Informasi";
                    }
                ?>
                </option>
                <!-- Logic combo Get database -->
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Teknik Informasi">Teknik Informasi</option>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table>
</form>
<?php
    }
    ?>
