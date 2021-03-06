<?php
session_start();

$uNameValue = $_SESSION[ 'uName' ];

include( 'config.php' );
?>
<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Create Media Group | Timesheet</title>
	<meta name="description" content="Image Library for CMG & SCB">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="shortcut icon" href="img/favicon/favicon.ico">
	<link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicon/favicon-194x194.png" sizes="194x194">
	<link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="img/favicon/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16">

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/grid12.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap-tagsinput.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/datatables.min.css">
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


	<header class="c-main-header clearfix">
		<div class="header-row header-row--sty-1">
			<div class="t-layout">
				<div class="t-row">
					<div class="t-col header-col">
						<a href="#" class="c-logo-w-title logo-w-title--sub-title"><i class="c-logo">SCB</i><i class="txt">Timesheet<span>Track time on projects</span></i></a>
					</div>
					<div class="t-col header-col t-col--compress panel-action">Hi <?php echo $uNameValue; ?></div>
					<div class="t-col header-col t-col--compress divide hide">
						<a href="profile.html" class="c-profile-info">
							<div class="icon">
								<img src="img/cmg-logo--small.png" alt="CMG">
							</div>
							<div class="txt">
								CMG
							</div>
						</a>
					</div>
					<div class="t-col header-col t-col--compress logout">
						<a href="#" class="c-icon">LOGOUT <i class="fa fa-sign-out"></i></a>
					</div>
				</div>
			</div>
		</div>
	</header>

        <main class="c-main">
            <section class="c-content-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-header">
                                <h1 class="title">ADD CLIENT</h1>
                            </div>

                            <form action="addclient.php" method="post" class="c-form-sty-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="c-form-item">
                                                    <label for="addclientname">Client Name</label>
                                                    <input type="text" id="addclientname" name="addclientname">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="c-form-item">
                                                   	<label>&nbsp;</label>
                                                    <input type="submit" class="c-btn" value="Add">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>    
            </section>
        </main>

	<footer class="c-main-footer">
		<p>2017 &copy; Create Media Services</p>
	</footer>


	<!-- <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script> -->
	<script src="js/vendor/jquery-1.12.0.min.js"></script>
	<script src="js/vendor/select2.full.min.js"></script>
	<script src="js/vendor/bootstrap-tagsinput.min.js"></script>
	<script src="js/vendor/datatables.min.js"></script>
	<script src="js/vendor/owl.carousel.min.js"></script>

	<script src="js/vendor/collapse.js"></script>
	<script src="js/vendor/transition.js"></script>
	<script src="js/vendor/moment.min.js"></script>
	<script src="js/vendor/bootstrap-datetimepicker.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/custom.js"></script>

	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
		( function ( b, o, i, l, e, r ) {
			b.GoogleAnalyticsObject = l;
			b[ l ] || ( b[ l ] =
				function () {
					( b[ l ].q = b[ l ].q || [] ).push( arguments )
				} );
			b[ l ].l = +new Date;
			e = o.createElement( i );
			r = o.getElementsByTagName( i )[ 0 ];
			e.src = 'https://www.google-analytics.com/analytics.js';
			r.parentNode.insertBefore( e, r )
		}( window, document, 'script', 'ga' ) );
		ga( 'create', 'UA-XXXXX-X', 'auto' );
		ga( 'send', 'pageview' );
	</script>
</body>

</html>