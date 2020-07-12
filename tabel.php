<!DOCTYPE HTML>
<html>
  <head>
    <title>Data PENDAFTARAN</title>
	<style>
	body{
	background: url('gambar7.jpg') no-repeat scroll;
	background-size: 100% 100%;
	min-height: 700px;
	}
	</style>
  </head>
  <div id="header" style="background-color:#FF7F00">
    <h1>YogiSite</h1>
  </div>

  <center><div id="header" style="opacity: 0.8;filter: alpha(opacity=40);border-radius: 10px;  color:black; width:100%;">
<center><table border="2" width="1150px" height="180px" style=" background: url('gambar1.jpg') no-repeat scroll; active{position:absolute;top:2px}"><tr><td></td></tr></table></center>
  <center><h1>Data Pendaftar Himpunan Mahasiswa 2021 by Suprayogi</h1></center>
  <table border="2" style="background-color:blue;border-color:black">
	<tr>
	<td>
  <a href="tambah.php"><font size=5 color="white">KEMBALI KE MENU PENDAFTARAN</font></a></br></br>
	</td>
	</tr>
	</table>
	<br>
	<br>
	<table border="1" style="background-color:brown; border-color:white">
		<tr>
		<td width="80px">
		<font color="white"> Pendafatar</font>
		</td>
		
		<td width="110px">
		<font color="white"> NAMA</font>
		</td>
		
		<td width="114px">
		<font color="white">NIM</font>
		</td>
		
		<td width="110px">
		<font color="white"> Jurusan</font>
		</td>
		
		<td width="160px">
		<font color="white"> ALAMAT</font>
		</td>
		
		
		<td width="140px">
		<font color="white"> DEPARTEMENT</font>
		</td>
		
		<td width="120px">
		<font color="white"> Hobi</font>
		</td>
		
		<td width="160px">
		<font color="white"> Kelebihan</font>
		</td>
		
		<td width="180px">
		<font color="white"> Alasan</font>
		</td>
		</tr>
		</table>
  <?php
  $txt_file    = file_get_contents('mhs.txt');
  $rows        = explode("\n", $txt_file);
  array_shift($rows);

  $i=1;
  
  

  foreach($rows as $row => $data)
  {

        // Explode digunakan untuk memisahkan Item Data dariPemisah |, array pada PHP dimulaipada index ke-0
        $row_data = explode('|', $data);

        $info[$row]['nama']           = $row_data[0];
        $info[$row]['nim']         = $row_data[1];
        $info[$row]['jurusan']          = $row_data[2];
        $info[$row]['alamat']      = $row_data[3];
        $info[$row]['departement']       = $row_data[4];
		$info[$row]['hobi']       = $row_data[5];
		$info[$row]['kelebihan']       = $row_data[6];
		$info[$row]['alasan']       = $row_data[7];
        // Menampilkan Data
		
        echo '<table border=1  style="background-color:#FFD700; border-color:red" ><tr><td width="80px">' . $i++ . '</td>';
        echo ' <td width="80px" >  <div style="border: 0px solid rgb(204, 204, 204); padding: 5px; overflow: auto; width: 100px; height: 100px; background-color: #FFD700";"> <b>' . $info[$row]['nama'] . '</div></td>';
        echo ' <td width="80px"> <div style="border: 0px solid rgb(204, 204, 204); padding: 5px; overflow: auto; width: 100px; height: 100px; background-color: #FFD700;"> <b>' . $info[$row]['nim'] . '</div></td>';
        echo ' <td width="80px"> <div style="border: 0px solid rgb(204, 204, 204); padding: 5px; overflow: auto; width: 100px; height: 100px; background-color: #FFD700;"> <b>' . $info[$row]['jurusan'] . '</div></td> ';
        echo '<td width="160px"><div style="border: 0px solid rgb(204, 204, 204); padding: 5px; overflow: auto; width: 100px; height: 100px; background-color: #FFD700"> <b>' . $info[$row]['alamat'] . '</div></td>';
        echo ' <td width="150px"> <div style="border: 0px solid rgb(204, 204, 204); padding: 5px; overflow: auto; width: 100px; height: 100px; background-color: #FFD700"><b>' . $info[$row]['departement'] . '</div></td>';
		echo ' <td width="100px"> <div style="border: 0px solid rgb(204, 204, 204); padding: 5px; overflow: auto; width: 100px; height: 100px; background-color: #FFD700"><b>' . $info[$row]['hobi'] . '</div></td>';
		echo ' <td width="160px"> <div style="border: 0px solid rgb(204, 204, 204); padding: 5px; overflow: auto; width: 100px; height: 100px; background-color: #FFD700"><b>' . $info[$row]['kelebihan'] . '</div></td>';
		echo ' <td width="180px"> <div style="border: 0px solid rgb(204, 204, 204); padding: 5px; overflow: auto; width: 100px; height: 100px; background-color: #FFD700"> <b>' . $info[$row]['alasan'] . '</div></td>';
        echo '</tr></table>';
	

  }
  ?>


</body>
</html>
