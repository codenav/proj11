<?php
require_once('preloader.php');
require_once('header.php');
if ($this->session->userdata('akses') == "super_admin") {
  require_once('menu_sadmin.php');
}elseif ($this->session->userdata('akses') == "admin_datin") {
  require_once('menu_puskesmas.php');
}elseif ($this->session->userdata('akses') == "admin_pkl") {
  require_once('menu_pkl.php');
}elseif ($this->session->userdata('akses') == "puskesmas") {
  require_once('menu_puskesmas.php');
}elseif ($this->session->userdata('akses') == "kadinkes") {
  require_once('menu_kadinkes.php');
}elseif ($this->session->userdata('akses') == "perizinan") {
  require_once('menu_perizinan.php');
}elseif ($this->session->userdata('akses') == "yankes") {
  require_once('menu_yankes.php');
}elseif ($this->session->userdata('akses') == "klinik") {
  require_once('menu_klinik.php');
}
require_once('content.php');
require_once('footer.php');
