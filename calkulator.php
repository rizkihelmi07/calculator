<h2>Kalkulator</h2>
<form method="post">

<table>
<tr>
	<td>Angka pertama</td>
	<td><input type="text" name=angkapertama size=10></td>
	
</tr>
<tr>
	<td>Angka kedua</td>
	<td><input type="text" name=angkakedua size=10></td>
	
</tr>

<tr>
	<td>Angka kedua</td>
	<td><input type="text" name=angkaketiga size=10></td>
	
</tr>

<tr>
	<td>
	<input type="submit" name=tambah value="+"/>
	<input type="submit" name=kurang value="-"/>
	<input type="submit" name=kali value="x"/>
	<input type="submit" name=bagi value="/"/>
	</td>
</tr>
</table>
</form>

<hr width=20% align=left>

<?php
$angkapertama=isset($_POST['angkapertama'])?$_POST['angkapertama']:'';
$angkakedua=isset($_POST['angkakedua'])?$_POST['angkakedua']:'';
$angkaketiga=isset($_POST['angkaketiga'])?$_POST['angkaketiga']:'';
$tambah=isset($_POST['tambah'])?$_POST['tambah']:'';
$kurang=isset($_POST['kurang'])?$_POST['kurang']:'';
$kali=isset($_POST['kali'])?$_POST['kali']:'';
$bagi=isset($_POST['bagi'])?$_POST['bagi']:'';



function tambah($angka1,$angka2,$angka3){
 $hasil=$angka1+$angka2+$angka3;
 return $hasil; 
 }
function kurang($angka1,$angka2,$angka3){
 $hasil=$angka1-$angka2-$angka3;
 return $hasil; 
 }
function kali($angka1,$angka2,$angka3){
 $hasil=$angka1*$angka2*$angka3;
 return $hasil; 
 }
function bagi($angka1,$angka2,$angka3){
 $hasil=$angka1/$angka2/$angka3;
 return $hasil; 
 }
 
 
if ($tambah == true){
 $hasil=tambah($angkapertama,$angkakedua,$angkaketiga);
 echo  "hasil = $hasil";

 }
elseif ($kurang == true){
 $hasil=kurang($angkapertama,$angkakedua,$angkaketiga);
 echo "hasil = $hasil";

 }
elseif ($kali == true){
 $hasil=kali($angkapertama,$angkakedua,$angkaketiga);
 echo "hasil = $hasil";
 }
elseif ($bagi == true){
 $hasil=bagi($angkapertama,$angkakedua,$angkaketiga);
 echo "<td>hasil $hasil";
 }

 echo "<hr width=20% align=left>";

 echo "<tr>
 		<td> Angka Pertama : $angkapertama </td><br/>
 		<td> Angka Kedua : $angkakedua </td><br/>
 		<td> Angka Ketiga : $angkaketiga </td><br/>
 		</tr>";


 if ($tambah == true){
 $hasil=tambah($angkapertama,$angkakedua,$angkaketiga);
 echo "<tr>
 			<td>Operasi : Tambah</td><br/>
 	 		<td> Hasil dari :$angkapertama+$angkakedua+$angkaketiga = $hasil </td><br/>
 	 	</tr>";

 }
elseif ($kurang == true){
 $hasil=kurang($angkapertama,$angkakedua,$angkaketiga);
 echo "<tr>
 			<td>Operasi : Kurang</td><br/>
 			<td>Hasil dari : $angkapertama-$angkakedua-$angkaketiga = $hasil</td><br/>
 		</tr>";

 }
elseif ($kali == true){
 $hasil=kali($angkapertama,$angkakedua,$angkaketiga);
 echo "<tr>
 			<td>Operasi : Kali</td><br/>
 			<td>Hasil dari : $angkapertama*$angkakedua*$angkaketiga = $hasil</td><br/>
 		</tr>";
 }
elseif ($bagi == true){
 $hasil=bagi($angkapertama,$angkakedua,$angkaketiga);
 echo "<tr>
 			<td>Operasi : Bagi</td><br/>
 			<td>Hasil dari : $angkapertama/$angkakedua/$angkaketiga = $hasil
 		</tr>";
 }


?>





