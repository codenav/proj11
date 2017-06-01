<ul class="side-nav fixed" id="scroll">
  <li>
    <div class="userView">
    <div class="background"></div>
      <a href="<?php echo site_url('penelitian/lihat'); ?>" class="logo"><img class="responsive-img" src="<?php echo base_url() ?>assets/img/logo.png"></a>
      <span class="sub-title-web">dinas kesehatan <br> kota bandung</span>
    </div>
  </li>
  <li>
    <div class="userView user">
      <div class="background teal lighten-1"></div>
      <a href="<?php echo site_url('penelitian/lihat'); ?>" class="icon-menu"><span class="nama"><i class="material-icons">account_circle</i><?php echo $this->session->userdata('username') ?></span></a>
    </div>
  </li>

  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a href="<?php echo site_url('penelitian/lihat'); ?>" class="icon-menu"><i class="material-icons">assignment</i>Beranda</a>
      </li>
      <li>
        <a class="collapsible-header waves-effect waves-teal icon-menu">
          <i class="material-icons">assignment</i>Input Hasil Pengawasan
        </a>
        <div class="collapsible-body">
          <ul>
            <li><a href="<?php echo site_url('puskesmas/puskesmas_input'); ?>">Inut Data</a></li>
          </ul>
        </div>
      </li>
      <li>
        <a href="<?php echo site_url('puskesmas/daftar_klinik'); ?>" class="icon-menu"><i class="material-icons">assignment</i>Daftar Klinik</a>
      </li>
      <li>
        <a class="collapsible-header waves-effect waves-teal icon-menu">
          <i class="material-icons">assignment</i>
          Laporan Klinik
        </a>
        <div class="collapsible-body">
          <ul>
            <li><a href="<?php echo site_url(''); ?>">Pilih Klinik </a></li>
            <li><a href="<?php echo site_url(''); ?>">Pilih Periode</a></li>
          </ul>
        </div>
      </li>
      <li>
        <a href="<?php echo site_url(''); ?>" class="icon-menu"><i class="material-icons">assignment</i>Lihat Daftar Klinik</a>
      </li>
      <li>
        <a href="<?php echo site_url(''); ?>" class="icon-menu"><i class="material-icons">assignment</i>Download Hasil Pengawasan</a>
      </li>
      <li>
        <a href="<?php echo site_url('login/logout'); ?>" class="icon-menu"><i class="material-icons">power_settings_new</i>Logout</a>
      </li>
    </ul>
  </li>
</ul>
