<?php if ($this->session->flashdata('success_msg')) { ?>
      <div id="snackbar"> <?php echo $this->session->flashdata('success_msg') ?> </div>
  <?php } ?>
<main>
  <div class="title">
    <span><?php echo $title; ?></span>
      <div class="col s12 bred">
        <a href="#!" class="breadcrumb">Puskesmas</a>
        <a href="#!" class="breadcrumb">Data Klinik</a>
      </div>
  </div>
  <nav class="teal">
    <div class="nav-wrapper ">
      <form>
        <div class="input-field">
          <input id="searchbox" type="search" required>
          <label for="searchbox" class="active"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>

  <div class="content ">
    <div class="card-panel white lighten-2">
        <div class="content ">
          <div class="card-panel white lighten-2">

          <table class="highlight striped" id="example">
            <thead>
              <tr>
                <th>No</th>
                <th>No Surat Izin</th>
                <th>Tanggal Mulai Izin</th>
                <th>Nama Klinik</th>
                <th>Alamat</th>
                <th>Kecamatan</th>
                <th>Lihat</th>
              </tr>
            </thead>
          </table>
        </div>
        </div>
  </div>
  </div>


</main>
