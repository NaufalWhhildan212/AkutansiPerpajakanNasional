<?php
include('../koneksi.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tb_datacustomer");
$html = '<center><h3>Data User</h3></center><hr/><br>';
$html .= '<table border="4" width="100%">
            <tr>
                <th>No</th>
                <th>Id Customer</th>
                <th>Nama Customer</th>
                <th>No Telepon</th>
                <th>Perusahaan</th>
                <th>Alamat</th>
            </tr>';
$no = 1;
while ($User = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . $User['Id_customer'] . "</td>
                <td>" . $User['Nama_customer'] . "</td>
                <td>" . $User['Alamat'] . "</td>
                <td>" . $User['no_telepon'] . "</td>
                <td>" . $User['Perusahaan'] . "</td>
            </tr>";
    $no++;
}
$html .= "</table>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-Data User.pdf');
