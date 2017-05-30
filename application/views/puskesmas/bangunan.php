
<?php if ($this->session->flashdata('success_msg')) { ?>
      <div id="snackbar"> <?php echo $this->session->flashdata('success_msg') ?> </div>
  <?php } ?>
<main>
  <div class="title">
    <span><?php echo $title; ?></span>
      <div class="col s12 bred">
        <a href="#!" class="breadcrumb">Input Data Hasil Pengawasan</a>
      </div>
  </div>
  <nav class="teal">
    <div class="nav-wrapper ">
      <form>
        <div class="input-field">
          <input id="searchbox" type="search" required>
          <label for="searchbox" class="active"><i class="material-icons">cari</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>
  <div class="row">
    <div class="col s12 m8">
      <div class="card-panel white">
        <span class="black-text"><p><h3>Bangunan</h3></p>
        <div class="card-panel white">
            <p>Standart Bangunnan Permanen</p>
                <input name="group1" type="radio" id="test21" />
                    <label for="test21">Ya</label>
                <input name="group1" type="radio" id="test20" />
              <label for="test20">Tidak</label>
          </div>
        <div class="card-panel white">
            <p>Bangunan Berbentuk Fisik</p>
                <input name="group2" type="radio" id="2" />
                    <label for="2">Ya</label>
                <input name="group2" type="radio" id="3" />
              <label for="3">Tidak</label>
          </div>
        <div class="card-panel white">
           <p>Keterangan</p>
              <input name="group3" type="radio" id="test4" />
                <label for="test4">Ya</label>
                  <input name="group3" type="radio" id="test5" />
              <label for="test5">Tidak</label>
        </div>
            <div class="row">
              <div class="col s12">
                <div class="card-panel cus-tambah white lighten-2">
                  <div class="input-field col m6">
                      <a href="<?php echo site_url('puskesmas/puskesmas_ruangan'); ?>" class="waves-effect waves-light btn">Kembali</a>
                      <a href="<?php echo site_url('puskesmas/puskesmas_operasional'); ?>" class="waves-effect waves-light btn">Lanjutkan</a>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
</main>
