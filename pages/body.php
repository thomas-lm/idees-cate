	<body>
      <?php include_once("cookieavert.php") ?>
		<?php include_once("analyticstracking.php") ?>
<?php include_once("recapcha.php") ?>
		<header id="top" role="banner">
			<h1>
				<a href="<?php echo $urlBase; ?>" title="Idées-caté, ressources pédagogiques pour le caté">
					<img src="<?php echo $urlBase; ?>files/images-site/logo.png" alt="Idées-caté" />
					<span class="sous-titre">Ressources pédagogiques pour le caté</span>
				</a>
			</h1>
			<select id="button-menu-mobile" onchange="changePage(this.value,'<?php echo $urlBase; ?>')">
				<option value="" selected style="display: none">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menu</option>
				<?php include("menu-select.php"); ?>
			</select>
			<div id="bd-header-search">
				<form action="<?php echo $urlBase; ?>search.html" id="cse-search-box">
					<div>
						<input type="hidden" name="cx" value="partner-pub-8188728978177986:2181928772" />
						<input type="hidden" name="cof" value="FORID:10" />
						<input type="hidden" name="ie" value="UTF-8" />
						<input type="text" id="search-input" name="q" placeholder="Rechercher sur le site"/>
						<input type="submit" id="search-button" name="sa" value="" />
					</div>
				</form>
			</div>
			<div id="social-buttons">
				<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo $urlBase; ?>&amp;locale=fr_FR&amp;layout=button_count&amp;send=true&amp;show_faces=false&amp;&amp;action=like&amp;font=verdana&amp;colorscheme=light&amp;height=22" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:190px; height:22px;" allowtransparency="true"></iframe>
				<a href="https://twitter.com/share" class="twitter-share-button" data-via="twitterapi" data-lang="fr" data-url="<?php echo $urlBase;?>">Tweet</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
			<div id="bd-header-link">
				<a href="<?php echo $urlBase; ?>forum.html" title="Espace d'échange : posez vos questions, les internautes vous répondent">Forum</a> / <a href="<?php echo $urlBase; ?>contact.html" title="Pour me contacter">Contactez nous</a> 
			</div>			
			<nav role="navigation" id="main-nav-content">
				<ol id="main-nav">
					<?php include("menu.php"); ?>
				</ol>
			</nav>
			
			<div class="sponsor-top">
			<?/*
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- v4-banner-reactive -->
				<ins class="adsbygoogle v4-banner-reactive"
					  style="display:inline-block"
					  data-ad-client="ca-pub-8188728978177986"
					  data-ad-slot="2289236375"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>*/?>
			</div>
		</header>
		<div id="content" role="main">
			<?php include("pages.php"); ?>
		</div>
		<script type="text/javascript">
			initMignature();
			initScroll();
		</script>
		<footer id="bottom" role="contentinfo">
			<p><a href="#top">retour en haut</a></p>
			<div class="sponsor-max">
            <?/* v4-banner-max */
			/*<script type="text/javascript"><!--
            google_ad_client = "ca-pub-8188728978177986";
            
            google_ad_slot = "9232281579";
            google_ad_width = 728;
            google_ad_height = 90;
            //-->
            </script>
            <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
            </script>*/?>
         </div>
         <div id="copyright">
            <p>© idees-cate.com 2014</p>
            <p>Les ressources disponibles sur ce site vous sont proposées gratuitement.<br/>
				Si vous souhaitez les utiliser sur un site internet (sauf images) ou dans une publication,<br/>
				n'oubliez pas d'en indiquer la provenance.</p>
            <p>Je vous remercie.</p>
         </div>
         <div id="visiteurs-map">
            <a href="http://www.clustrmaps.com/map/Idees-cate.com" target="_blank" title="Carte d'où viennent les visiteurs">
               <img src="http://www3.clustrmaps.com/stats/maps-no_clusters/www.idees-cate.com-thumb.jpg" alt="D'où viennent les visiteurs" />
            </a>
         </div>
		</footer>
		<div id="image-screen">
         <div id="image-mask" onclick="closePreview()"></div>
         <div id="image-content">
            <p><a href="<?php echo $urlBase; ?>print/" target="_blank" id="bt-image-print" title="imprimer l'image">imprimer</a> / <a id="bt-image-close" onclick="closePreview()" title="fermer l'image">fermer</a></p>
				<img id="img-image-preview" src="<?php echo $urlBase; ?>files/images-site/404.png" />
				</div>
      </div>				
	
		<div class="sponsor-bot">
			<?/*<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- v4-banner-reactive -->
			<ins class="adsbygoogle v4-banner-reactive"
				  style="display:inline-block"
				  data-ad-client="ca-pub-8188728978177986"
				  data-ad-slot="2289236375"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>*/?>
		</div>
	</body>
</html>
