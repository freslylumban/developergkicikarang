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
  <div class="container" style="min-height: 400px;" >
    <div class="row">
      <div class="col-xd-12 text-center">
        <h1>Warta Jemaat Bulan <?php date_default_timezone_set('Asia/Jakarta'); echo date("F Y"); ?></h1>
        <a href="#"><p>Warta Jemaat, Minggu, 15 Juli  2018.</p></a>
        <a href="#"><p>Warta Jemaat, Minggu, 8 Juli  2018.</p></a>
        <a href="#"><p>Warta Jemaat, Minggu, 1 Juli 2018.</p></a>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <?php include "../layout/foot.php"; ?>

  <!-- SCRIPT -->
  <?php include "../layout/script.php"; ?>

</body>

</html>
