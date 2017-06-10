<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=exceldata.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<h3>Variabel dan Scoring Hasil Pengawasan dan Pembinaan Klinik Kartu Pasien / Rekam Medis</h3>
<table border='2' width="70%">
  <tr>
    <th>No</th>
    <th>Uraian</th>
    <th>Hasil</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Identitas Klien</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Kelengkapan Anamnesis</td>
  </tr>
  <tr>
    <td>3</td>
    <td>Hasil Pemeriksaan Fisik</td>
  </tr>
  <tr>
    <td>4</td>
    <td>Jenis Terapi/tindakan Sesuai Hasil Pemeriksaan Fisik</td>
  </tr>
  <tr>
    <td>5</td>
    <td>Follow UP Therapy / Tindakan</td>
  </tr>
  <tr>
    <td>6</td>
    <td>Nama dan Tanda Tangan Pemeriksa</td>
  </tr>
  <tr>
    <td>7</td>
    <td>Catatan Rekam Medis</td>
  </tr>
</table>
