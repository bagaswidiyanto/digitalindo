<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="<?= base_url(); ?>assets/img/favicon.png" type="image/png">
  <?php
  if ($this->uri->segment(1) == 'layanan') {
    $metaTittle = ' | Services';
  } else if ($this->uri->segment(1) == 'fitur') {
    $metaTittle = ' | Fitur';
  } else if ($this->uri->segment(1) == 'berita') {
    $metaTittle = ' | News';
  } else if ($this->uri->segment(1) == 'kontak') {
    $metaTittle = ' | Contact';
  } else if ($this->uri->segment(1) == 'career') {
    $metaTittle = ' | Career';
  } else if ($this->uri->segment(1) == 'thank_you') {
    $metaTittle = ' | Thank You';
  } else {
    $metaTittle = '';
  }
  ?>
  <?php if ($this->uri->segment(2) != 'baca') { ?>
    <title><?php echo $website->metaTitle;
            echo  $metaTittle; ?> </title>
  <?php } ?>
  <!-- Bootstrap CSS -->
  <?php
  if ($this->uri->segment(2) == 'baca') {
    $meta = $this->db->get_where('tbl_posts', array('slug' => $this->uri->segment(3)))->row();
    echo '<title>' . $website->metaTitle . ' | ' . strtoupper($meta->metaTitle) . '</title>
    <meta name="keywords" content="' . $meta->metaKeywords . $website->metaKeywords . '">
    <meta name="description" content="' . $meta->metaDescription . $website->metaDescription . '">
    <meta property="og:title" content="' . $meta->Title . '" />
    <meta property="og:description" content="' . $meta->metaDescription . $website->metaDescription . '" />
    <meta property="og:image" content="https://digitalindo.co.id/admin/upload/news_post/' . $meta->image . '" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="' . base_url() . 'Berita/baca/' . $meta->slug . '">
    <meta name="twitter:title" content="' . $meta->Title . '">
    <meta name="twitter:description" content="' . $meta->metaDescription . $website->metaDescription . '">
    <meta name="twitter:image" content="https://digitalindo.co.id/admin/upload/news_post/' . $meta->image . '">';
  }
  ?>
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/linericon/style.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/nice-select/css/nice-select.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/animate-css/animate.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/flaticon/flaticon.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/slick/slick-theme.css">
  <link href="<?= base_url(); ?>assets/css/aos.css" rel="stylesheet">


  <!-- main css -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
  <!---fancy box-->
  <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

  <!--whatsapp-->
  <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>css/whatsapp_chat.css" />
</head>

<body>

  <!--================Header Menu Area =================-->
  <header class="header_area" id="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand logo_h kanan" href="<?= base_url() ?>"><img src="<?= base_url(); ?>assets/img/logo.png" alt="" style="background-color: white;margin-left: 60%"></a>
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <!-- <a class="navbar-brand logo_h" href="<?= base_url() ?>"><img src="<?= base_url(); ?>assets/img/logo.png" alt="" style="background-color: white"></a> -->

          <a class="navbar-brand logo_h mv" href="<?= base_url() ?>"><img src="<?= base_url(); ?>assets/img/logo.png" alt="" style="background-color: white;"></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
              <?php foreach ($navigation as $key) { ?>
                <li class="nav-item <?php
                                    if ($key->slug != "") {
                                      if ($this->uri->segment(1) == $key->slug) {
                                        echo "active";
                                      }
                                    } else {
                                      if ($this->uri->segment(1) == "") {
                                        echo "active";
                                      }
                                    }
                                    ?> submenu dropdown"><a class="nav-link" href="<?= ($key->title != 'Home') ? base_url() . strtolower($key->slug) : base_url() ?>" onclick="window.location.href='<?= base_url() . $key->slug; ?>/';"><?= $key->title ?></a>

                  <ul class="dropdown-menu">
                    <? foreach ($this->db->query("SELECT * FROM tbl_navigation where parent='$key->id' and status='1' order by sort")->result() as $c) {
                      echo "<li class='nav-item'><a class='nav-link' href='" . base_url() . "$key->slug/$c->slug'>$c->title</a></li>";
                    } ?>
                  </ul>

                </li>
              <?php } ?>
              <li class="nav-item"><a class='nav-link' data-toggle="modal" data-target="#mylogin" style="cursor: pointer;">Login</a></li>
              <!--  <li class="nav-item <?php if ($this->uri->segment(1) == "") {
                                          echo "active";
                                        } ?>"><a class="nav-link" href="<?= base_url(); ?>">Home</a></li>

              <li class="nav-item submenu dropdown <?php if ($this->uri->segment(1) == "fitur") {
                                                      echo "active";
                                                    } ?>">
                <a href="<?= base_url(); ?>fitur" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" onclick="window.location.href='<?= base_url(); ?>fitur/';">Fitur</a>
                <ul class="dropdown-menu">
                    <li class="nav-item "><a class="nav-link" href="<?= base_url(); ?>fitur/#Dashboard">Dashboard</a></li>
                    <li class="nav-item "><a class="nav-link" href="<?= base_url(); ?>fitur/#Menu-Offices">Menu Offices</a></li>
                    <li class="nav-item "><a class="nav-link" href="<?= base_url(); ?>fitur/#Master">Master</a></li>
                    <li class="nav-item "><a class="nav-link" href="<?= base_url(); ?>fitur/#Module">Module</a></li>
                    <li class="nav-item "><a class="nav-link" href="<?= base_url(); ?>fitur/#Operational">Operational</a></li>
                    <li class="nav-item "><a class="nav-link" href="<?= base_url(); ?>fitur/#Finance">Finance</a></li>
                    <li class="nav-item "><a class="nav-link" href="<?= base_url(); ?>fitur/#Reports">Reports</a></li>
                    <li class="nav-item "><a class="nav-link" href="<?= base_url(); ?>fitur/#System-Setting">System Setting</a></li>
                    <li class="nav-item "><a class="nav-link" href="<?= base_url(); ?>fitur/#Report-Customer">Report Customer </a></li>
                    <li class="nav-item "><a class="nav-link" href="<?= base_url(); ?>fitur/#Support-Mobile">Support Mobile</a></li>
                    <li class="nav-item "><a class="nav-link" href="<?= base_url(); ?>fitur/#Tracking-System">Tracking System</a></li>
                   
                </ul>
              </li>
              
            <li class="nav-item <?php if ($this->uri->segment(1) == "layanan") {
                                  echo "active";
                                } ?>"><a class="nav-link" href="<?= base_url(); ?>layanan">Services</a></li> 
            <li class="nav-item <?php if ($this->uri->segment(1) == "berita") {
                                  echo "active";
                                } ?>"><a class="nav-link" href="<?= base_url(); ?>berita">News</a></li> 
            <li class="nav-item <?php if ($this->uri->segment(1) == "kontak") {
                                  echo "active";
                                } ?>"><a class="nav-link" href="<?= base_url(); ?>kontak">Contact Us</a></li>
            <li class="nav-item <?php if ($this->uri->segment(1) == "karir") {
                                  echo "active";
                                } ?>"><a class="nav-link" href="<?= base_url(); ?>karir">Career</a></li>
 -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="nav-item <?php if ($this->uri->segment(1) == "Free trial") {
                                    echo "active";
                                  } ?>"><a href="#daftar" data-toggle="modal" data-target="#theModal" class="primary_btn text-uppercase">free trial</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->


  <!--CSS Spinner-->
  <!-- <div class="spinner-wrapper">
<div class="spinner">
  <div class="rect1"></div>
  <div class="rect2"></div>
  <div class="rect3"></div>
  <div class="rect4"></div>
  <div class="rect5"></div>
</div>
</div> -->






  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="theModal">
    <div class="modal-dialog" style="width: 80%;margin-top: 8%;max-width: 100%">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="margin-top: 5px"></button>

          <h3 class="modal-title" id="exampleModalLabel">Daftar</h3>
        </div>
        <div class="modal-body">
          <form id="daftar" method="post" class="form-horizontal" action="<?php echo base_url() . 'Welcome/add_user'; ?>">
            <table class="table table-bordered " width="100%">
              <th width="50%">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Nama Lengkap</label>
                  <div class="col-sm-8">
                    <input type="text" name="nama" placeholder="Nama" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Nomor Telepon</label>
                  <div class="col-sm-8">
                    <input type="text" name="telp" placeholder="No. Telp" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Nama Logistics</label>
                  <div class="col-sm-8">
                    <input type="text" name="namaLogistics" placeholder="Nama Logistics" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" name="alamat" placeholder="Alamat" required></textarea>
                  </div>
                </div>
              </th>
              <th width="50%">
                <div class="form-group">
                  <label class="col-sm-4 control-label">E-mail</label>
                  <div class="col-sm-8">
                    <input type="text" name="email" class="form-control" placeholder="E-mail" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Domisili</label>
                  <div class="col-sm-8">
                    <input type="text" name="domisili" class="form-control" placeholder="Domisili" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-12 control-label">Dari mana Anda mengetahui informasi tentang Digitalindo?</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" name="keterangan" placeholder="Keterangan" required></textarea>
                  </div>
                </div>
                <div class="form-group">

                  <div class="col-sm-8">
                    <div id="recaptcha" class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>" data-callback="enableBtn"></div>
                  </div>



              </th>
            </table>


        </div>
        <div class="modal-footer">



          <button type="button" style="width: 100%" class="btn btn-default" data-dismiss="modal">Close</button>


          <button type="submit" id="btn-validate" style="width: 100%" class="btn btn-primary" disabled="true">Save changes</button>


          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal login -->
  <div id="mylogin" class="modal fade" role="dialog">
    <div class="modal-dialog" style="width: 25%;margin-top: 8%;max-width: 80%">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="margin-top: 5px"></button>
          <!-- <h4 class="modal-title">Login</h4> -->
          <img src="<?= base_url() ?>assets/img/Logo_login.png" class="rounded mx-auto d-block">
          <span id="login_result"></span>
        </div>
        <form id="login" method="POST">
          <div class="modal-body">
            <div class="container">
              <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>

              <div class="form-group">
                <button type="submit" style="width: 100%" class="btn-login btn btn-primary" id="btnlog">Login</button>
              </div>

              <div class="form-group">
                <button type="button" style="width: 100%" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
          <!-- <div class="modal-footer">
        <button type="submit" class="btn-login btn btn-primary" id="btnlog" >Login</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
        </form>
      </div>
    </div>
  </div>
  <!-- End Modal Login -->



  <!--================Contact Area =================-->
  <style type="text/css">
    button[disabled].btn-primary,
    button[disabled].btn-primary:hover,
    button[disabled].btn-primary:active,
    button[disabled].btn-primary:focus {
      background: #CCCCCC;
      box-shadow: none;
      outline: none;
      opacity: 0.5;
      text-decoration: none;
      color: #222222;
      border-color: #222222;
    }
  </style>
  <?

  $t = $this->input->post('data_tarif');

  ?>
  <script>
    function enableBtn() {
      document.getElementById("btn-validate").disabled = false;
    }
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("form#login").submit(function() {

        $(".btn").attr("disabled", true);

        var data = {
          username: $("#username").val(),
          password: $("#password").val(),
          method: 'crosssite'
        };


        $.ajax({
          type: "POST",
          url: "https://mytask.digitalindo.co.id/inc/login.php",
          data: data,
          success: function(data) {

            if (data.indexOf("Maaf ada yang sedang menggunakan akun ini atau tunggu 10 menit") > -1) {
              alert('Maaf ada yang sedang menggunakan akun ini atau tunggu 10 menit');
            } else if (data.indexOf("Username atau Password Salah") > -1) {
              alert('Username atau Password Salah');
            } else {

              //redirect jika berhasil login

              setInterval(function() {
                window.location = 'https://mytask.digitalindo.co.id/inc/login.php?t=' + data;
              }, 1000);
            }
            $("#btnlog").attr("disabled", false);


          },

          error: function() {

            $('#login_result').html('<div class="alert alert-danger text-center" style=" padding: 0.25rem 1.25rem !important;">Username atau Password Salah</div>');
            $("#btnlog").attr("disabled", false);

          }

        });

        return false;

      });

    });
  </script>