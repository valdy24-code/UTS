<?php
include('../config/csrf.php');
?>

<h2>Input Kelas</h2>

<form action="../config/routes.php?function=create_kelas" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
    <tr>
        <td>ID Kelas</td>
        <td><input type="text" name="id_kelas"></td>
    </tr>
    <tr>
    <td>Kelas</td>
        <td>
            <select name="nama_kelas">
                <option value="Regular">Regular</option>
                <option value="Regular Malam">Regular Malam</option>
                <option value="Karyawan">Karyawan</option>
            </select>
    </tr>
    <tr>
    <td>Kompetensi Keahlian</td>
        <td>
            <select name="kompetensi_keahlian">
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Teknik Informasi">Teknik Informasi</option>
            </select>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table>
</form>