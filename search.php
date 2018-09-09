<?php
$nama = $_POST[nama];
$koneksi = mysql_connect("localhost","root","");
mysql_select_db("pegawai");
$query = "select * from datapegawai where nama='$nama'";
$hasil = mysql_query($query);
while($data=mysql_fetch_array($hasil)) 
{
	# code...
	echo $data[0]." ".$data[1]." ".$data[2]." ".$data[3]."<br/>";
}
mysql_close($koneksi)
?>