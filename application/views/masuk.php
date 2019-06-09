<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="/hayati-ico.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Hayati ID - Investasi Pertanian Organik</title>
    <link rel="stylesheet" href="<?php base_url('') ?>/assets/bootstrap/core.min.css">
    <link rel="stylesheet" href="<?php base_url('') ?>/assets/bootstrap/full-slider.css">
    <link rel="stylesheet" href="<?php base_url('') ?>/assets/bootstrap/hayati.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top navbar-shrink" id="mainNav">
        <a class="icon" href="<?php base_url('') ?>/">
                <img class="icon-hayati" src="<?php base_url('') ?>/assets/img/lg-hd-hayati.png" alt="Hayati ID" height="95%" >
            </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#step">Cara Investasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?php base_url('') ?>/about">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?php base_url('') ?>/faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?php base_url('') ?>/daftar/sign_up">Daftar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?php base_url('') ?>/masuk">Masuk</a>
                </li>
            </ul>
        </div>
    </nav>

    <section id="sign-up">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Masuk</h2>
                    <div class="subheading-divider"></div>
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
                            <input type="submit" value="MASUK" class="subm">
                        </div>
                    </form>
                    <p class="text-muted">Belum daftar ? Klik <a href="<?php base_url('') ?>/daftar">disini</a></p>
                </div>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="row">
                        <div class="message">
                            <form action="#" method="post" onSubmit="return validasi()">
                                <div>
                                    <input type="text" placeholder="E-Mail" />
                                </div>
                                <div>
                                    <input type="text" placeholder="Subjek" />
                                </div>
                                <textarea name="message" rows="3" cols="20" placeholder="Pesan"></textarea>
                                <div>
                                    <input type="submit" value="KIRIM" class="subm">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Informasi Lain</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="<?php base_url('') ?>/about">Tentang Kami</a></li>
                        <li><a href="#">Syarat &amp; Ketentuan</a></li>
                        <li><a href="#step">Cara Kerja</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="<?php base_url('') ?>/faq">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Hubungi Kami <br></h5>
                    <p class="text-muted">Hayati ID - Platform Investasi Pertanian</p>
                    <p class="text-muted">contact@hayati.id</p>
                    <p class="text-muted">Pangkalpinang, Bangka Belitung, Indonesia</p>
                    <p> </p>
                    <div class="social-footer">
                        <a href="#" target="_blank"><img src="<?php base_url('') ?>/assets/img/ft-fb.png" alt="" width="35"></a>&nbsp;
                        <a href="#" target="_blank"><img src="<?php base_url('') ?>/assets/img/ft-ig.png" alt="" width="35"></a>&nbsp;
                        <a href="#" target="_blank"><img src="<?php base_url('') ?>/assets/img/ft-yt.png" alt="" width="35"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="<?php base_url('') ?>/assets/bootstrap/jquery.min.js"></script>
    <script src="<?php base_url('') ?>/assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="<?php base_url('') ?>/assets/bootstrap/jquery.easing.min.js"></script>
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
