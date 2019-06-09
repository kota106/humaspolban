<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hayati ID - Panel Petani Hebat</title>
    <link href="https://hayati.id/assets/dasbor/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://hayati.id/assets/dasbor/css/datepicker3.css" rel="stylesheet">
    <link href="https://hayati.id/assets/dasbor/css/dasbor.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
                <a class="navbar-brand" href="#">Panel <span>Hayati</span></a>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">Username</div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <ul class="nav menu">
            <li><a href="../dashboard.php"><em class="fa fa-dashboard">&nbsp;</em>Profile</a></li>
            <li class="active"><a href="../project.php"><em class="fa fa-calendar">&nbsp;</em>Lihat Investasi</a></li>
            <li><a href="../my-invest.php"><em class="fa fa-bar-chart">&nbsp;</em>Investasi Anda</a></li>
            <li><a href="../partnership.php"><em class="fa fa-toggle-off">&nbsp;</em>Gabung Mitra</a></li>
            <li><a href="#"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
        </ul>
    </div>

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
                <li class="active">Lihat Investasi</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Lihat Investasi</h1>
            </div>
        </div>
        <!--/.row-->

        <div class="panel panel-container">
            <div class="row">
                <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                    <div class="panel panel-teal panel-widget border-right">
                        <h4>Proyek Didanai</h4>
                        <div class="row no-padding"><em class="fa fa-xl fa-handshake-o color-blue"></em>
                            <div class="large">0</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                    <div class="panel panel-blue panel-widget border-right">
                        <h4>Proyek Selesai</h4>
                        <div class="row no-padding"><em class="fa fa-xl fa-check color-orange"></em>
                            <div class="large">0</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                    <div class="panel panel-orange panel-widget border-right">
                        <h4>Proyek Berlangsung</h4>
                        <div class="row no-padding"><em class="fa fa-xl fa-clock-o color-teal"></em>
                            <div class="large">0</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                    <div class="panel panel-red panel-widget ">
                        <h4>Dana Dikeluarkan</h4>
                        <div class="row no-padding"><em class="fa fa-xl fa-money color-red"></em>
                            <div class="large">0</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Pilih Proyek</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                                <div class="panel panel-teal panel-widget border-right">
                                    <img class="img-proj" src="https://hayati.id/assets/img/portfolio/hayati.jpg" alt="">
                                    <h4>Contoh Proyek</h4>
                                    <div class="col-lg-12 text-center">
                                        <a class="portfolio-link" href="https://hayati.id/project">
                            <button class="subm" data-dismiss="modal" type="button">Bantu Wujudkan</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                                <div class="panel panel-blue panel-widget border-right">
                                    <img class="img-proj" src="https://hayati.id/assets/img/portfolio/hayati.jpg" alt="">
                                    <h4>Contoh Proyek</h4>
                                    <div class="col-lg-12 text-center">
                                        <a class="portfolio-link" href="https://hayati.id/project">
                            <button class="subm" data-dismiss="modal" type="button">Bantu Wujudkan</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                                <div class="panel panel-orange panel-widget border-right">
                                    <img class="img-proj" src="https://hayati.id/assets/img/portfolio/hayati.jpg" alt="">
                                    <h4>Contoh Proyek</h4>
                                    <div class="col-lg-12 text-center">
                                        <a class="portfolio-link" href="https://hayati.id/project">
                            <button class="subm" data-dismiss="modal" type="button">Bantu Wujudkan</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                                <div class="panel panel-red panel-widget ">
                                    <img class="img-proj" src="https://hayati.id/assets/img/portfolio/hayati.jpg" alt="">
                                    <h4>Contoh Proyek</h4>
                                    <div class="col-lg-12 text-center">
                                        <a class="portfolio-link" href="https://hayati.id/project">
                            <button class="subm" data-dismiss="modal" type="button">Bantu Wujudkan</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://hayati.id/assets/dasbor/js/jquery-1.11.1.min.js"></script>
    <script src="https://hayati.id/assets/dasbor/js/bootstrap.min.js"></script>
    <script src="https://hayati.id/assets/dasbor/js/bootstrap-datepicker.js"></script>
    <script src="https://hayati.id/assets/dasbor/js/custom.js"></script>

</body>

</html>
