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
      <div class="col s12">
        <div class="card-panel cus-tambah white lighten-2">
          <div class="input-field col m6">
            <select>
                <option value="" disabled selected>Pilih Klinik</option>
                <option value="1">KLinik A</option>
                <option value="2">Klinik B</option>
                <option value="3">Klinik C</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <div class="card-panel cus-tambah white lighten-2">
          <div class="input-field col m6">
              <a class="waves-effect waves-light btn">Lanjutkan</a>
          </div>
        </div>
      </div>
    </div>
</main>
