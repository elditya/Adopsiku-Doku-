<?php

include '../../koneksi.php';
require_once "../../vendor/autoload.php";
$query = mysqli_query($host,"SELECT * from  table_anak where status_adopsi ='diadopsi'");
$mpdf = new \Mpdf\Mpdf();
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
  <th align="left"><h2>Laporan Anak Yang Telah Diadopsi</h2></th>
  <th align="right"><img src="http://localhost/Doku/images/logo.png" width="50px"></th>
</tr>
</table>
<hr/><br/>
  <table  border="1" class="border" >
            <tr bgcolor="#FFB6C1">
            <th>NO</th>
            <th>Nama Anak</th>
            <th>Nama Panti</th>
            <th>Umur Anak</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>hobby</th>
            <th>Foto Anak</th>
            </tr>';

            $i = 1;
            while($data = mysqli_fetch_array($query,MYSQLI_ASSOC)){
                $html .= '<tr>
                <td>'. $i++ .'</td>
                <td>'. $data["nama_anak"].'</td>
                <td>'. $data["nama_panti"].'</td>
                <td>'. $data["umur_anak"].'</td>
                <td>'. $data["tl"].'</td>
                <td>'. $data["ttl"].'</td>
                <td>'. $data["jk"].'</td>
                <td>'. $data["agama"].'</td>
                <td>'. $data["hobby"].'</td>
                <td><img src="http://localhost/Doku/images/anak/'.$data["foto_anak"].'" width="80px" height="100px"></td>

                </tr>';
                }
            
          

$html .= '</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output();