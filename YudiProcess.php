<?php
$h1 = "3";
if (isset($_POST['input'])){
$nama=$_POST['nama'];
$tgllahir = $_POST['tgl']." ".$_POST['bln']." ".$_POST['thn'];
$alamat=$_POST['alamat'];
$kota=$_POST['kota'];
$kerja=$_POST['kerja'];
$status=$_POST['status'];
$hb = $_POST['h1']."<br>".$_POST['h2']."<br>".$_POST['h3']."<br>".$_POST['h4'];

echo "
<h2>Data Registrasi</h2>
<hr style=”color:#00f” width=”60%” align=”right”>
<table cellpadding='0' cellspacing='0' border='0' width=700px>

<tr>
    <td>Nama</td>
    <td>: $nama</td>
</tr>
<tr>
    <td>Tanggal Lahir</td>
    <td>: $tgllahir</td>
</tr>
<tr>
    <td>Alamat</td>
    <td>: $alamat</td>
</tr>

<tr>
    <td>Kota</td>
    <td>: $kota</td>
</tr>

<tr>
    <td>Pekerjaan</td>
    <td>: $kerja</td>
</tr>

<tr>
    <td>Jenis Kelamin</td>
    <td>: $status</td>
</tr>
<tr>
<td>Hobby</td>
<td>: $hb</td>
</tr>
</table>";
}
?>