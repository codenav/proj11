<?php if ($this->session->flashdata('success_msg')) { ?>
      <div id="snackbar"> <?php echo $this->session->flashdata('success_msg') ?> </div>
  <?php } ?>
  <main>
    <div class="content">
      <div class="row">

        <div class="col m4">
          <div class="card-panel custom red lighten-2">
            <span class="white-text">
              <i class="material-icons cus-icon">work</i>
              <h4>Jumlah Klinik Periode I Tahun 2017</h4>
              <h3>123</h3>
            </span>
          </div>
        </div>
        <div class="col m4">
          <div class="card-panel custom blue lighten-2">
            <span class="white-text">
              <i class="material-icons cus-icon">equalizer</i>
              <h4>Jumlah Klinik Periode II Tahun 2017</h4>
              <h3>0</h3>
            </span>
          </div>
        </div>
        <div class="col m4">
          <div class="card-panel custom orange lighten-2">
            <span class="white-text">
              <i class="material-icons cus-icon">school</i>
              <h4>Jumlah Puskesmas</h4>
              <h3>73</h3>
            </span>
          </div>
        </div>
      </div>
  </main>
