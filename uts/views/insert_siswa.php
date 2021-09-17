<?php
include('../config/csrf.php');
?>

<h2>Input Siswa</h2>

<form action="../config/routes.php?function=create_siswa" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
    <tr>
        <td>NISN</td>
        <td><input type="text" name="nisn"></td>
    </tr>
    <tr>
        <td>NIS</td>
        <td><input type="text" name="nis"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>ID Kelas</td>
        <td>
        <select name="id_kelas">
                <option value="1001">1001</option>
                <option value="1002">1002</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="3001">3001</option>
                <option value="3002">3002</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
        <td>No Telpon</td>
        <td><input type="text" name="no_telp"></td>
    </tr>
    <tr>
        <td>ID SPP</td>
        <td><input type="text" name="id_spp"></td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table>
</form>