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
<<<<<<< HEAD
        <a href="<?php echo site_url('klinik/lihat'); ?>" class="icon-menu"><i class="material-icons">assignment</i>Lihat</a>
      </li>
      <li>
        <a href="<?php echo site_url(''); ?>" class="icon-menu"><i class="material-icons">assignment</i>Cetak</a>
=======
        <a href="<?php echo site_url('klinik/beranda'); ?>" class="icon-menu"><i class="material-icons">assignment</i>Beranda</a>
      </li>
      <li>
        <a href="<?php echo site_url('klinik/lihat_data'); ?>" class="icon-menu"><i class="material-icons">assignment</i>Lihat Data Hasil Puskesmas</a>
>>>>>>> 5231cabab6897ab8c4616bdc3652d34673cf5bf9
      </li>
      <li>
        <a href="<?php echo site_url('login/logout'); ?>" class="icon-menu"><i class="material-icons">power_settings_new</i>Logout</a>
      </li>
    </ul>
  </li>
</ul>
