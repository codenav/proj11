<?php if ($this->session->flashdata('success_msg')) { ?>
      <div id="snackbar"> <?php echo $this->session->flashdata('success_msg') ?> </div>
  <?php } ?>
<main>
  <div class="content">
    <div class="row">
    
      <div class="col s6 m2">
        <div class="card-panel custom red lighten-2">
          <span class="white-text">
            <i class="material-icons cus-icon">work</i>
            <h4>Jumlah Pengajuan Hari Ini</h4>
            <h3>123</h3>
          </span>
        </div>
      </div>
      <div class="col s6 m2">
        <div class="card-panel custom blue lighten-2">
          <span class="white-text">
            <i class="material-icons cus-icon">equalizer</i>
            <h4>Jumlah Pengajuan Minggu Ini</h4>
            <h3>123</h3>
          </span>
        </div>
      </div>
      <div class="col s6 m2">
        <div class="card-panel custom orange lighten-2">
          <span class="white-text">
            <i class="material-icons cus-icon">school</i>
            <h4>Total Pengajuan Penelitian</h4>
            <h3>123</h3>
          </span>
        </div>
      </div>
      <div class="col s6 m2">
        <div class="card-panel custom brown lighten-2">
          <span class="white-text">
            <i class="material-icons cus-icon">face</i>
            <h4>Total Pengajuan Kerja Praktek</h4>
            <h3>123</h3>
          </span>
        </div>
      </div>
      <div class="col s6 m2">
        <div class="card-panel custom green lighten-2">
          <span class="white-text">
            <i class="material-icons cus-icon">assignment_ind</i>
            <h4>Total Semua Pengajuan</h4>
            <h3>123</h3>
          </span>
        </div>
      </div>
    </div>
    <!-- Grafik -->
    <div class="row">
      <div class="col s12">
        <div class="card-panel white lighten-2">
          <span class="black-text">
            <h4 class="title-grafik">Grafik Pengajuan Perbulan</h4>
            <canvas id="myChart"></canvas>
          </span>
        </div>
      </div>
    </div>

</div>
</main>

<script type="text/javascript">
  window.onload = function() {
    var ctx = $("#myChart").get(0).getContext("2d");
    var data = {
      labels: [1,2,3],
      datasets: [
        {
          fillColor: "rgba(51,153,153,0.5)",
          strokeColor: "#339999",
          pointColor: "#339999",
          pointStrokeColor: "#fff",
          data: [3,4,5]
        }
      ]
    }
    var myNewChart = new Chart(ctx).Line(data);
  };
</script>
