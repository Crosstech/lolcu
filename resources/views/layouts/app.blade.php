<!doctype html>
<html lang="tr">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="lolcu/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	<title>
		@yield('title') | lolcü
	</title>
    <meta name="description" content="Lolcu'ler! Lol ile alakalı herşeyi bulabileceğiniz oyuncu portalı burası. Vadi için en iyi ipuçlarını bulabilirsiniz. "/>
    <meta property="og:title" content="lolcu.com" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="www.lolcu.com" />
    <meta property="og:site_name" content="lolcü" />
    <meta property="og:description" content="League of Legends ile alakalı her şeyi bulabileceğiniz oyuncu portalı." />
    <meta name="twitter:title" content="lolcu.com" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="www.lolcu.com" />
    <meta name="twitter:card" content="" />
    <meta name="keywords" content="@yield('keywords')"/>
    <!-- CSRF Token -->
	<meta content="{{ csrf_token() }}" name="csrf-token" />
    
    <base href="/" />
    <link rel="canonical" href="http://lolcu.com">
    
    <link href="lolcu/css/bootstrap.min.css" rel="stylesheet" />
    <link href="lolcu/css/animate.min.css" rel="stylesheet"/>
    <link href="lolcu/css/dashboard.css" rel="stylesheet"/>
    <link href="lolcu/css/custom.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="lolcu/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    
    <!--<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">-->
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-104331446-1', 'auto');
        ga('send', 'pageview');
        console.log("Selam! Buraya bakıyorsan sen de bizdensin :) info@crosstech.com.tr adresine konusu `f12` olan ve kendinden bahseden bir mail atar mısın? Birlikte bir kahve içmek dileğiyle. Kendine iyi bak!")
		window.Lolcu = <?= json_encode([ 'csrfToken' => csrf_token() ]); ?>
	</script>
    <script src="js/vendor/jquery-3.2.1.min.js" type="text/javascript"></script>
    
    @yield('scripts')
</head>
<body>
<div id="preloader"></div>
<div class="wrapper">
    <div class="sidebar">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/" class="simple-text">
                    Lolcu
                </a>
            </div>
            <ul class="nav">
                <li class="active">
                    <a href="/">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <p>Sihirdar Ara</p>
                    </a>
                </li>
                <li class="dropdown-sub">
                    <a href="/sampiyonlar">
                        <i class="fa fa-magic"></i>  
                        <p>
                            Şampiyonlar
                            <span class="caret"></span>
                        </p>
                    </a>
                    <ul style="list-style: none; padding-left: 20px; display: none;">
                        <li>
                            <a href="/sampiyon-rotasyonu">
                                <p class="mr0">Ücretsiz Şampiyon Rotasyonu</p>
                            </a>
                        </li>
                        <li>
                            <a href="/tank-sampiyonlar">
                                <p class="mr0">Tank Şampiyonlar</p>
                            </a>
                        </li>
                        <li>
                            <a href="/nisanci-sampiyonlar">
                                <p class="mr0">Nişancı Şampiyonlar</p>
                            </a>
                        </li>
                        <li>
                            <a href="/buyucu-sampiyonlar">
                                <p class="mr0">Büyücü Şampiyonlar</p>
                            </a>
                        </li>
                        <li>
                            <a href="/suikastci-sampiyonlar">
                                <p class="mr0">Suikastçi Şampiyonlar</p>
                            </a>
                        </li>
                        <li>
                            <a href="/destek-sampiyonlar">
                                <p class="mr0">Destek Şampiyonlar</p>
                            </a>
                        </li>
                        <li>
                            <a href="/savasci-sampiyonlar">
                                <p class="mr0">Savaşçı Şampiyonlar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/esyalar">
                        <i class="fa fa-shield" aria-hidden="true"></i>
                        <p>Eşyalar</p>
                    </a>
                </li>
                <li>
                    <a href="/kabiliyetler">
                        <i class="fa fa-list-ul" aria-hidden="true"></i>
                        <p>Kabiliyetler</p>
                    </a>
                </li>
                <li>
                    <a href="/runler">
                        <i class="fa fa-certificate" aria-hidden="true"></i>
                        <p>Rünler</p>
                    </a>
                </li>
                <li>
                    <a href="/sihirdar-buyuleri">
                        <i class="fa fa-bullseye" aria-hidden="true"></i>
                        <p>Sihirdar Büyüleri</p>
                    </a>
                </li>
                <li>
                    <a href="/sozluk">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <p>Lol Sözlüğü</p>
                    </a>
                </li>




                <li class="dropdown-sub">
                    <a href="/">
                        <i class="fa fa-magic"></i>  
                        <p>
                            EN'ler
                            <span class="caret"></span>
                        </p>
                    </a>
                    <ul style="list-style: none; padding-left: 20px; display: none;">
                        <li>
                            <a href="/lol-en-yuksek-hasar-veren-sampiyonlar">
                                <p class="mr0">En Yüksek Hasara Sahip Şampiyonlar</p>
                            </a>
                        </li>
                        <li>
                            <a href="/lol-en-cok-cani-olan-sampiyonlar">
                                <p class="mr0">En Çok Canı Olan Şampiyonlar</p>
                            </a>
                        </li>
                        <li>
                            <a href="/lol-en-cok-manasi-olan-sampiyonlar">
                                <p class="mr0">En Çok Manası Olan Şampiyonlar</p>
                            </a>
                        </li>
                        <li>
                            <a href="/lol-en-cok-menzili-olan-sampiyonlar">
                                <p class="mr0">En Çok Menzili Olan Şampiyonlar</p>
                            </a>
                        </li>
                        <li>
                            <a href="/lol-hareket-hizi-en-yuksek-sampiyonlar">
                                <p class="mr0">Hareket Hızı En Yüksek Şampiyonlar</p>
                            </a>
                        </li>
                        <li>
                            <a href="/lol-en-cok-zirha-sahip-sampiyonlar">
                                <p class="mr0">En Çok Zırha Sahip Şampiyonlar</p>
                            </a>
                        </li>
                        <li>
                            <a href="/lol-en-cok-buyu-direncine-sahip-sampiyonlar">
                                <p class="mr0">En Çok Büyü Direncine Sahip Şampiyonlar</p>
                            </a>
                        </li>
                    </ul>
                </li>


                @if(Auth::check())
                <li>
                    <a href="/add_news">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <p>Haber Girişi</p>
                    </a>
                </li>
                 <li>
                    <a href="/counter-mapper">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <p>Sampiyon Counterlari</p>
                    </a>
                </li>
                 <li>
                    <a href="/item-mapper">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <p>Sampiyon-Esya</p>
                    </a>
                </li>
                <li>
                    <a href="/rune-mapper">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <p>Sampiyon-Run</p>
                    </a>
                </li>
                <li>
                    <a href="/spell-mapper">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <p>Sampiyon-Buyu</p>
                    </a>
                </li>
                <li>
                    <a href="/mastery-mapper">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <p>Sampyion-Kabiliyet</p>
                    </a>
                </li>
                <li>
                    <a href="/itemTip-mapper">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <p>Esya Ipuclari</p>
                    </a>
                </li>
                @endif
                <li class="active-pro">
                    <a>
                        <p class="copyright">
                            &copy; 2017 LoLcu.com
                        </p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed hidden-md hidden-lg">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Lolcu</a>
                </div>
                <div class="collapse navbar-collapse">
                </div>
            </div>
        </nav>
        <div class="content" ng-app="lolcuApp" ng-controller="mainController">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<script src="lolcu/js/bootstrap.min.js" type="text/javascript"></script>
<!-- Angular JS --> 
<script src="js/vendor/angular.min.js" type="text/javascript"></script>
<script src="js/vendor/angular-ui-router.min.js" type="text/javascript"></script>
<!-- App -->
<script src="app/module.js"></script>
<script src="app/controllers.js"></script>
<script src="lolcu/js/dashboard.js"></script>
<script src="lolcu/js/main.js"></script>
</body>
</html>
