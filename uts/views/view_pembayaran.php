<?php

include '../controllers/controller_pembayaran.php';
$pembayaran = new controller_pembayaran();
$GetBayar = $pembayaran->GetData_All();

?>

<h1>DATA PEMBAYARAN</h1>
<h3><a href="insert_pembayaran.php">Add Pembayaran</a></h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>ID Ppembayaran</th>
        <th>ID Petugas</th>
        <th>NISN</th>
        <th>Tanggal</th>
        <th>Bulan</th>
        <th>Tahun</th>
        <th>ID SPP</th>
        <th>Jumlah</th>
        <th>Tools</th>
    </tr>
    <?php
                // Decision validation variabel
                if(isset($GetBayar))
                {
                        $no = 1;
                        foreach($GetBayar as $Get){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['id_pembayaran']; ?></td>
                            <td><?php echo $Get['id_petugas']; ?></td>
                            <td><?php echo $Get['nisn']; ?></td>
                            <td><?php echo $Get['tgl_bayar']; ?></td>
                            <td><?php echo $Get['bulan_bayar']; ?></td>
                            <td><?php echo $Get['tahun_bayar']; ?></td>
                            <td><?php echo $Get['id_spp']; ?></td>
                            <td><?php echo $Get['jumlah_bayar']; ?></td>
                            <td>
                                <a href="../views/update_pembayaran.php?id_pembayaran=<?php echo $Get['id_pembayaran'] ?>">Update</a>
                                <a href="../config/routes.php?function=delete_pembayaran&id_pembayaran=<?php echo $Get['id_pembayaran'] ?>" onclick="return confirm('Hapus Data?');">Delete</a>
                            </td>
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>
</table>