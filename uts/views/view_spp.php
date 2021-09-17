<?php

include '../controllers/controller_spp.php';
$spp = new controller_spp();
$GetSpp = $spp->GetData_All();

?>

<h1>DATA SPP</h1>
<h3><a href="insert_spp.php">Add Siswa</a></h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>ID SPP</th>
        <th>Tahun</th>
        <th>Nominal</th>
        <th>Tools</th>
    </tr>
    <?php
                // Decision validation variabel
                if(isset($GetSpp))
                {
                        $no = 1;
                        foreach($GetSpp as $Get){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['id_spp']; ?></td>
                            <td><?php echo $Get['tahun']; ?></td>
                            <td><?php echo $Get['nominal']; ?></td>
                            <td>
                                <a href="../views/update_spp.php?id_spp=<?php echo $Get['id_spp'] ?>">Update</a>
                                <a href="#">Delete</a>
                            </td>
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>
</table>