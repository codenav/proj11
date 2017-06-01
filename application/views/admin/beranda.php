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
            <h4>jumlah klinik</h4>
            <h3>1234</h3>
          </span>
        </div>
      </div>
      <div class="col m4">
        <div class="card-panel custom blue lighten-2">
          <span class="white-text">
            <i class="material-icons cus-icon">equalizer</i>
            <h4>jumlah puskesmas</h4>
            <h3>123</h3>
          </span>
        </div>
      </div>
      <div class="col m4">
        <div class="card-panel custom orange lighten-2">
          <span class="white-text">
            <i class="material-icons cus-icon">school</i>
            <h4>jumlah klinik tervalidasi</h4>
            <h3>123</h3>
          </span>
        </div>
      </div>
    </div>
    <!-- Gr -->
    <div class="row">
      <div class="col s12">
        <div class="card-panel white lighten-2">
          <span class="black-text">
            <h4 class="title-grafik">Grafik Jumlah Klinik Perbulan</h4>
            <canvas id="myChart"></canvas>
          </span>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col s6">
        <div class="collection z-depth-1">
          <a href="#!" class="collection-item active teal lighten-2">5 klinik baru dalam proses perizinan<span class="badge"></span></a>
          <a href="#!" class="collection-item">Institusi<span class="badge">Jumlah</span></a>
            <a href="#!" class="collection-item">asdsa<span class="badge">  asdad</span></a>
        </div>
      </div>
      <div class="col s6">
        <div class="collection z-depth-1">
          <a href="#!" class="collection-item active teal lighten-2">5 klinik sudah di falidasi<span class="badge"></span></a>
          <a href="#!" class="collection-item">Institusi<span class="badge">Jumlah</span></a>
            <a href="#!" class="collection-item">asdsa<span class="badge">  asdad</span></a>
        </div>
      </div>


    </div>
</main>

<script type="text/javascript">
  window.onload = function() {
    var ctx = $("#myChart").get(0).getContext("2d");
    var data = {
      labels: ["januari","februari","maret"],
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
