<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"><html lang="fr"><head><!-- Global site tag (gtag.js) - Google Analytics --><script async src="https://www.googletagmanager.com/gtag/js?id=UA-110191264-1"></script><script>  window.dataLayer = window.dataLayer || [];  function gtag(){dataLayer.push(arguments);}  gtag('js', new Date());  gtag('config', 'UA-110191264-1');</script>    <title>PUNCHCLASH - Le Marteau Nietzsche VS Le Météore Booba</title>  <link rel="stylesheet" href="style.css"></head>	<body>	<div id="fb-root"></div>	<script>(function(d, s, id) {	  var js, fjs = d.getElementsByTagName(s)[0];	  if (d.getElementById(id)) return;	  js = d.createElement(s); js.id = id;	  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.10';	  fjs.parentNode.insertBefore(js, fjs);	}(document, 'script', 'facebook-jssdk'));</script>	<center><a href="http://www.punchclash.com"><img src="pics/punchclash-logo.png" alt="Le Marteau contre Le Météore"></a></center>		<?php					require './mysqli_connect.php'; 															if(isset ($_GET['round'])) {										if ($_GET['round'] > -1 && $_GET['round'] < 94) {						$rdNumber = $_GET['round'];					} else {						$rdNumber = 0;						$_GET['round'] = 0;					}				}				else {					$rdNumber = 0;				}				$prevRdNumber = $rdNumber - 1;							$nextRdNumber = $rdNumber + 1;				$_GET['round'] = $rdNumber;		?>			<nav>	 <ul>	 	  <li name="navprev" class="prev">		<form action="index.php" method="get">			<input id="prevButton" type="submit" name="round" onclick="				<?php 					if ($rdNumber > -1) {						$rdNumber = $prevRdNumber; 					}					else {						$rdNumber = 0;					}				?>" value="<?php 					if ($rdNumber > -1) { 						echo $prevRdNumber; 					}				?>" <?php 					if ($prevRdNumber < 0) {						echo ' . style="border: none;" disabled . ' ;					}					else {						"";					}				?>>						</form>	  </li>	 	  <li>		<form action="index.php" name="roundselector" method="get">ROUND 			<input id="input" class="field" type="text" name="round" size="1" maxlength="2" value=<?php echo $_GET['round']; ?>> /93 &nbsp;			<input id="fight" type="submit" onclick="				<?php 					if ($_GET['round'] < 94 && $_GET['round'] > -1) {						$rdNumber = $_GET['round'];					} else { 						$rdNumber = 0;						$_GET['round'] = 0;					}			 ?>" value="FIGHT!">		</form>	  </li>	  	  <li name="navnext" class="next">		 <form action="index.php" method="get">			<input id="nextButton" type="submit" name="round" onclick="				<?php {						$RdNumber = $nextRdNumber;					}					?>" value="<?php 					if ($rdNumber < 93) {						echo $nextRdNumber; 					}				?>"  <?php 					if ($nextRdNumber > 93) {						echo ' . style="border: none;" disabled . ' ;					}					else {						"";					}				?>>		 </form>	  </li>	 </ul>	</nav>	<?php				$sql = "SELECT * FROM main WHERE round = " ."$rdNumber". "";								mysqli_set_charset($dbc, "utf8");								$result = mysqli_query($dbc, $sql) or die("Bad Query: $sql");								while ($row = mysqli_fetch_assoc($result)) {	?>		<div name="clash">		<div class="data" id=portraitn>			<p><a target="_blank" href="http://fr.wikipedia.org/wiki/Nietzsche"><img src="pics/nietzsche_site.jpg" alt="Nietzsche aka Le Marteau" title="C'est qui ?!"></a></p>		</div>		<div class="data" id=portraitb>			<p><a target="_blank" href="http://fr.wikipedia.org/wiki/Booba"><img src="pics/booba_site.jpg" alt="Booba aka Le Météore" title="C'est qui ?!"></a></p>		</div>				<div class="quote" id=quoten>			<p><?php  echo "{$row['n_quote']}"; ?></p>		</div>		<div class="quote" id=quoteb>			<p><?php echo "{$row['b_quote']}"; ?></p>		</div>				<div class="data" id=refn>			<p><?php echo "{$row['n_ref']}"; ?></p>		</div>				<div class="data" id=refb>			<p><?php echo "{$row['b_ref']}"; ?></p>		</div>	</div>	<div name="social media">		<div class="fb-like"			data-href="https://www.facebook.com/PUNCHCLASH"			data-layout="button_count"			data-colorscheme="light"			data-action="like"			data-size="small"			data-show-faces="false"			data-share="false">		</div>			<?php 			if ($rdNumber == 0) {				echo ' <div class="fb-comments" data-href="http://www.punchclash.com" data-width="1000" data-numposts="10"></div> 					   <div class="address">première mise en ligne le 29/02/2012<br><a href="http://www.twitter.com/incolas">incolas</a></div> ';			}			}						$_GET['round'] = $rdNumber;		?>	</div>		<script src="punch.js"></script></body></html>