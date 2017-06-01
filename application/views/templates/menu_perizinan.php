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
      <a href="#" class="icon-menu"><span class="nama"><i class="material-icons">account_circle</i><?php echo $this->session->userdata('username') ?></span></a>
    </div>
  </li>

  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a href="<?php echo site_url('perizinan/beranda'); ?>" class="icon-menu"><i class="material-icons">assignment</i>Beranda</a>
      </li>
      <li>
        <a href="<?php echo site_url('perizinan/data_dasar'); ?>" class="icon-menu"><i class="material-icons">assignment</i>Isi Data Dasar Klinik</a>
      </li>
      <li>
        <a href="<?php echo site_url('perizinan/lihat_data_dasar'); ?>" class="icon-menu"><i class="material-icons">assignment</i>Daftar Klinik</a>
      </li>
      <li>
        <a href="<?php echo site_url('login/logout'); ?>" class="icon-menu"><i class="material-icons">power_settings_new</i>Logout</a>
      </li>
    </ul>
  </li>
</ul>
