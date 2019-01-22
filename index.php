<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=CryptosCasino;charset=utf8', 'root', 'PASSWORD');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e)
{
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}
$req = $bdd->query("UPDATE `Stats` SET `NbUsers`=`NbUsers`+1,`Quand`= NOW() WHERE 1");
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Cryptos Casino - Win easily cryptos !</title>
		<meta name="google-site-verification" content="yoWymPVL5vXVCT1nJtSMNA9FaE9rrLoWKFeL8vylDf8" />
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<?php include("https://myrasp.fr/Accueil/headergg.php?banniere=1"); ?>
	</head>
	<body class="is-preload">
			<div id="wrapper" class="fade-in">
					<header id="header">
						<a href="index.php" class="logo">Cryptos Casino</a>
					</header>
					<nav id="nav">
						<ul class="links">
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="#cryptos">Choose cryptocurrency</a></li>
							<li><a href="#comments">Comments</a></li>
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
										You send a few cryptocurrencies, and you can receive ten times your bet !<br>
										It's not a question of luck, it's the 25th player who wins, then it starts from scratch, and starts again.</p>
								</header>
								<h2>You too, come play to try to win a lot of cryptocurrencies !!</h2>
								<center>Your bet is about $ 10 and the win is about $ 100 !!<br>Come try to win this jackpot now!</center>
								<br><h3 id="cryptos">Click on the cryptocurrency you want to start with</h3>
								<div style="display: flex; flex-direction: column; flex-wrap: wrap;">
									<div style="display: flex; flex-direction: row; padding-top: 25px; padding-bottom: 25px;">
										<a href="BCH" style="display: flex; flex-direction: column; text-align: center; width: 50%; justify-content: center; align-items: center; border: none;">
											<img src="images/bch.png"  style="width: 50%; height: 100%;" title="Bitcoin Cash">
											Bitcoin Cash
										</a>&nbsp;
										<a href="BCN" style="display: flex; flex-direction: column; text-align: center; width: 50%; justify-content: center; align-items: center; border: none;">
											<img src="images/bcn.png"  style="width: 50%; height: 100%;" title="Bytecoin">
											Bytecoin
										</a>&nbsp;
									</div>
									<div style="display: flex; flex-direction: row; padding-top: 25px; padding-bottom: 25px;">
										<a href="BTC" style="display: flex; flex-direction: column; text-align: center; width: 50%; justify-content: center; align-items: center; border: none;">
											<img src="images/btc.png"  style="width: 50%; height: 100%;" title="Bitcoin">
											Bitcoin
										</a>&nbsp;
										<a href="DASH" style="display: flex; flex-direction: column; text-align: center; width: 50%; justify-content: center; align-items: center; border: none;">
											<img src="images/dash.png" style="width: 50%; height: 100%;" title="Dash">
											Dash
										</a>&nbsp;
									</div>
									<div style="display: flex; flex-direction: row; padding-top: 25px; padding-bottom: 25px;">
										<a href="DOGE" style="display: flex; flex-direction: column; text-align: center; width: 50%; justify-content: center; align-items: center; border: none;">
											<img src="images/doge.png" style="width: 50%; height: 100%;" title="Doge">
											Doge
										</a>&nbsp;
										<a href="LTC" style="display: flex; flex-direction: column; text-align: center; width: 50%; justify-content: center; align-items: center; border: none;">
											<img src="images/ltc.png"  style="width: 50%; height: 100%;" title="Litecoin">
											Litecoin
										</a>&nbsp;
									</div>
									<div style="display: flex; flex-direction: row; padding-top: 25px; padding-bottom: 25px;">
										<a href="ETH" style="display: flex; flex-direction: column; text-align: center; width: 50%; justify-content: center; align-items: center; border: none;">
											<img src="images/eth.png"  style="width: 50%; height: 100%;" title="Ethereum">
											Ethereum
										</a>&nbsp;
										<a href="ETC" style="display: flex; flex-direction: column; text-align: center; width: 50%; justify-content: center; align-items: center; border: none;">
											<img src="images/etc.png"  style="width: 50%; height: 100%;" title="Ethereum Classic">
											Ethereum Classic
										</a>&nbsp;
									</div>
									<div style="display: flex; flex-direction: row; padding-top: 25px; padding-bottom: 25px;">
										<a href="XMR" style="display: flex; flex-direction: column; text-align: center; width: 50%; justify-content: center; align-items: center; border: none;">
											<img src="images/xmr.png"  style="width: 50%; height: 100%;" title="Monero">
											Monero
										</a>&nbsp;
										<a href="ZEC" style="display: flex; flex-direction: column; text-align: center; width: 50%; justify-content: center; align-items: center; border: none;">
											<img src="images/zec.png"  style="width: 50%; height: 100%;" title="Zcash">
											Zcash
										</a>&nbsp;
									</div>
								</div>
								<br><br><div id="comments">
									<h2>Comments about the site</h2>
									<p>There are no comments for the moment...</p>
								</div>
							</article>
					</div>
					<div id="copyright">
						<ul><li>&copy; Cryptos Casino</li><li>2018</li></ul>
					</div>
			</div>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>