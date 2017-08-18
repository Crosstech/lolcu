<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="lolcu/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- CSRF Token -->
	<meta content="{{ csrf_token() }}" name="csrf-token" />
	<title>
		{{ config('app.name', 'Lolcu') }}
	</title>

    <base href="/" />

    <link href="lolcu/css/bootstrap.min.css" rel="stylesheet" />
    <link href="lolcu/css/animate.min.css" rel="stylesheet"/>

    <link href="lolcu/css/dashboard.css" rel="stylesheet"/>

    <link href="lolcu/css/custom.css" rel="stylesheet" />

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="lolcu/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <script>
		window.Lolcu = <?= json_encode([ 'csrfToken' => csrf_token() ]); ?>
	</script>
    @yield('scripts')
</head>
<body>

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
                        <i class="pe-7s-graph"></i>
                        <p>Sihirdar Ara</p>
                    </a>
                </li>
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

</body>

    <script src="js/vendor/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="lolcu/js/bootstrap.min.js" type="text/javascript"></script>
    
    <!-- Angular JS -->
    <script src="js/vendor/angular.min.js" type="text/javascript"></script>
    <script src="js/vendor/angular-ui-router.min.js" type="text/javascript"></script>
    
    <!-- App -->
    <script src="app/module.js"></script>
    <script src="app/controllers.js"></script>

	<script src="lolcu/js/dashboard.js"></script>
    <script src="lolcu/js/main.js"></script>
</html>
