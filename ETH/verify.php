<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=CryptosCasino;charset=utf8', 'USERNAME', 'PASSWORD');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e)
{
    echo 'Échec lors de la connexion : ' . $e->getMessage();
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
							<li><a href="index.php">Home</a></li>
							<li class="active"><a href="verify.php">Verify participation</a></li>
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
									<h2><a href="#">Verify participation</a></h2>
									<p>
										Enter your public Ethereum address and see if you have won the jackpot !!<br>
										If the result appears in yellow, it is a participation that has not been verified manually.<br>
										It can change if at least one transaction in the list is false or incomplete.<br>
										If you have won and the entry has been validated manually, you must receive your prize within 24 hours
								</header>
								<form method="get" action="verify.php">
									<h4>Enter your public Ethereum Adress :</h4>
									<input type="text" name="publicAdress" placeholder="Enter your public Ethereum adress" required><br>
									<input class="primary" type="submit" value="Search">
								</form>
								<?php
								if (!empty($_GET['publicAdress'])) {
									$req = $bdd->prepare("SELECT `Resultat` FROM `ETH` WHERE `WalletAdress` = ? ORDER BY ID DESC LIMIT 50");
									$req->execute(array(htmlspecialchars($_GET['publicAdress'])));
									while ($donnees = $req->fetch()){
										if ($donnees['0'] == 1) {
											?>
											<h1 style="color: green;">You win !!!</h1>
											<center>This result is validated, you must receive your gain quickly !<br><a href="index.php">Click here to start again</a><br><a href="mailto:?subject=Cryptos Casino, The best way to win crypto currencies !&body=You too, come and try to win lots of cryptocurrency, i won 0.5 ETH !%0D%0A https://cryptos-casino.com">Share this with friends</a></center><br>
											<?php
										}
										elseif ($donnees['0'] == 2) {
											?>
											<h1 style="color: yellow;">You win !!!</h1>
											<center>This result is not validated manually. Wait some hours !<br><a href="index.php">Click here to start again</a></center><br>
											<?php
										}
										elseif ($donnees['0'] == 3) {
											?>
											<h1 style="color: yellow;">You lose.</h1>
											<center>This result is not validated manualy. Wait some hours !<br>
											You lost this time, but you may win next time !<br><a href="index.php">Click here to start again</a></center><br>
											<?php
										}
										elseif ($donnees['0'] == 4) {
											?>
											<h1 style="color: red;">You lose.</h1>
											<center>You lost this time, but you may win next time ! <br><a href="index.php">Click here to start again</a></center><br>
											<?php
										}
										else{
											?>
											<h1 style="color: red;">Transaction not detected</h1>
											<center>The transaction has not been detected.<br>If you have actually sent the necessary amount, <a href="comment.php">please contact us.</a></center><br>
											<?php
										}
									}
								}
								?>
								<h3>Last Winners</h3>
								<div class="table-wrapper">
									<table class="alt">
										<thead>
											<tr>
												<th><center><h5>Public Adress</h5></center></th>
												<th><center><h5>Gain</h5></center></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<?php
												$req = $bdd->prepare("SELECT `WalletAdress` FROM `ETH` WHERE `Resultat` = 1 AND `DateJeu` < ?");
												$req->execute(array(time()-600));
												$nbResultats = 0; 
												while ($donnees = $req->fetch()){
													$nbResultats = 1
													?>
													<td><?php echo($donnees['0']); ?></td>
													<td>0.5 ETH</td>
													<?php
												}
												if ($nbResultats == 0) {
													?>
													<td>This site is very young and there are still no winners</td>
													<td>No gain</td>
													<?php
												}
												?>
											</tr>
										</tbody>
									</table>
								</div>
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