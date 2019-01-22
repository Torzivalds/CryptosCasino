<?php
if (!empty($_POST['paymentID']) AND !empty($_POST['publicAdress'])) {
	try
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=CryptosCasino;charset=utf8', 'USERNAME', 'PASSWORD');
	    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e)
	{
	    echo 'Échec lors de la connexion : ' . $e->getMessage();
	}
	# Verifier le dernier résultat
	$req = $bdd->query("SELECT `Numero` FROM `DOGE` WHERE 1 ORDER BY ID DESC LIMIT 1");
	$numeroPartieNow = 1;
	while ($donnees = $req->fetch()){
		$numeroPartieNow = $donnees['0']+1;
	}
	if ($numeroPartieNow == 26) {
		$numeroPartieNow = 1;
	}
	$resultatPartieNow = 3;
	if ($numeroPartieNow == 25) {
		$resultatPartieNow = 2;
	}
	$req = $bdd->prepare("INSERT INTO `DOGE`(`WalletAdress`, `IDTransaction`, `Resultat`, `Numero`, `DateJeu`) VALUES (?, ?, ?, ?, ?)");
	$req->execute(array(htmlspecialchars($_POST['publicAdress']), htmlspecialchars($_POST['paymentID']), $resultatPartieNow, $numeroPartieNow, time()));
	header('Location: verify.php?publicAdress=' . htmlspecialchars($_POST['publicAdress']));
	exit();
}
?>
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
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="verify.php">Verify participation</a></li>
							<li><a href="comment.php">Leave a comment</a></li>
						</ul>
						<ul class="icons">
							<li><a href="https://twitter.com/intent/tweet?status=Come%20play%20to%20try%20to%20win%20crypto-currencies%20!%20https://cryptos-casino.com" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://www.facebook.com/sharer/sharer.php?u=https://cryptos-casino.com" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						</ul>
					</nav>
					<div id="main">
							<article class="post featured">
								<header class="major">
									<h2><a href="#">The best way to win crypto currencies !</a></h2>
									<p>
										The principle of this site is simple:<br>
										Each player sends 5200 DOGE and tries to win 52000 DOGE!<br>
										It's not a question of luck, it's the 25th player who wins, then it starts from scratch, and starts again.</p>
								</header>
								<h2>You too, come play to try to win 52k Dogecoin (52000 DOGE) !!</h2><br>
								<form method="post" action="index.php">
									<div id="deuxChamps">
										<p>
											Send 5200 DOGE to this adress :
											<input type="text" name="myAdress" placeholder="D6zyKUWo9KXrvLJVHvKibD4uqk2gw8Umk4" value="D6zyKUWo9KXrvLJVHvKibD4uqk2gw8Umk4">
										</p>
										<?php $paymentID = md5(time());?>
										<p>
											With this Payment ID :
											<input type="text" name="paymentID" placeholder="<?php print($paymentID); ?>" value="<?php print($paymentID); ?>">
										</p>
									</div>
									<h4>Enter your public Dogecoin Adress :</h4>
									<input type="text" name="publicAdress" placeholder="Enter your public Dogecoin adress" required>
									If you win, you will receive a Dogecoin on this wallet.<br>
									<h6 style="font-style: italic;">If you send the form but the transaction you need to make is not done,<br>your Dogecoin address may be banned from the site.</h6>
									<input class="primary" type="submit" value="Validate the transaction">
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