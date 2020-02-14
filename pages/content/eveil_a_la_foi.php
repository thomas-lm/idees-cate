<?php
if(isset($_GET['sn'])){
   $seance=$_GET['sn'];
   $seance=str_replace(".","",$seance);
   $seance=str_replace("/","",$seance);
   if(file_exists("pages/content/eveil_a_la_foi/$seance.php")){
		?>
		<div id="page-eveil_a_la_foi" class="page">
		<?php
			include("sociallink.php");
			include("eveil_a_la_foi/$seance.php");
		?>
		</div>
		<?php
   } else {
      include("404.php");
   }
} else {
?>
<div id="page-eveil_a_la_foi" class="page">
	<?php
		include("sociallink.php");
	?>
	<h1 class="titre3">EVEIL A LA FOI</h1>
	
	<p class="centre">Certaines de ces rencontres sont inspirées du travail de Noëlle Le Duc, <br>
	auteur éditeur de la collection "La vie spirituelle des enfants",<br>
	Le Micocoulier, à Venasque,<br>et qui propose des ouvrages et du matériel pédagogique.</p>
	
	<p class="centre">Nous la remercions vivement pour son aide précieuse.<br>
	(Cliquer sur l'image ci-dessous pour voir et commander les créations de Noëlle Le Duc)</p>
	
	<p class="centre">
		<a href="<?php echo $urlBase; ?>files/other/pdf/noelle_le_duc.pdf" target="_blank">
			<img src="<?php echo $urlBase; ?>files/images-max/noelleleduc.jpg" title="La vie spirituelle des enfants">
		</a>
	</p>
	<br>
	<ul>
		<li><b>Pour une première rencontre:</b> <a href="<?php echo $urlBase; ?>eveil_a_la_foi/accueil.html">Accueil.</a> ou <a href="<?php echo $urlBase; ?>le_cate/apprendreaseconnaitre.html"> Pour se connaître un peu mieux.</a></li>
		<li><a href="<?php echo $urlBase; ?>eveil_a_la_foi/dieutumeconnais.html">Dieu, Tu me connais.</a></li>
		<li><a href="<?php echo $urlBase; ?>eveil_a_la_foi/creation.html">La création.</a></li>
		<li><a href="<?php echo $urlBase; ?>eveil_a_la_foi/creationdelhumain.html">La création de l'homme.</a></li>
		<li><a href="<?php echo $urlBase; ?>eveil_a_la_foi/la_terre_que_jhabite.html">La terre que j'habite: spectacle et fresque.</a></li>
		<li><a href="<?php echo $urlBase; ?>eveil_a_la_foi/lamourdedieu.html">L'Amour de Dieu.</a></li>
		<li><a href="<?php echo $urlBase; ?>eveil_a_la_foi/dieu_mapprend_a_aimer.html">Dieu m'apprend à aimer.</a></li>
		<li><a href="<?php echo $urlBase; ?>eveil_a_la_foi/toussaint.html">La Toussaint</a></li>
		<li><a href="<?php echo $urlBase; ?>eveil_a_la_foi/attendrejesus.html">AVENT-NOEL: Attendre Jésus.</a></li>
		<li><a href="<?php echo $urlBase; ?>eveil_a_la_foi/jesusanazareth.html">Jésus à Nazareth.</a></li>
		<li><a href="<?php echo $urlBase; ?>eveil_a_la_foi/tempeteapaisee.html">La tempête apaisée.</a></li>
		<li><a href="<?php echo $urlBase; ?>eveil_a_la_foi/bonberger.html">Le bon berger.</a></li>
		<li><a href="<?php echo $urlBase; ?>eveil_a_la_foi/semainesainte.html">La Semaine Sainte.</a></li>
		<li><a href="<?php echo $urlBase; ?>eveil_a_la_foi/apparitionatiberiade.html">Apparition au lac de Tibériade.</a></li>
	</ul>
</div>
<?php
}
?>