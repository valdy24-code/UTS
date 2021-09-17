<?php

include '../controllers/controller_kelas.php';
$kelas = new controller_kelas();
$GetKelas = $kelas->GetData_All();

?>

<h1>DATA Kelas</h1>
<h3><a href="insert_kelas.php">Add Kelas</a></h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>ID Kelas</th>
        <th>Nama Kelas</th>
        <th>Kompetensi Keahlian</th>
        <th>Tools</th>
    </tr>
    <?php
                // Decision validation variabel
                if(isset($GetKelas))
                {
                        $no = 1;
                        foreach($GetKelas as $Get){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['id_kelas']; ?></td>
                            <td><?php echo $Get['nama_kelas']; ?></td>
                            <td><?php echo $Get['kompetensi_keahlian']; ?></td>
                            <td>
                                <a href="../views/update_kelas.php?id_kelas=<?php echo $Get['id_kelas'] ?>">Update</a>
                                <a href="../config/routes.php?function=delete_kelas&id_kelas=<?php echo $Get['id_kelas'] ?>" onclick="return confirm('Hapus Data?');">Delete</a>
                            </td>
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>
</table>