<!DOCTYPE html>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<html lang="en">
  <?php $title = "Warta Jemaat"; ?>
<head>
  <?php include "../layout/head.php"; ?>
</head>

<body>
  <!-- NAVIGASI -->
  <?php include "../layout/navigasi.php"; ?>

  <!-- ISI -->
  <div class="container warta-jemaat" style="min-height: 400px;" >
    <div class="row">
      <div class="col-xd-12 text-center">
        <h1>Warta Jemaat Bulan <?php date_default_timezone_set('Asia/Jakarta'); echo date("F Y"); ?></h1>
      </div>

      <div class="col-xd-12 warta-button">
        <button class="btn btn-primary btn-lg btn-block" type="button" name="button">
          <a style="color: white;" href="../file/warta-jemaat-15-juli-2018.pdf">Warta Jemaat, Minggu, 9 Sept 2018.</a>
        </button> <br>
      </div>

      <div class="col-xd-12 warta-view-pdf text-center">
        <embed src="../file/warta-jemaat-15-juli-2018.pdf" type="application/pdf" width="90%" height="600">
      </div>

      <div class="col-xd-12 warta-button">
        <button class="btn btn-primary btn-lg btn-block" type="button" name="button">
          <a style="color: white;" href="#">Warta Jemaat, Minggu, 2 Sept 2018.</a>
        </button>
      </div>

      <div class="col-xd-12 text-center">
        <h1>Warta Jemaat Bulan Agustus 2018</h1>
      </div>
      <div class="col-xd-12 warta-button">
        <button class="btn btn-primary btn-lg btn-block" type="button" name="button">
          <a style="color: white;" href="#">Warta Jemaat, Minggu, 26 Agustus 2018.</a>
        </button>
      </div>
      <div class="col-xd-12 warta-button">
        <button class="btn btn-primary btn-lg btn-block" type="button" name="button">
          <a style="color: white;" href="#">Warta Jemaat, Minggu, 19 Agustus 2018.</a>
        </button>
      </div>
      <div class="col-xd-12 warta-button">
        <button class="btn btn-primary btn-lg btn-block" type="button" name="button">
          <a style="color: white;" href="#">Warta Jemaat, Minggu, 12 Agustus 2018.</a>
        </button>
      </div>
      <div class="col-xd-12 warta-button">
        <button class="btn btn-primary btn-lg btn-block" type="button" name="button">
          <a style="color: white;" href="#">Warta Jemaat, Minggu, 5 Agustus 2018.</a>
        </button>
      </div><br><br>
    </div>
  </div>

  <!-- FOOTER -->
  <?php include "../layout/foot.php"; ?>

  <!-- SCRIPT -->
  <?php include "../layout/script.php"; ?>

</body>

</html>
