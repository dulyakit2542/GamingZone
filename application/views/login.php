<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login GamingZone</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="theme/MDB/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="theme/MDB/css/mdb.min.css" rel="stylesheet">

  <!-- password ซ่อน -->
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/listtyicons/style.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/menuzord/css/menuzord.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/map/css/map.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/selectric/selectric.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/dzsparallaxer/dzsparallaxer.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/owl-carousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/revolution/css/settings.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/map/css/map.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/rateyo/jquery.rateyo.min.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/daterangepicker/daterangepicker.css" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/fancybox/jquery.fancybox.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML' ?>/assets/css/style.css" rel="stylesheet" id="option_style">
  <link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML' ?>/assets/img/favicon.png" rel="shortcut icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (min-width: 560px) and (max-width: 740px) {

      html,
      body,
      header,
      .view {
        height: 650px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .view {
        height: 650px;
      }
    }
  </style>
</head>

<body class="register-page">
  <!-- Main Navigation -->
  <header>
    <section class="py-7 py-md-10 bg-light ">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-5">
            <div class="card">
              <div class="bg-primary text-center py-4">
                <h2 class="text-white mb-0 h4">Log In</h2>
              </div>
              <div class="card-body px-7 pt-7 pb-0">
                <div id="alertuser"></div>
                <div id="alertpassword"></div>
                <div id="alertnull"></div>
                <form class="user" name="login" method="post" onsubmit="return validateForm()" action="<?php echo base_url() . 'login/user_login'; ?>">
                  <?php
                  if (isset($fail)) {
                  ?>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                          อีเมลหรือรหัสผ่านผิด
                        </div>
                      </div>
                    </div>
                  <?php
                  }
                  ?>
                  <div class="form-group mb-7">
                    <label for="exampleInputText">Email*</label>
                    <input name="email" type="text" class="form-control" aria-describedby="emailHelp">
                    <em>Enter the email. ใส่อีเมล</em>
                  </div>
                  <div class="form-group mb-7">
                    <label for="exampleInputPassword1">Password*</label>
                    <input name="password" type="password" class="form-control">
                    <em>Enter the password. ใส่รหัสผ่าน</em>
                  </div>

                  <div class="form-group d-flex justify-content-between align-items-center mb-7">
                    <center>
                      <button type="submit" class="btn btn-outline-primary text-uppercase">
                        Log in
                      </button>
                    </center>
                  </div>

                </form>
              </div>
              <div class="card-footer bg-transparent text-center py-3">
                <h6>ยังไม่มีบัญชีผู้ใช้ ?<a href="<?php echo base_url() . 'login/register' ?>"> Sign up</a></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script type="text/javascript" src="<?php echo base_url() . 'theme/MDB' ?>/js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo base_url() . 'theme/MDB' ?>/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url() . 'theme/MDB' ?>/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url() . 'theme/MDB' ?>/js/mdb.js"></script>

    <!-- Custom scripts -->

</body>
<script>
  function validateForm() {
    var username = document.forms['login']['email'].value; 
    var password = document.forms['login']['password'].value;

    if (username == '' && password == '') {
      $('#alertpassword').empty();
      $('#alertuser').empty();
      $('#alertnull').append(
        `<div class="alert alert-danger" role="alert">
                          กรุณากรอกชื่อผู้ใช้ และ รหัสผ่าน
          </div>`
      );
      return false;
    } else if (username == '') {
      $('#alertpassword').empty();
      $('#alertnull').empty();
      $('#alertuser').append(
        `<div class="alert alert-danger" role="alert">
                          กรุณากรอกชื่อผู้ใช้
                        </div>`
      );
      return false;
    } else if (password == '') {
      $('#alertuser').empty();
      $('#alertnull').empty();
      $('#alertpassword').append(
        `<div class="alert alert-danger" role="alert">
                          กรุณากรอกรหัสผ่าน
                        </div`
      );
      return false;
    } else {
      return true;
    }

  }
</script>

</html>