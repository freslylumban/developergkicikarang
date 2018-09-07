<!DOCTYPE html>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<html lang="en">
  <?php $title = "Fasilitas"; ?>
<head>
  <?php include "../layout/head.php"; ?>
</head>

<body>
  <!-- NAVIGASI -->
  <?php include "../layout/navigasi.php"; ?>

  <!-- ISI -->
  <div class="container">
	  <div class="row"><br>
		  <form class="form-horizontal">
        <fieldset>

        <!-- Form Name -->
        <legend>Form Peminjaman Peralatan</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Current Fleet  Size">Nama Peminjam</label>
          <div class="col-md-5">
            <input id="Current Fleet Size" name="Current Fleet Size" type="text" placeholder="Nama Lengkap" class="form-control input-md">
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Annual Forklift Purchases">Email</label>
          <div class="col-md-5">
            <input id="Annual Forklift Purchases" name="Annual Forklift Purchases" type="text" placeholder="example@gkicikarang.com" class="form-control input-md">

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Message">Keperluan</label>
          <div class="col-md-5">
            <input id="Message" name="Message" type="text" placeholder="Acara Bina Aktifis" class="form-control input-md">
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Annual Forklift Purchases">Tanggal Peminjaman</label>
          <div class="col-md-2">
            <input id="Annual Forklift Purchases" name="Annual Forklift Purchases" type="date" class="form-control input-md">
		<!-- bentuk kalender -->
          </div>
        </div>

		<!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Message">Barang Yang Dipinjam</label>
          <div class="col-md-5">
            <input id="Message" name="Message" type="text" placeholder="Mic Wireless: 1; Speaker Portable: 2" class="form-control input-md">
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <!--<label class="col-md-4 control-label" for="singlebutton">Submit</label>-->
          <div class="col-md-offset-4 col-md-1">
            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
          </div>
        </div>

        </fieldset>
      </form>
    </div>
  </div><br>


  <!-- FOOTER -->
  <?php include "../layout/foot.php"; ?>

  <!-- SCRIPT -->
  <?php include "../layout/script.php"; ?>

</body>

</html>
