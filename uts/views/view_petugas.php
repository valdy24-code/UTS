<?php

include '../controllers/controller_petugas.php';
$petugas = new controller_petugas();
$GetPetugas = $petugas->GetData_All();

?>

<h1>DATA Petugas</h1>
<h3><a href="insert_petugas.php">Add Petugas</a></h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>ID Petugas</th>
        <th>Username</th>
        <th>Password</th>
        <th>Nama</th>
        <th>Level</th>
        <th>Tools</th>
    </tr>
    <?php
                // Decision validation variabel
                if(isset($GetPetugas))
                {
                        $no = 1;
                        foreach($GetPetugas as $Get){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['id_petugas']; ?></td>
                            <td><?php echo $Get['username']; ?></td>
                            <td><?php echo $Get['password']; ?></td>
                            <td><?php echo $Get['nama_petugas']; ?></td>
                            <td><?php echo $Get['level']; ?></td>
                            <td>
                                <a href="../views/update_petugas.php?id_petugas=<?php echo $Get['id_petugas'] ?>">Update</a>
                                <a href="../config/routes.php?function=delete_petugas&id_petugas=<?php echo $Get['id_petugas']?>"onclick="return confirm('Hapus Data?');">Delete
                            </a>
                            </td>
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>
</table>