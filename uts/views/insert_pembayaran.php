<?php
include('../config/csrf.php');
?>

<h2>Input Pembayaran</h2>

<form action="../config/routes.php?function=create_pembayaran" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
    <tr>
        <td>ID Pembayaran</td>
        <td><input type="text" name="id_pembayaran"></td>
    </tr>
    <tr>
        <td>ID Petugas</td>
        <td><input type="text" name="id_petugas"></td>
    </tr>
    <tr>
        <td>NISN</td>
        <td><input type="text" name="nisn"></td>
    </tr>
    <tr>
        <td>Tanggal</td>
        <td><input type="text" name="tgl_bayar"></td>
    </tr>
    <tr>
        <td>Bulan</td>
        <td><input type="text" name="bulan_bayar"></td>
    </tr>
    <tr>
        <td>Tahun</td>
        <td><input type="text" name="tahun_bayar"></td>
    </tr>
    <tr>
        <td>ID SPP</td>
        <td><input type="text" name="id_spp"></td>
    </tr>
    <tr>
        <td>Jumlah</td>
        <td><input type="text" name="jumlah_bayar"></td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table>
</form>