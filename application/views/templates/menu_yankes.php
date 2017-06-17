<ul class="side-nav fixed" id="scroll">
  <li>
    <div class="userView">
    <div class="background"></div>
      <a href="#!user" class="logo"><img class="responsive-img" src="<?php echo base_url() ?>assets/img/logo.png"></a>
      <span class="sub-title-web">dinas kesehatan <br> kota bandung</span>
    </div>
  </li>
  <li>
    <div class="userView user">
      <div class="background teal lighten-1"></div>
      <a href="#" class="icon-menu">
        <span class="nama">Petugas Pengelolaan Klinik</span>
      </a>
      <a href="#" class="icon-menu">
        <span class="nama">Tingkat Kota</span>
      </a>
    </div>
  </li>

  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a href="<?php echo site_url('yankes/klinik'); ?>" class="icon-menu"><i class="material-icons">assignment</i>Lihat Klinik</a>
      </li>
      <li>
        <a href="<?php echo site_url(''); ?>" class="icon-menu"><i class="material-icons">assignment</i>Lihat Laporan</a>
      </li>
      <li>
        <a href="<?php echo site_url(''); ?>" class="icon-menu"><i class="material-icons">assignment</i>Cetak Laporan</a>
      </li>
      <li>
        <a href="<?php echo site_url('puskesmas/puskesmas_daftar_klinik_takberizin'); ?>" class="icon-menu"><i class="material-icons">assignment</i>Klinik Tidak Terdaftar</a>
      </li>
      <li>
        <a href="<?php echo site_url('login/logout'); ?>" class="icon-menu"><i class="material-icons">power_settings_new</i>Logout</a>
      </li>
    </ul>
  </li>
</ul>
