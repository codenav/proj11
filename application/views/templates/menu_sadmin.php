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
        <a href="<?php echo site_url('admin/beranda'); ?>" class="icon-menu"><i class="material-icons">assignment</i>Beranda</a>
      </li>
      <li>
        <a href="<?php echo site_url('admin/user_puskesmas'); ?>" class="icon-menu"><i class="material-icons">assignment</i>Tambah User Puskesmas</a>
      </li>
      <li>
        <a href="<?php echo site_url('admin/user_yankes'); ?>" class="icon-menu"><i class="material-icons">assignment</i>Tambah User Yankes</a>
      </li>
      <li>
        <a href="<?php echo site_url('admin/user_kadinkes'); ?>" class="icon-menu"><i class="material-icons">assignment</i>Tambah User Kadinkes</a>
      </li>
      <li>
        <a href="<?php echo site_url('admin/user_perizinan'); ?>" class="icon-menu"><i class="material-icons">assignment</i>Tambah User Perizinan</a>
      </li>
      <li>
        <a href="<?php echo site_url('login/logout'); ?>" class="icon-menu"><i class="material-icons">power_settings_new</i>Logout</a>
      </li>
    </ul>
  </li>
</ul>
