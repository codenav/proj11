<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=Data-Klinik.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

HASIL PENGAWASAN DAN PEMBINAAN KATEGORI KESESUAIAN LOKASI
<br>KLINIK : <?php foreach ($klinik as $news_item) { echo $news_item['nama'];}?>
<br>PERIODE : <?php foreach ($klinik as $news_item) { echo $news_item['periode'];}?>

<table border="1">
  <tr>
    <th>tanggal</th>
    <th>kesesuaian lokasi</th>
  </tr>
  <tr>
    <td><?php foreach ($klinik as $news_item) { echo $news_item['tgl_mulai_izin'];}?></td>
    <td><?php foreach ($lokasi as $news_item) { echo $news_item->st_lokasi;}?></td>
  </tr>
</table>

<br>
CATATAN KESESUAIAN LOKASI DI KLINIK :
<?php foreach ($lokasi as $news_item) { echo $news_item->catatan;}?>
<br><br><br><br><br><br>

HASIL PENGAWASAN DAN PEMBINAAN KLINIK KATEGORI OPERASIONAL
<br>KLINIK : <?php foreach ($klinik as $news_item) { echo $news_item['nama'];}?>
<br>PERIODE : <?php foreach ($klinik as $news_item) { echo $news_item['periode'];}?>

<table border="1">
  <tr>
    <th>tanggal</th>
    <th>status beroperasi</th>
    <th>Flat</th>
    <th>Jenis Layanan</th>
  </tr>
  <tr>
    <td><?php foreach ($klinik as $news_item) { echo $news_item['tgl_mulai_izin'];}?></td>
    <td><?php foreach ($operasional as $news_item) { echo $news_item->st_beroprasi;}?></td>
    <td><?php foreach ($operasional as $news_item) { echo $news_item->st_plat;}?></td>
    <td><?php foreach ($operasional as $news_item) { echo $news_item->st_kesesuaian_jenis_ijin_operasional;}?></td>
  </tr>
</table>

<br>
CATATAN OPERASIONAL JENIS LAYANAN DI KLINIK :
<?php foreach ($operasional as $news_item) {
  echo $news_item->catatan;
}
?>
<br><br><br><br><br><br>

HASIL PENGAWASAN DAN PEMBINAAN KLINIK KATEGORI BANGUNAN DAN RUANGAN

<br>KLINIK : <?php foreach ($klinik as $news_item) { echo $news_item['nama'];}?>
<br>PERIODE : <?php foreach ($klinik as $news_item) { echo $news_item['periode'];}?>

<table border="1">
  <tr>
    <th>TANGGAL</th>
    <th>LISTRIK</th>
    <th>PP KEBAKARAN</th>
    <th>S GAS MEDIS</th>
    <th>S TATA UDARA</th>
    <th>S PENCAHAYAAN</th>
    <th>S AIR BERSIH
</th>
    <th>AMBULANS
</th>
    <th>JUMLAH TT
</th>
  </tr>
  <tr>
    <td><?php foreach ($klinik as $news_item) { echo $news_item['tgl_mulai_izin'];}?></td>
    <td>asdfasfssdf</td>
    <td>aaa</td>
    <td>asdfasfssdf</td>
    <td>aaa</td>
    <td>asdfasfssdf</td>
    <td>aaa</td>
    <td>asdfasfssdf</td>
    <td>aaa</td>
  </tr>
</table>

<br>
CATATAN SARANA PRASARANA :
<?php foreach ($bangunan as $news_item) {
  echo $news_item->ctt_dan_saran_bangunan;
}
?>
<br><br><br><br><br><br>

HASIL PENGAWASAN DAN PEMBINAAN KLINIK KATEGORI SANITASI
<br>KLINIK : <?php foreach ($klinik as $news_item) { echo $news_item['nama'];}?>
<br>PERIODE : <?php foreach ($klinik as $news_item) { echo $news_item['periode'];}?>

<table border="1">
  <tr>
    <th>tanggal</th>
    <th>TMP SAMPAH ORGANIK</th>
    <th>TMP SAMPAH NONORGANIK</th>
    <th>TMP SAMPAH MEDIS</th>
    <th>WATAFEL</th>
    <th>SEPTICTANK</th>
    <th>SALURAN AIR KOTOR</th>
    <th>PENGELOLAAN LIMBAH MEDIS</th>
  </tr>
  <tr>
    <td><?php foreach ($klinik as $news_item) { echo $news_item['tgl_mulai_izin'];}?></td>
    <td><?php foreach ($sanitasi as $news_item) { echo $news_item->tsmp_medis;}?></td>
    <td><?php foreach ($sanitasi as $news_item) { echo $news_item->tsmp_organik;}?></td>
    <td><?php foreach ($sanitasi as $news_item) { echo $news_item->tsmp_organik;}?></td>
    <td><?php foreach ($sanitasi as $news_item) { echo $news_item->wastafel;}?></td>
    <td><?php foreach ($sanitasi as $news_item) { echo $news_item->tsmp_organik;}?></td>
    <td><?php foreach ($sanitasi as $news_item) { echo $news_item->saluran_air_kotor;}?></td>
    <td><?php foreach ($sanitasi as $news_item) { echo $news_item->limbah_mds;}?></td>
  </tr>
</table>

<br>
CATATAN SANITASI :
<?php foreach ($sanitasi as $news_item) {
  echo $news_item->keterangan;
}
?>

<br><br><br><br><br><br>

HASIL PENGAWASAN DAN PEMBINAAN KLINIK KATEGORI ISIAN REKAM MEDIK
<br>KLINIK : <?php foreach ($klinik as $news_item) { echo $news_item['nama'];}?>
<br>PERIODE : <?php foreach ($klinik as $news_item) { echo $news_item['periode'];}?>

<table border="1">
  <tr>
    <th>tanggal</th>
    <th>IDENTITAS PASIEN
</th>
    <th>KELENGKAPAN ANAMNESIS
</th>
    <th>HASIL PEMERIKSAAN FISIK
</th>
<th>JENIS TERAPI/TINDAKAN
</th>
<th>NAMA DAN TTD PEMERIKSA
</th>
<th>IN.CONSENT
</th>
<th>SOP
</th>
  </tr>
  <tr>
    <td><?php foreach ($klinik as $news_item) { echo $news_item['tgl_mulai_izin'];}?></td>
    <td><?php foreach ($rekam_medik as $news_item) { echo $news_item->id_pasien;}?></td>
    <td><?php foreach ($rekam_medik as $news_item) { echo $news_item->kelengkapan_anamnesa;}?></td>
    <td><?php foreach ($rekam_medik as $news_item) { echo $news_item->fisik;}?></td>
    <td><?php foreach ($rekam_medik as $news_item) { echo $news_item->jenis_terapi;}?></td>
    <td><?php foreach ($rekam_medik as $news_item) { echo $news_item->nama_ttd_pemeriksa;}?></td>
    <td><?php foreach ($rekam_medik as $news_item) { echo $news_item->jenis_terapi;}?></td>
    <td><?php foreach ($rekam_medik as $news_item) { echo $news_item->jenis_terapi;}?></td>
  </tr>
</table>

<br>
CATATAN REKAM MEDIS
<?php foreach ($rekam_medik as $news_item) {
  echo $news_item->keterangan;
}
?>

<br><br><br><br><br><br>

HASIL PENGAWASAN DAN PEMBINAAN KLINIK KATEGORI TENAGA KESEHATAN

<br>KLINIK : <?php foreach ($klinik as $news_item) { echo $news_item['nama'];}?>
<br>PERIODE : <?php foreach ($klinik as $news_item) { echo $news_item['periode'];}?>

<table border="1">
  <tr>
    <th>TANGGAL
</th>
    <th>KLINIK
</th>
    <th>DOKTER
</th>
    <th>STR DOKTER
</th>
<th>SIP DOKTER
</th>
<th>PERAWAT
</th><th>STR PERAWAT
</th><th>BIDAN
</th><th>STR BIDAN
</th><th>SIP BIDAN
</th><th>APOTEKER
</th><th>SIP APOTEKER
</th><th>SIPA POTEKER</th>
  </tr>
  <tr>
    <td><?php foreach ($klinik as $news_item) { echo $news_item['tgl_mulai_izin'];}?></td>
    <td>asdfasfssdf</td>
    <td><?php foreach ($tenaga_kesehatan as $news_item) { echo $news_item->dokter;}?></td>
    <td><?php foreach ($tenaga_kesehatan as $news_item) { echo $news_item->str_dokter;}?></td>
    <td><?php foreach ($tenaga_kesehatan as $news_item) { echo $news_item->sip_dokter;}?></td>
    <td><?php foreach ($tenaga_kesehatan as $news_item) { echo $news_item->perawat;}?></td>
    <td><?php foreach ($tenaga_kesehatan as $news_item) { echo $news_item->analisis;}?></td>
    <td><?php foreach ($tenaga_kesehatan as $news_item) { echo $news_item->str_analis;}?></td>
    <td><?php foreach ($tenaga_kesehatan as $news_item) { echo $news_item->str_analis;}?></td>
    <td><?php foreach ($tenaga_kesehatan as $news_item) { echo $news_item->apoteker;}?></td>
    <td><?php foreach ($tenaga_kesehatan as $news_item) { echo $news_item->sik_apoteker;}?></td>
    <td><?php foreach ($tenaga_kesehatan as $news_item) { echo $news_item->sipa_apoteker;}?></td>
    <td><?php foreach ($tenaga_kesehatan as $news_item) { echo $news_item->sipa_apoteker;}?></td>
  </tr>
</table>

<br>
CATATAN KETENAGAAN :
<?php foreach ($tenaga_kesehatan as $news_item) {
  echo $news_item->keterangan;
}
?>
<br><br><br><br><br><br>

HASIL PENGAWASAN DAN PEMBINAAN KLINIK KATEGORI ADMINISTRASI

<br>KLINIK : <?php foreach ($klinik as $news_item) { echo $news_item['nama'];}?>
<br>PERIODE : <?php foreach ($klinik as $news_item) { echo $news_item['periode'];}?>

<table border="1">
  <tr>
    <th>TANGGAL
</th>
    <th>KLINIK
</th>
    <th>LAP. PENYAKIT
</th>
  </tr>
  <tr>
    <td><?php foreach ($klinik as $news_item) { echo $news_item['tgl_mulai_izin'];}?></td>
    <td>asdfasfssdf</td>
    <td><?php foreach ($administrasi as $news_item) { echo $news_item->laporan;}?></td>
  </tr>
</table>

<br>
CATATAN  :
<?php foreach ($administrasi as $news_item) {
  echo $news_item->catatan;
}
?>
<br><br><br><br><br><br>
