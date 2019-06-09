<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" href="/hayati-ico.ico">
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
                <a class="navbar-brand" href="<?php base_url('') ?>/"><span>Hayati</span></a>
            </div>
        </div>
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
            <li class="active"><a href="#"><em class="fa fa-dashboard">&nbsp;</em>Profile</a></li>
            <li><a href="#"><em class="fa fa-calendar">&nbsp;</em>Lihat Investasi</a></li>
            <li><a href="#"><em class="fa fa-bar-chart">&nbsp;</em>Investasi Anda</a></li>
            <li><a href="#"><em class="fa fa-toggle-off">&nbsp;</em>Gabung Mitra</a></li>
            <li><a href="<?php base_url('') ?>/masuk/logout"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
        </ul>
    </div>

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Profile</h1>
            </div>
        </div>

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
                        Profil Kamu
                        <ul class="pull-right panel-settings panel-button-tab-right">
                            <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-pencil"></em>
							</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <ul class="dropdown-settings">
                                            <li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Nama (sesuai ktp)</td>
                                    <td></td>
                                    <td>Ferdian Dwi Cahyo</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td></td>
                                    <td>ferdi@hayati.id</td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan</td>
                                    <td></td>
                                    <td>Mahasiswa</td>
                                </tr>
                                <tr>
                                    <td>No. HP</td>
                                    <td></td>
                                    <td>08121789666</td>
                                </tr>
                                <tr>
                                    <td>Foto</td>
                                </tr>
                            </tbody>
                        </table>
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
