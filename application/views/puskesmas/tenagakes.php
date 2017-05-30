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
        <span class="black-text"><p><h3>Tenaga Kesehatan</h3></p>
        <div class="card-panel white">
            <p>Dokter</p>
                <input name="group1" type="radio" id="test21" />
                    <label for="test21">Ya</label>
                <input name="group1" type="radio" id="test20" />
              <label for="test20">Tidak</label>
          </div>
        <div class="card-panel white">
            <p>STR Dokter</p>
                <input name="group2" type="radio" id="2" />
                    <label for="2">Ya</label>
                <input name="group2" type="radio" id="3" />
              <label for="3">Tidak</label>
          </div>
        <div class="card-panel white">
           <p>SIP Dokter</p>
              <input name="group3" type="radio" id="test4" />
                <label for="test4">Ya</label>
                  <input name="group3" type="radio" id="test5" />
              <label for="test5">Tidak</label>
        </div>
        <div class="card-panel white">
          <p>Perawat</p>
              <input name="group4" type="radio" id="test6" />
                  <label for="test6">Ya</label>
              <input name="group4" type="radio" id="test7" />
          <label for="test7">Tidak</label>
        </div>
        <div class="card-panel white">
          <p>STR Perawat</p>
            <input name="group5" type="radio" id="test8" />
              <label for="test8">Ya</label>
                <input name="group5" type="radio" id="test9" />
            <label for="test9">Tidak</label>
          </div>
          <div class="card-panel white">
            <p>SIP Perawat</p>
              <input name="group6" type="radio" id="test10" />
                <label for="test10">Ya</label>
                <input name="group6" type="radio" id="test11" />
            <label for="test11">Tidak</label>
          </div>
          <div class="card-panel white">
            <p>Bidan</p>
              <input name="group7" type="radio" id="test12" />
                <label for="test12">Ya</label>
                  <input name="group7" type="radio" id="test13" />
              <label for="test13">Tidak</label>
           </div>
           <div class="card-panel white">
             <p>STR Bidan</p>
               <input name="group8" type="radio" id="test14" />
                 <label for="test12">Ya</label>
                   <input name="group8" type="radio" id="test15" />
               <label for="test15">Tidak</label>
            </div>
            <div class="card-panel white">
              <p> SIP Bidan</p>
                <input name="group9" type="radio" id="test16" />
                  <label for="test16">Ya</label>
                    <input name="group9" type="radio" id="test17" />
                <label for="test17">Tidak</label>
             </div>
             <div class="card-panel white">
               <p> SIP Bidan</p>
                 <input name="group9" type="radio" id="test16" />
                   <label for="test16">Ya</label>
                     <input name="group9" type="radio" id="test17" />
                 <label for="test17">Tidak</label>
              </div>
              <div class="card-panel white">
                <p>Apoteker</p>
                  <input name="group10" type="radio" id="test18" />
                    <label for="test18">Ya</label>
                      <input name="group10" type="radio" id="test19" />
                  <label for="test19">Tidak</label>
               </div>
               <div class="card-panel white">
                 <p>SIPA Apoteker</p>
                   <input name="group11" type="radio" id="test20" />
                     <label for="test20">Ya</label>
                       <input name="group11" type="radio" id="test21" />
                   <label for="test21">Tidak</label>
                </div>
                <div class="card-panel white">
                  <p>Analis</p>
                    <input name="group12" type="radio" id="test22" />
                      <label for="test23">Ya</label>
                        <input name="group12" type="radio" id="test23" />
                    <label for="test23">Tidak</label>
                 </div>
                 <div class="card-panel white">
                   <p>SIP Analis</p>
                     <input name="group13" type="radio" id="test24" />
                       <label for="test24">Ya</label>
                         <input name="group13" type="radio" id="test24" />
                     <label for="test24">Tidak</label>
                  </div>
                  <div class="card-panel white">
                    <p>STR Analis</p>
                      <input name="group14" type="radio" id="test25" />
                        <label for="test25">Ya</label>
                          <input name="group14" type="radio" id="test26" />
                      <label for="test26">Tidak</label>
                   </div>
                   <div class="card-panel white">
                     <p>Gizi</p>
                       <input name="group15" type="radio" id="test27" />
                         <label for="test27">Ya</label>
                           <input name="group15" type="radio" id="test28" />
                       <label for="test28">Tidak</label>
                    </div>
                    <div class="card-panel white">
                      <p>STR Gizi</p>
                        <input name="group16" type="radio" id="test29" />
                          <label for="test29">Ya</label>
                            <input name="group16" type="radio" id="test30" />
                        <label for="test30">Tidak</label>
                     </div>
                     <div class="card-panel white">
                       <p>SIP Gizi</p>
                         <input name="group17" type="radio" id="test31" />
                           <label for="test31">Ya</label>
                             <input name="group17" type="radio" id="test32" />
                         <label for="test32">Tidak</label>
                      </div>
                      <div class="card-panel white">
                        <p>Keterangan</p>
                          <input name="group14" type="radio" id="test25" />
                            <label for="test25">Ya</label>
                              <input name="group14" type="radio" id="test25" />
                          <label for="test25">Tidak</label>
                       </div>
            <div class="row">
              <div class="col s12">
                <div class="card-panel cus-tambah white lighten-2">
                  <div class="input-field col m6">
                    <a href="<?php echo site_url('puskesmas/puskesmas_medrek'); ?>" class="waves-effect waves-light btn">Kembali</a>
                      <a href="<?php echo site_url('puskesmas/puskesmas_administrasi'); ?>" class="waves-effect waves-light btn">Lanjutkan</a>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
</main>
