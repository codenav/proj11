<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=Data-Klinik.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<?php foreach ($pengawasan as $news_item) {
  echo "<h3>KLINIK : ".$news_item->nama."</h3>";
  echo "<h3>PERIODE : ".$news_item->periode."</h3>";
}?>
<h3>HASIL PENGAWASAN DAN PEMBINAAN KATEGORI KESESUAIAN LOKASI</h3>


<table border='1' width="70%">
  <tr>
    <th>No</th>
    <th>Uraian</th>
    <th>Hasil</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Keseuainan Lokasi</td>
    <td>
      <?php foreach ($lokasi as $news_item) {
        echo $news_item->st_lokasi;
      }?>
    </td>
    </tr>
    </table>
<h3>HASIL PENGAWASAN DAN PEMBINAAN KLINIK KATEGORI OPERASIONAL</h3>
<table border='1' width="70%">
  <tr>
    <th>No</th>
    <th>Uraian</th>
    <th>Hasil</th>
  </tr>
  <tr>
  <td>1</td>
  <td>Status Operasi</td>
  <td>
    <?php foreach ($operasional as $news_item) {
      echo $news_item->st_beroprasi;
  }?>
  </td>
  </tr>
  <tr>
    <td>2</td>
    <td>Pemasangan Plat Nama dan Klasifikasi</td>
    <td>
      <?php foreach ($operasional as $news_item) { echo $news_item->st_plat;}?>
    </td>
  <tr>
    <td>3</td>
    <td>Kesesuaian Lokasi Jenis Layanan Dengan Izin</td>
    <td>
      <?php foreach ($operasional as $news_item) { echo $news_item->st_kesesuaian_jenis_ijin_operasional;}?>
    </td>
  </tr>
  <tr>
    <td>4</td>
    <td>Catatan Opreasional Jenis Layanan di Klinik</td>
    </tr>
</table>
<h3>HASIL PENGAWASAN DAN PEMBINAAN KLINIK KATEGORI BANGUNAN</h3>
<table border='1' width="70%">
    <tr>
        <th>No</th>
        <th>Uraian</th>
        <th>Hasil</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Bangunan Permanen</td>
        <td>
  <?php foreach ($bangunan as $news_item) { echo $news_item->st_bangunan_permanen;}?>
        </td>

    <tr>
        <td>2</td>
        <td>Bangunan Bergabung Fisik Dengan Tempat Tinggal Perorangan</td>
        <td>
  <?php foreach ($bangunan as $news_item) { echo $news_item->bangunan_bergabung_fisik;}?>
        </td>

    <tr>
        <td>3</td>
        <td>Catatan Keseuian Bangunan</td>
    </tr>
</table>


<h3>HASIL PENGAWASAN DAN PEMBINAAN KLINIK KATEGORI RUANGAN</h3>
<table border='1' width="70%">
  <tr>
    <th>No</th>
    <th>Uraian</th>
    <th>Hasil</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Ruangan Kosultasi</td>
    <?php
    $i=1;
    if ($ruangan > 0 ) {
    foreach ($ruangan as $news_item) { ?>
      <!-- atribut di table database -->
      <td><?php echo $news_item->ruang_konsul; ?></td>
      <?php } } ?>
  <tr>
    <td>2</td>
    <td>Ruang Administrasi</td>
    <?php
    $i=1;
    if ($ruangan > 0 ) {
    foreach ($ruangan as $news_item) { ?>
      <!-- atribut di table database -->
      <td><?php echo $news_item->ruang_admin; ?></td>
      <?php } } ?>
  </tr>
  <tr>
    <td>3</td>
    <td>Ruang Obat Pada Pelayanan Farmasi</td>
    <?php
    $i=1;
    if ($ruangan > 0 ) {
    foreach ($ruangan as $news_item) { ?>
      <!-- atribut di table database -->
      <td><?php echo $news_item->ruang_obat; ?></td>
      <?php } } ?>
  </tr>
  <tr>
    <td>4</td>
    <td>Ruang Tindakan</td>
    <?php
    $i=1;
    if ($ruangan > 0 ) {
    foreach ($ruangan as $news_item) { ?>
      <!-- atribut di table database -->
      <td><?php echo $news_item->ruang_tindakan; ?></td>
      <?php } } ?>
  </tr>
  <tr>
    <td>5</td>
    <td>Pojok ASI</td>
    <?php
    $i=1;
    if ($ruangan > 0 ) {
    foreach ($ruangan as $news_item) { ?>
      <!-- atribut di table database -->
      <td><?php echo $news_item->ruang_asi; ?></td>
      <?php } } ?>
  </tr>
  <tr>
    <td>6</td>
    <td>Kamar Mandi</td>
    <?php
    $i=1;
    if ($ruangan > 0 ) {
    foreach ($ruangan as $news_item) { ?>
      <!-- atribut di table database -->
      <td><?php echo $news_item->ruang_mandi; ?></td>
      <?php } } ?>
  </tr>
  <tr>
    <td>7</td>
    <td>Catatan Ketersediaan Ruangan</td>
  </tr>
  </table>


  <h3>HASIL PENGAWASAN DAN PEMBINAAN KLINIK KATEGORI SARANA PRASARANA</h3>
  <table border='1' width="70%">
      <tr>
        <th>No</th>
        <th>Uraian</th>
        <th>Hasil</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Instalasi Listrik</td>
        <?php
        $i=1;
        if ($sarana_prasarana > 0 ) {
        foreach ($sarana_prasarana as $news_item) { ?>
        <td><?php echo $news_item->instalasi_listrik; ?></td>
        <?php } } ?>
      </tr>
      <tr>
        <td>2</td>
        <td>Pencegahan Penaggualangan Kebaakaran</td>
        <?php
        $i=1;
        if ($sarana_prasarana > 0 ) {
        foreach ($sarana_prasarana as $news_item) { ?>
        <td><?php echo $news_item->instalasi_kebakaran; ?></td>
        <?php } } ?>
      </tr>
      <tr>
        <td>3</td>
        <td>Sarana Gas Medis</td>
        <?php
        $i=1;
        if ($sarana_prasarana > 0 ) {
        foreach ($sarana_prasarana as $news_item) { ?>
        <td><?php echo $news_item->sarana_gas_mds; ?></td>
        <?php } } ?>
      </tr>
      <tr>
        <td>4</td>
        <td>Sarana Tata Udara</td>
        <?php
        $i=1;
        if ($sarana_prasarana > 0 ) {
        foreach ($sarana_prasarana as $news_item) { ?>
        <td><?php echo $news_item->tata_udara; ?></td>
        <?php } } ?>
      </tr>
      <tr>
        <td>5</td>
        <td>Sarana Pencahayaan</td>
        <?php
        $i=1;
        if ($sarana_prasarana > 0 ) {
        foreach ($sarana_prasarana as $news_item) { ?>
        <td><?php echo $news_item->sarana_pencahayaan; ?></td>
        <?php } } ?>
      </tr>
      <tr>
        <td>6</td>
        <td>Sarana Air Bersih</td>
        <?php
        $i=1;
        if ($sarana_prasarana > 0 ) {
        foreach ($sarana_prasarana as $news_item) { ?>
        <td><?php echo $news_item->air_bersih; ?></td>
        <?php } } ?>
      </tr>
      <tr>
        <td>7</td>
        <td>Ambulans</td>
        <?php
        $i=1;
        if ($sarana_prasarana > 0 ) {
        foreach ($sarana_prasarana as $news_item) { ?>
        <td><?php echo $news_item->ambulans; ?></td>
        <?php } } ?>
      </tr>
      <tr>
        <td>8</td>
        <td>Jumlah TT</td>
        <?php
        $i=1;
        if ($sarana_prasarana > 0 ) {
        foreach ($sarana_prasarana as $news_item) { ?>
        <td><?php echo $news_item->kat_jml_tt; ?></td>
        <?php } } ?>
      </tr>
      <tr>
        <td>7</td>
        <td>Catatan Sarana Prasaran</td>
      </tr>
    </table>

  <h3>HASIL PENGAWASAN DAN PEMBINAAN KLINIK KATEGORI PERALATAN</h3>
  <<table border='1' width="70%">
    <tr>
      <th>No</th>
      <th>Uraian</th>
      <th>Hasil</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Peralatan</td>
    </tr>

  </table>


<h3>HASIL PENGAWASAN DAN PEMBINAAN KLINIK KATEGORI SARANA SANITASI</h3>
  <table border='1' width="70%">
      <tr>
        <th>No</th>
        <th>Uraian</th>
        <th>Hasil</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Instalasi Sanitasi</td>
        <?php
        $i=1;
        if ($sanitasi > 0 ) {
        foreach ($sanitasi as $news_item) { ?>
        <td><?php echo $news_item->tsmp_medis; ?></td>
        <?php } } ?>
      </tr>
      <tr>
        <td>2</td>
        <td>Tempat Sampah</td>
        <?php
        $i=1;
        if ($sanitasi > 0 ) {
        foreach ($sanitasi as $news_item) { ?>
        <td><?php echo $news_item->tsmp_organik; ?></td>
        <?php } } ?>
      </tr>
      <tr>
        <td>3</td>
        <td>Wastafel</td>
        <?php
        $i=1;
        if ($sanitasi > 0 ) {
        foreach ($sanitasi as $news_item) { ?>
        <td><?php echo $news_item->wastafel; ?></td>
        <?php } } ?>
      </tr>
      <tr>
        <td>4</td>
        <td>Saluran Air Kotor</td>
        <?php
        $i=1;
        if ($sanitasi > 0 ) {
        foreach ($sanitasi as $news_item) { ?>
        <td><?php echo $news_item->saluran_air_kotor; ?></td>
        <?php } } ?>
      </tr>
      <tr>
        <td>5</td>
        <td>Pengelolaan Limbah Medis</td>
        <?php
        $i=1;
        if ($sanitasi > 0 ) {
        foreach ($sanitasi as $news_item) { ?>
        <td><?php echo $news_item->limbah_mds; ?></td>
        <?php } } ?>
      </tr>
      <tr>
        <td>6</td>
        <td>Catatan Sanitasi</td>
      </tr>
  </table>

        <h3>HASIL PENGAWASAN DAN PEMBINAAN KLINIK KATEGORI REKAM MEDIS</h3>
        <table border='1' width="70%">
          <tr>
            <th>No</th>
            <th>Uraian</th>
            <th>Hasil</th>
          </tr>
          <tr>
            <td>1</td>
            <td>Identitas Klien</td>
            <?php
            $i=1;
            if ($rekam_medik > 0 ) {
            foreach ($rekam_medik as $news_item) { ?>
            <td><?php echo $news_item->id_pasien; ?></td>
            <?php } } ?>
          </tr>
          <tr>
            <td>2</td>
            <td>Kelengkapan Anamnesis</td>
            <?php
            $i=1;
            if ($rekam_medik > 0 ) {
            foreach ($rekam_medik as $news_item) { ?>
            <td><?php echo $news_item->kelengkapan_anamnesa; ?></td>
            <?php } } ?>
          </tr>
          <tr>
            <td>3</td>
            <td>Hasil Pemeriksaan Fisik</td>
            <?php
            $i=1;
            if ($rekam_medik > 0 ) {
            foreach ($rekam_medik as $news_item) { ?>
            <td><?php echo $news_item->fisik; ?></td>
            <?php } } ?>
          </tr>
          <tr>
            <td>4</td>
            <td>Jenis Terapi/tindakan Sesuai Hasil Pemeriksaan Fisik</td>
            <?php
            $i=1;
            if ($rekam_medik > 0 ) {
            foreach ($rekam_medik as $news_item) { ?>
            <td><?php echo $news_item->jenis_terapi; ?></td>
            <?php } } ?>
          </tr>
          <tr>
            <td>5</td>
            <td>Follow UP Therapy / Tindakan</td>
            <?php
            $i=1;
            if ($rekam_medik > 0 ) {
            foreach ($rekam_medik as $news_item) { ?>
            <td><?php echo $news_item->tindakan; ?></td>
            <?php } } ?>
          </tr>
          <tr>
            <td>6</td>
            <td>Nama dan Tanda Tangan Pemeriksa</td>
            <?php
            $i=1;
            if ($rekam_medik > 0 ) {
            foreach ($rekam_medik as $news_item) { ?>
            <td><?php echo $news_item->nama_ttd_pemeriksa; ?></td>
            <?php } } ?>
          </tr>
          <tr>
            <td>7</td>
            <td>Catatan Rekam Medis</td>
          </tr>
  </table>

  <h3>HASIL PENGAWASAN DAN PEMBINAAN KLINIK KATEGORI SARANA TENAGA KESEHATAN</h3>
  <table border='1' width="70%">
    <tr>
      <th>No</th>
      <th>Uraian</th>
      <th>Hasil</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Dokter</td>
      <?php
      $i=1;
      if ($tenaga_kesehatan > 0 ) {
      foreach ($tenaga_kesehatan as $news_item) { ?>
      <td><?php echo $news_item->dokter; ?></td>
      <?php } } ?>
    </tr>
    <tr>
      <td>2</td>
      <td>STR Dokter</td>
      <?php
      $i=1;
      if ($tenaga_kesehatan > 0 ) {
      foreach ($tenaga_kesehatan as $news_item) { ?>
      <td><?php echo $news_item->str_dokter; ?></td>
      <?php } } ?>
    </tr>
    <tr>
      <td>3</td>
      <td>SIP Dokter</td>
      <?php
      $i=1;
      if ($tenaga_kesehatan > 0 ) {
      foreach ($tenaga_kesehatan as $news_item) { ?>
      <td><?php echo $news_item->sip_dokter; ?></td>
      <?php } } ?>
    </tr>
    <tr>
      <td>4</td>
      <td>Perawat</td>
      <?php
      $i=1;
      if ($tenaga_kesehatan > 0 ) {
      foreach ($tenaga_kesehatan as $news_item) { ?>
      <td><?php echo $news_item->perawat; ?></td>
      <?php } } ?>
    </tr>
    <tr>
      <td>5</td>
      <td>STR Perawat</td>
      <?php
      $i=1;
      if ($tenaga_kesehatan > 0 ) {
      foreach ($tenaga_kesehatan as $news_item) { ?>
      <td><?php echo $news_item->str_perawat; ?></td>
      <?php } } ?>
    </tr>
    <tr>
      <td>6</td>
      <td>SIP Perawat</td>
      <?php
      $i=1;
      if ($tenaga_kesehatan > 0 ) {
      foreach ($tenaga_kesehatan as $news_item) { ?>
      <td><?php echo $news_item->sip_perawat; ?></td>
      <?php } } ?>
    </tr>
    <tr>
      <td>7</td>
      <td>Apotker</td>
      <?php
      $i=1;
      if ($tenaga_kesehatan > 0 ) {
      foreach ($tenaga_kesehatan as $news_item) { ?>
      <td><?php echo $news_item->apoteker; ?></td>
      <?php } } ?>
    </tr>
    <tr>
      <td>8</td>
      <td>SIK</td>
      <?php
      $i=1;
      if ($tenaga_kesehatan > 0 ) {
      foreach ($tenaga_kesehatan as $news_item) { ?>
      <td><?php echo $news_item->sik_apoteker; ?></td>
      <?php } } ?>
    </tr>
    <tr>
      <td>7</td>
      <td>SIPA</td>
      <?php
      $i=1;
      if ($tenaga_kesehatan > 0 ) {
      foreach ($tenaga_kesehatan as $news_item) { ?>
      <td><?php echo $news_item->sipa_apoteker; ?></td>
      <?php } } ?>
    </tr>
    <tr>
      <td>9</td>
      <td>Analisis Kesehatan</td>
      <?php
      $i=1;
      if ($tenaga_kesehatan > 0 ) {
      foreach ($tenaga_kesehatan as $news_item) { ?>
      <td><?php echo $news_item->analisis; ?></td>
      <?php } } ?>
    </tr>
    <tr>
      <td>10</td>
      <td>STR</td>
      <?php
      $i=1;
      if ($tenaga_kesehatan > 0 ) {
      foreach ($tenaga_kesehatan as $news_item) { ?>
      <td><?php echo $news_item->sip_analis; ?></td>
      <?php } } ?>
    </tr>
    <tr>
      <td>11</td>
      <td>SIP</td>
      <?php
      $i=1;
      if ($tenaga_kesehatan > 0 ) {
      foreach ($tenaga_kesehatan as $news_item) { ?>
      <td><?php echo $news_item->str_analis; ?></td>
      <?php } } ?>
    </tr>
    <tr>
      <td>12</td>
      <td>Gizi</td>
      <?php
      $i=1;
      if ($tenaga_kesehatan > 0 ) {
      foreach ($tenaga_kesehatan as $news_item) { ?>
      <td><?php echo $news_item->gizi; ?></td>
      <?php } } ?>
    </tr>
    <tr>
      <td>13</td>
      <td>STR</td>
      <?php
      $i=1;
      if ($tenaga_kesehatan > 0 ) {
      foreach ($tenaga_kesehatan as $news_item) { ?>
      <td><?php echo $news_item->str_gizi; ?></td>
      <?php } } ?>
    </tr>
    <tr>
      <td>14</td>
      <td>SIP</td>
      <?php
      $i=1;
      if ($tenaga_kesehatan > 0 ) {
      foreach ($tenaga_kesehatan as $news_item) { ?>
      <td><?php echo $news_item->sip_gizi; ?></td>
      <?php } } ?>
    </tr>
    <tr>
      <td>17</td>
      <td>Catatan Tenaga Kesehatan</td>
    </tr>
    </table>

      <h3>HASIL PENGAWASAN DAN PEMBINAAN KLINIK KATEGORI ADMINISTRASI</h3>
      <table border='1' width="70%">
          <tr>
            <th>No</th>
            <th>Uraian</th>
            <th>Hasil</th>
          </tr>
          <tr>
            <td>1</td>
            <td>Laporan Penyakit LB 1</td>
            <?php
            $i=1;
            if ($administrasi > 0 ) {
            foreach ($administrasi as $news_item) { ?>
            <td><?php echo $news_item->laporan; ?></td>
            <?php } } ?>
          </tr>
        </table>
