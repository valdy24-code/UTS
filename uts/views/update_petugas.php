<?php
include('../config/csrf.php');
include '../controllers/controller_petugas.php';
$petugas = new controller_petugas();
$GetPetugas = $petugas->GetData_Where($_GET['id_petugas']);
?>
<?php
    foreach($GetPetugas as $Get){
?>

<h1>Update Form Petugas</h1>
<form action="../config/routes.php?function=update_petugas" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
        <input type="hidden" name="id_petugas" value="<?php echo $Get['id_petugas']; ?>">
    <tr>
        <td>Username</td>
        <td><input type="text" name="username" value="<?php echo $Get['username']; ?>"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="text" name="password" value="<?php echo $Get['password']; ?>"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama_petugas" value="<?php echo $Get['nama_petugas']; ?>"></td>
    </tr>
    <tr>
        <td>Level</td>
        <td>
            <select name="level">

                <!-- Logic combo Get database -->
                <option value="<?php echo $Get['level']; ?>">
                <?php
                    if($Get['level']=="Administrator")
                    {
                        echo "Administrator";
                    }
                    else{
                        echo "Petugas";
                    }
                ?>
                </option>
                <!-- Logic combo Get database -->



                <option value="Administrator">Administrator</option>
                <option value="Petugas">Petugas</option>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table>
</form>
<?php
    }
    ?>
