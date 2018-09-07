<header>
  <!-- NAVIGASI -->
  <div id="navigasi-top">
    <div class="container-fluid">
      <!-- Topper w/ logo -->
      <div class="row hidden-xs topper">
        <div class="col-xs-7 col-sm-7">
          <a href="www.gkicikarang.org">
            <img am-TopLogo alt="SECUREVIEW" src="../assets/images/logo_gkicikarang.png" class="img-responsive">
          </a>
        </div>
        <div class="col-xs-5 col-xs-offset-1 col-sm-5 col-sm-offset-0 text-right ">
          <div am-CallNow>
            <!-- <p>Telp. 021-1234567</p> -->
          </div>
        </div>
      </div>
      <!-- End Topper -->
      <!-- Navigation -->
      <div class="row">
        <nav class="navbar navbar-inverse navbar--bottom" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand visible-xs-inline-block nav-logo" href="#">
                <img src="../assets/images/logo_gkicikarang_small_white.png" class="img-responsive" alt="">
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav js-nav-add-active-class">
                <li <?php if($title=="Home") echo "class='active'" ?> >
                  <a href="../pages/index.php">Home</a>
                </li>
                <li <?php if($title=="Warta Jemaat") echo "class='active'" ?> >
                  <a href="../pages/warta.php">Warta Jemaat</a>
                </li>
                <li <?php if($title=="Majelis Jemaat") echo "class='dropdown active'" ?>>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Majelis Jemaat
                    <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li>
                      <a href="../pages/mj_bidang.php">Bidang</a>
                    </li>
                    <li>
                      <a href="../pages/mj_komisi.php">Komisi</a>
                    </li>
                    <li>
                      <a href="../pages/mj_pokja.php">Pokja</a>
                    </li>
                    <li>
                      <a href="../pages/mj_wilayah.php">Wilayah</a>
                    </li>
                  </ul>
                </li>
                <li <?php if($title=="Artikel") echo "class='active'" ?>>
                  <a href="../pages/artikel.php">Artikel</a>
                </li>
                <li <?php if($title=="Fasilitas") echo "class='active'" ?>>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fasilitas
                    <b class="caret"></b>
                  </a>
				  <ul class="dropdown-menu" role="menu">
                    <li>
                      <a href="../pages/fasilitas_ruangan.php">Ruangan</a>
                    </li>
                    <li>
                      <a href="../pages/fasilitas_mobil.php">Mobil</a>
                    </li>
                    <li>
                      <a href="../pages/fasilitas_peralatan.php">Peralatan</a>
                    </li>
                  </ul>
                </li>
                <li <?php if($title=="Agenda") echo "class='active'" ?>>
                  <a href="../pages/agenda.php">Agenda</a>
                </li>
                <li <?php if($title=="Kontak Kami") echo "class='active'" ?>>
                  <a href="../pages/kontak.php">Kontak Kami</a>
                </li>
                <li <?php if($title=="Tentang Kami") echo "class='dropdown active'" ?>>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tentang Kami
                    <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li>
                      <a href="../pages/tk_sejarah.php">Sejarah</a>
                    </li>
                    <li>
                      <a href="../pages/tk_visimisi.php">Visi Misi</a>
                    </li>
                    <li>
                      <a href="../pages/tk_anggota.php">Keanggotaan</a>
                    </li>
                    <li>
                      <a href="../pages/tk_majelis.php">Susunan Majelis</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
