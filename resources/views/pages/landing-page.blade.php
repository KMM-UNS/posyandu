<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>POSYANDU</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{asset('assets')}}/plugins/bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
	<link href="{{asset('assets')}}/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="{{asset('assets')}}/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="{{asset('assets')}}/css/one-page-parallax/style.min.css" rel="stylesheet" />
	<link href="{{asset('assets')}}/css/one-page-parallax/style-responsive.min.css" rel="stylesheet" />
	<link href="{{asset('assets')}}/css/one-page-parallax/theme/default.css" id="theme" rel="stylesheet" />

	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('assets')}}/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body data-spy="scroll" data-target="#header-navbar" data-offset="51">
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin #header -->
        <div id="header" class="header navbar navbar-transparent navbar-fixed-top">
            <!-- begin container -->
            <div class="container">
                <!-- begin navbar-header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="" class="navbar-brand">
                        <img src="{{ asset('assets') }}/img/bg/logoposyandu.png" />
                        {{-- <span class="brand-logo"></span>
                        <span class="brand-text">
                            <span class="text-theme">Posyandu</span>
                        </span> --}}
                    </a>
                </div>
                <!-- end navbar-header -->
                <!-- begin navbar-collapse -->
                <div class="collapse navbar-collapse" id="header-navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home" data-click="scroll-to-target">Beranda</a></li>
                        <li><a href="#service" data-click="scroll-to-target">Layanan</a></li>
                        {{-- <li><a href="#work" data-click="scroll-to-target">Jadwal</a></li> --}}
                        <li><a href="#contact" data-click="scroll-to-target">Kontak</a></li>
                        <li><a href="/login">Masuk</a></li>
                    </ul>
                </div>
                <!-- end navbar-collapse -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #header -->

        <!-- begin #home -->
        <div id="home" class="content has-bg home">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="{{asset('assets')}}/img/bg/posyandu.jpg" alt="Home" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container home-content">
                <h1>Selamat Datang di Posyandu</h1>
                <h3>Pos Pelayanan Kesehatan Terpadu</h3>
                <p>
                    Posyandu adalah singkatan dari Pos Pelayanan Kesehatan Terpadu. <br />
                </p>

            </div>
            <!-- end container -->
        </div>
        <!-- end #home -->

        <!-- begin #quote -->
        <div id="quote" class="content bg-black-darker has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="{{asset('assets')}}/img/bg/bg-quote.jpg" alt="Quote" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInLeft">
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-12 -->
                    <div class="col-md-12 quote">
                        <i class="fa fa-quote-left"></i>Posyandu Meningkatkan derajat kesehatan, melalui pemberdayaan masyarakat, termasuk swasta dan masyarakat madani.<br />
                         <span class="text-theme"></span>
                        <i class="fa fa-quote-right"></i>
                    </div>
                    <!-- end col-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #quote -->

        <!-- beign #service -->
        <div id="service" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Layanan Posyandu</h2>
                <p class="content-desc">
                    Beberapa Layanan Posyandu yang disediakan
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-cog"></i></div>
                            <div class="info">
                                <h4 class="title">Indeks Massa Tubuh</h4>
                                <p class="desc">Menilai status gizi pada seorang individu. Pengukuran dan penilaian menggunakan IMT berhubungan dengan kekerungan dan kelebihan status gizi.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-cog"></i></div>
                            <div class="info">
                                <h4 class="title">Pemeriksaan Imunisasi</h4>
                                <p class="desc">Memberikan layanan pemeriksaan kepada balita.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-cog"></i></div>
                            <div class="info">
                                <h4 class="title">Grafik Pemeriksaan Imunisasi</h4>
                                <p class="desc">Hasil pemeriksaan imunisasi yang ditampilkan dalam bentuk grafik agar mudah dipahami seperti KMS pada umumnya.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-cog"></i></div>
                            <div class="info">
                                <h4 class="title">Rujukan</h4>
                                <p class="desc">Keterangan lanjutan tentang satu hal untuk ditidaklanjuti.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #about -->

        <!-- begin #work -->
         {{-- <div id="work" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <h2 class="content-title">Jadwal</h2>
                {{-- <!DOCTYPE html> --}}
                    {{-- <html lang="en">
                    <head> --}}
                        {{-- <meta charset="UTF-8"> --}}
                        {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <meta http-equiv="X-UA-Compatible" content="ie=edge">
                        <title>Jadwal</title>
                        <link href="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
                    </head>
                    <body>
                        <div id="example"></div>
                    </body>
                    <script type="text/javascript" src="js/app.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
                    </html> --}}
                <!-- end row -->
            {{-- </div> --}}
            <!-- end container -->
        {{-- </div>  --}}
        <!-- end #work -->
        <!-- begin #contact -->
        <div id="contact" class="content bg-silver-lighter" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Kontak</h2>
                <p class="content-desc">
                    Posyandu adalah suatu upaya dari Pemerintah, dalam hal ini adalah Kementerian Kesehatan,
                    dalam memberikan pelayanan kesehatan dasar untuk anak dan balita.
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-6 -->
                    <div class="col-md-6" data-animation="true" data-animation-type="fadeInLeft">
                        <p>
                        </p>
                        <p>
                            Banjarsari, Surakarta<br />
                            posyandu@gmail.com<br />
                            P: (123) 456-7890<br />
                        </p>
                        <p>
                            <span class="phone">+62 123 456 78</span><br />
                            <a href="mailto:hello@emailaddress.com">posyandu@gmail.com</a>
                        </p>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <!-- end col-6 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #contact -->

        <!-- begin #footer -->
        <div id="footer" class="footer">
            <div class="container">
                <div class="footer-brand">
                    <div> </div>
                    Posyandu
                </div>
                <p>
                    &copy; Copyright Color Admin 2017 <br />
                    An admin & front end theme with serious impact. Created by <a href="#">SeanTheme</a>
                </p>
                <p class="social-list">
                    <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                    <a href="#"><i class="fa fa-instagram fa-fw"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-fw"></i></a>
                    <a href="#"><i class="fa fa-google-plus fa-fw"></i></a>
                    <a href="#"><i class="fa fa-dribbble fa-fw"></i></a>
                </p>
            </div>
        </div>
        <!-- end #footer -->

        <!-- begin theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <ul class="theme-list clearfix">
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="{{asset('assets')}}/css/one-page-parallax/theme/purple.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="{{asset('assets')}}/css/one-page-parallax/theme/blue.css" data-theme-file="" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                    <li class="active"><a href="javascript:;" class="bg-green" data-theme-file="{{asset('assets')}}/css/one-page-parallax/theme/default.css" data-theme-file="" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="{{asset('assets')}}/css/one-page-parallax/theme/orange.css" data-theme-file="" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="{{asset('assets')}}/css/one-page-parallax/theme/red.css" data-theme-file="" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                </ul>
            </div>
        </div>
        <!-- end theme-panel -->
    </div>
    <!-- end #page-container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('assets')}}/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="{{asset('assets')}}/plugins/bootstrap3/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="{{asset('assets')}}/plugins/js-cookie/js.cookie.js"></script>
	<script src="{{asset('assets')}}/plugins/scrollMonitor/scrollMonitor.js"></script>
	<script src="{{asset('assets')}}/js/one-page-parallax/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<script>
	    $(document).ready(function() {
	        App.init();
	    });
	</script>
</body>
</html>
