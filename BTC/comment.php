<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Cryptos Casino - Win easily cryptos !</title>
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
		<?php include("https://myrasp.fr/Accueil/headergg.php?banniere=1"); ?>
	</head>
	<body class="is-preload">
			<div id="wrapper" class="fade-in">
					<header id="header">
						<a href="../" class="logo">Cryptos Casino</a>
					</header>
					<nav id="nav">
						<ul class="links">
							<li><a href="index.php">Home</a></li>
							<li><a href="verify.php">Verify participation</a></li>
							<li class="active"><a href="comment.php">Leave a comment</a></li>
						</ul>
						<ul class="icons">
							<li><a href="https://twitter.com/intent/tweet?status=Come%20play%20to%20try%20to%20win%20crypto-currencies%20!%20https://cryptos-casino.com" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://www.facebook.com/sharer/sharer.php?u=https://cryptos-casino.com" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						</ul>
					</nav>
					<div id="main">
							<article class="post featured">
								<header class="major">
									<h2><a href="#">Leave a comment</a></h2>
									<p>
										Some comments can be published on the site.<br>
										If you enter private information, the comment will not be published.
								</header>
								<?php
								if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
									try
									{
									    $bdd = new PDO('mysql:host=localhost;dbname=CryptosCasino;charset=utf8', 'USERNAME', 'PASSWORD');
									    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
									} catch (PDOException $e)
									{
									    echo 'Échec lors de la connexion : ' . $e->getMessage();
									}
									$req = $bdd->prepare("INSERT INTO `Messages`(`Coin`, `Nom`, `AdresseMail`, `Message`) VALUES ('BTC', ?, ?, ?)");
									$req->execute(array(htmlspecialchars($_POST['name']), htmlspecialchars($_POST['email']), htmlspecialchars($_POST['message'])));
									?>
									<h2 style="color: green;">Your message has been sent !</h2>
									<?php
								}
								?>
								<form method="post" action="comment.php">
									<div class="row gtr-uniform">
										<div class="col-6 col-12-xsmall">
											<input type="text" name="name" id="name" placeholder="Your name"  required />
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="email" name="email" id="email" placeholder="Your email"  required />
										</div>
										<div class="col-4 col-12-small" style="width: 100%;">
											<div class="col-12">
												<textarea name="message" id="message" placeholder="Enter your message" rows="6" required ></textarea>
											</div>
											<div class="col-12" style="display: flex; justify-content: center; align-items: center; padding-top: 20px;">
												<ul class="actions">
													<li><input type="submit" value="Send Message" class="primary" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
										</div>
									</div>
								</form>
							</article>
					</div>
					<div id="copyright">
						<ul><li>&copy; Cryptos Casino</li><li>2018</li></ul>
					</div>
			</div>
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
	</body>
</html>