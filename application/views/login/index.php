<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="/hayati-ico.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Hayati ID - Investasi Pertanian Organik</title>
    <link rel="stylesheet" href="<?php echo base_url('') ?>/assets/bootstrap/core.min.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>/assets/bootstrap/full-slider.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>/assets/bootstrap/hayati.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
</head>

<body id="page-top">
  <div class="row" style="height: 100vh;">
    <div id="left-side" class="col-1" style="background-color:#cbc2e2">

    </div>
    <div id="mid-side" class="col-5" style="background-color:#180547">
      <div class="mx-auto" style="width:150px;margin-top:200px" >
        <img src="<?php echo base_url('') ?>/assets/img/polban.png" height="200">
      </div>
    </div>
    <div id="right-side" class="col-6">
      <section id="sign-up" class="mt-5">
          <div class="row text-center">
              <div class="col-lg-12 text-center">
                  <h2 class="section-heading text-uppercase">Chatbot Informasi Kampus Polban</h2>
                  <div class="text-muted">Silahkan login dengan akun yang sudah terdaftar sebelumnya</div>

              </div>
              <div class="login">
                  <br>
                <?php
                echo "<div class='error_msg'>";
                echo validation_errors();
                echo "</div>";
                ?>
                  <form method = 'post' action= "<?php echo base_url('masuk/login');?>" onSubmit="return validasi()">
                      <div>
                          <input type="text" name="email" id="email" placeholder="Email" />
                      </div>
                      <div>
                          <input type="password" name="password" id="password" placeholder="Kata Sandi" />
                      </div>
                      <div>
                          <input type="submit" value="Login" class="subm">
                      </div>
                  </form>
                  <!-- <p class="text-muted">Belum daftar ? Klik <a href="<?php base_url('') ?>/daftar">disini</a></p> -->
              </div>
          </div>
      </section>
    </div>
  </div>



    <script src="<?php echo base_url('') ?>/assets/bootstrap/jquery.min.js"></script>
    <script src="<?php echo base_url('') ?>/assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('') ?>/assets/bootstrap/jquery.easing.min.js"></script>
</body>

    <script type="text/javascript">
        function validasi(){
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            if(email != "" && password != ""){
                return true;
            }else{
                alert('Email dan Password Harus di Isi !');
                return false;
            }
        }
    </script>

</html>
