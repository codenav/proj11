<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/cetak_laporan.css"/>



<div class="head-surat">

  <div class="head_laporan">
    LAPORAN PENGAWASAN DAN PEMBINAAN KLINIK <br>
    <?php foreach ($klinik as $news_item) {
      echo $news_item['nama'];
    }?> <br>
    BANDUNG, <?php echo date("d-m-Y"); ?> <br>

  </div>
</div>
<br><br><br>
<div class="konten">
  <h2 class="laporan">1. Lokasi</h2>
    <?php foreach ($lokasi as $news_item) {
      echo $news_item->catatan;
    }
  ?>
  <br>

  <h2 class="laporan">2. Operasional</h2>
    <?php foreach ($operasional as $news_item) {
      echo $news_item->catatan;
  }
  ?>

  <h2 class="laporan">3. Bangunan dan Ruangan</h2>
    <?php foreach ($bangunan as $news_item) {
      echo $news_item->ctt_dan_saran_bangunan;
  }
  ?>

  <h2 class="laporan">4. Sarana dan Prasarana</h2>
    <?php foreach ($sarana as $news_item) {
      echo $news_item->keterangan;
  }
  ?>

  <h2 class="laporan">5. Sanitasi</h2>
    <?php foreach ($sanitasi as $news_item) {
      echo $news_item->keterangan;
  }
  ?>

  <h2 class="laporan">6. Tenaga Kesehatan</h2>
    <?php foreach ($tenaga as $news_item) {
      echo $news_item->keterangan;
  }
  ?>

  <h2 class="laporan">7. Catatan Rekam Medik</h2>
    <?php foreach ($rekam as $news_item) {
      echo $news_item->keterangan;
  }
  ?>

  <h2 class="laporan">8. Administrasi</h2>
    <?php foreach ($administrasi as $news_item) {
      echo $news_item->catatan;
  }
  ?>
  <br>


  <div class="p1">Pelaksana,<br>
  Pengawasan dan Pembinaan Klinik
</div>
<div class="p1 marp">
Penanggung Jawab Klinik
</div>
</div>
