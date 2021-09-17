<?php
include('../config/csrf.php');
?>

<h2>Input Petugas</h2>

<form action="../config/routes.php?function=create_petugas" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
    <tr>
        <td>ID Petugas</td>
        <td><input type="text" name="id_petugas"></td>
    </tr>
    <tr>
        <td>Username</td>
        <td><input type="text" name="username"></td>
    </tr>
    <tr>
        <td>password</td>
        <td><input type="text" name="password"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama_petugas"></td>
    </tr>
    <tr>
        <td>Level</td>
        <td>
            <select name="level">
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