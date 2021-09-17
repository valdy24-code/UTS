<?php
include('../config/csrf.php');
include '../controllers/controller_pembayaran.php';
$pembayaran = new controller_pembayaran();
$GetBayar = $pembayaran->GetData_Where($_GET['id_pembayaran']);
?>
<?php
    foreach($GetBayar as $Get){
?>

<h1>Update Form PEMBAYARAN</h1>
<form action="../config/routes.php?function=update_pembayaran" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
        <input type="hidden" name="id_pembayaran" value="<?php echo $Get['id_pembayaran']; ?>">
    <tr>
        <td>ID Petugas</td>
        <td><input type="text" name="id_petugas" value="<?php echo $Get['id_petugas']; ?>"></td>
    </tr>
    <tr>
        <td>NISN</td>
        <td><input type="text" name="nisn" value="<?php echo $Get['nisn']; ?>"></td>
    </tr>
    <tr>
        <td>Tanggal</td>
        <td><input type="text" name="tgl_bayar" value="<?php echo $Get['tgl_bayar']; ?>"></td>
    </tr>
    <tr>
        <td>Bulan</td>
        <td><input type="text" name="bulan_bayar" value="<?php echo $Get['bulan_bayar']; ?>"></td>
    </tr>
    <tr>
        <td>Tahun</td>
        <td><input type="text" name="tahun_bayar" value="<?php echo $Get['tahun_bayar']; ?>"></td>
    </tr>
    <tr>
        <td>ID SPP</td>
        <td><input type="text" name="id_spp" value="<?php echo $Get['id_spp']; ?>"></td>
    </tr>
    <tr>
        <td>Jumlah</td>
        <td><input type="text" name="jumlah_bayar" value="<?php echo $Get['jumlah_bayar']; ?>"></td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table>
</form>
<?php
    }
    ?>
