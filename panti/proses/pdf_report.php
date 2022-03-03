<?php
	session_start();
include '../../koneksi.php';
require_once "../../vendor/autoload.php";
$adopter = $_GET['nama_adopter'];
$nama_anak = $_GET['nama_anak'];
$sql = mysqli_query($host,"select * from table_adopter where username = '$adopter'");
$query = mysqli_query($host,"SELECT * from  tahapan1 where nama_anak ='$nama_anak'");
$query1 = mysqli_query($host,"SELECT * from  tahapan2 where nama_anak ='$nama_anak'");
$query2 = mysqli_query($host,"SELECT * from  tahapan3 where nama_anak ='$nama_anak'");
$query3 = mysqli_query($host,"SELECT * from  tahapan4 where nama_anak ='$nama_anak'");
$query4 = mysqli_query($host,"SELECT * from  tahapan5 where nama_anak ='$nama_anak'");
$query5 = mysqli_query($host,"SELECT * from  tahapan6 where nama_anak ='$nama_anak'");
$query6 = mysqli_query($host,"SELECT * from  history where nama_anak ='$nama_anak'");
$query7 = mysqli_query($host,"SELECT * from  table_anak where nama_anak ='$nama_anak'");
$mpdf = new \Mpdf\Mpdf();
$data8 = mysqli_fetch_array($sql);
$data7 = mysqli_fetch_array($query7);
$data6 = mysqli_fetch_array($query6);
$html = '
<html>
<head>
<style>

.border {
  border: 1px solid black;
  border-collapse: collapse;
  width: 100%;
}


</style>
 <title>Reprt PDF</title>
</head>
<body>
<table width="100%">
<tr>
  <th align="left"><h2>Report Hasil Adopsi Anak</h2></th>
  <th align="right"><img src="http://localhost/Doku/images/logo.png" width="50px"></th>
</tr>
</table>
<hr/><br/>
 <table width="100%" >
 <tr>
     <th align="left">Nama Adopter : &nbsp;'. $data8["username"].'</th>
     <th align="right" rowspan="6"><img src="http://localhost/Doku/images/profil/'.$data8["foto"].'" width="100px"></th>
 </tr>

 <tr>
 <th align="left">Tanggal Lahir Adopter :  &nbsp;'. $data8["TTL"].' </th>
</tr>

 <tr>
     <th align="left">Nama Anak :  &nbsp;'. $data7["nama_anak"].' </th>
 </tr>
 <tr>
     <th align="left">Umur Anak :   &nbsp;'. $data7["umur_anak"].' </th>
 </tr>
 <tr>
     <th align="left">Tanggal Lahir Anak : &nbsp;'. $data7["ttl"].'</th>
 </tr>
 <tr>
     <th align="left">Tempat Lahir Anak : &nbsp;'. $data7["tl"].'</th>
 </tr>
 <tr>
     <th align="left">Tanggal Tahapan Selesai :  &nbsp;'. $data6["tgl_selesai"].'</th>
 </tr>
 <th align="right"><img src="http://localhost/Doku/images/anak/'.$data7["foto_anak"].'" width="80px"></th>
</table>
<br>
<br>
  <table width="90%" border="1" class="border" >
            <tr bgcolor="#FFB6C1">
            <th>Tahapan</th>
            <th>Hari</th>
            <th>Tanggal</th>
            <th>Jam</th>
            </tr>';

            $i = 1;
            $data = mysqli_fetch_array($query);
            $data1 = mysqli_fetch_array($query1);
            $data2 = mysqli_fetch_array($query2);
            $data3 = mysqli_fetch_array($query3);
            $data4 = mysqli_fetch_array($query4);
            $data5 = mysqli_fetch_array($query5);
            $data6 = mysqli_fetch_array($query6);
                $html .= '<tr>
                <td>'. $data["deskripsi"] .'</td>
                <td>'. $data["hari"].'</td>
                <td>'. $data["tgl"].'</td>
                <td>'. $data["jam"].'</td>
                </tr>
                <tr>
               <td>'. $data1["deskripsi"] .'</td>
                <td>'. $data1["hari"].'</td>
                <td>'. $data1["tgl"].'</td>
                <td>'. $data1["jam"].'</td>
                </tr>
                <tr>
               <td>'. $data2["deskripsi"] .'</td>
                <td>'. $data2["hari"].'</td>
                <td>'. $data2["tgl"].'</td>
                <td>'. $data2["jam"].'</td>
                </tr>
                <tr>
               <td>'. $data3["deskripsi"] .'</td>
                <td>'. $data3["hari"].'</td>
                <td>'. $data3["tgl"].'</td>
                <td>'. $data3["jam"].'</td>
                </tr>
                <tr>
               <td>'. $data4["deskripsi"] .'</td>
                <td>'. $data4["hari"].'</td>
                <td>'. $data4["tgl"].'</td>
                <td>'. $data4["jam"].'</td>
                </tr>
                <tr>
               <td>'. $data5["deskripsi"] .'</td>
                <td>'. $data5["hari"].'</td>
                <td>'. $data5["tgl"].'</td>
                <td>'. $data5["jam"].'</td>
                </tr>
                <tr>
                 <td>'. $data6["deskripsi"] .'</td>
                 <td>'. $data6["hari"].'</td>
                 <td>'. $data6["tgl"].'</td>
                 <td>'. $data6["jam"].'</td>
                 </tr> ';
            
          

$html .= '</table>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output();