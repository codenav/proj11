<?php if (validation_errors()) { ?>
      <div id="snackbar"> <?php echo validation_errors(); ?> </div>
  <?php } ?>
<?php
$attributes = array('onsubmit' => "return validate();");
echo form_open('puskesmas/puskesmas_pengawasan/',$attributes);
?>
<main>

  <div class="title">
    <span><?php echo $title; ?></span>
      <div class="col s12 bred">
        <a href="#!" class="breadcrumb">Input Pengawasasn Klinik</a>
      </div>
  </div>
  <div class="content">
    <div class="row form">
      <div class="col s12">
        <div class="card-panel cus-tambah white lighten-2">
          <p class="sub-tit teal lighten-2">Input Pengawasan Klinik</p>
          <div class="content">
            <div class="row">
              <div class="input-field col m6">
                  <select name="no_surat_izin">
                    <option disabled selected>Pilih klinik</option>
                    <?php foreach ($klinik as $news_item) { ?>
                      <option value="<?php echo $news_item->no_surat_izin; ?> "><?php echo $news_item->nama; ?></option>
                      <?php } ?>
                  </select>
                  <label>Pilih Klinik</label>
                  </div>
                  <div class="input-field col s6">
                    <label class="active" for="dibuat">Tanggal input :</label>
                    <input type="date" class="datepicker" id="dibuat" name="tgl_mulai_izin" value="<?php echo date("Y-m-d"); ?>">
                  </div>
                  <div class="input-field col m6">
                    <select name="periode">
                      <option value="" disabled selected>Pilh Periode</option>
                      <option value="1">I</option>
                      <option value="2">II</option>
                      </select>
                    <label>Pilih Klinik</label>
                </div>
            </div>
          </div>
        </div>
      </div>

        <div class="col s12">
          <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Tambahkan
            <i class="material-icons right">send</i>
            </button>
          <!-- </button>
          <!-- <a href="<?php echo site_url('puskesmas/puskesmas_pengawasan'); ?>" class="btn waves-effect waves-light btn-large type="submit" name="action"">Input</a> -->
          </button>
        </div>
    </div>
  </div>
</main>
<?php echo form_close();?>
