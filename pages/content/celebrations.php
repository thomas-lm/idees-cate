<?php
if(isset($_GET['sn'])){
   $seance=$_GET['sn'];
   $seance=str_replace(".","",$seance);
   $seance=str_replace("/","",$seance);
   if(file_exists("pages/content/celebrations/$seance.php")){
		?>
		<div id="page-celebrations" class="page">
		<?php
			include("sociallink.php");
			include("celebrations/$seance.php");
		?>
		</div>
		<?php
   } else {
      include("404.php");
   }
} else {
?>
<div id="page-celebrations" class="page">
	<?php
		include("sociallink.php");
	?>

	<H1 class="txt-darkblue">FEUILLES DOMINICALES<BR>ET CELEBRATIONS</H1>
	

	<br>
	<h2 class="txt-vert centre"><u>FEUILLES DOMINICALES A, B, C</u></h2>
	
	<br>
<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/feuillesdominicalesanneeA.html">Feuilles dominicales de l'Année A: </a></p>
<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/feuillesdominicalesanneeB.html">Feuilles dominicales de l'Année B: </a></p>
<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/feuillesdominicalesanneeC.html">Feuilles dominicales de l'Année C: </a></p>



	


	<br>
	<h2 class="txt-vert centre"><u>CELEBRATIONS EVEIL A LA FOI</u></h2>

	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/eveilfoirentreeparoissiale.html">Célébration éveil à la foi: Rentrée paroissiale: Des mots pour prier..</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/eveilfoirevededieu.html">Célébration éveil à la foi: Le rêve de Dieu.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/eveilfoipartage.html">Célébration éveil à la foi autour du partage.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/eveilfoiconfiance.html">Célébration éveil à la foi autour de la confiance.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/eveilfoiveillez.html">Célébration éveil à la foi, temps de l'Avent: Veillez.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/eveilfoiannonciation.html">Célébration éveil à la foi: l'Annonciation.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/eveilfoinoel.html">Célébration éveil à la foi: Noël.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/eveilfoiepiphanie.html">Célébration éveil à la foi: Epiphanie.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/eveilfoientreecareme.html">Célébration éveil à la foi: Entrée en Carême.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/eveilfoifiguiersterile.html">Célébration éveil à la foi: Figuier stérile.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/eveilfoirameaux.html">Célébration éveil à la foi: Fêtons les Rameaux.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/eveilfoimoisdemarie.html">Célébration éveil à la foi: mois de Marie.</a></p>


	<br>
	<h2 class="txt-vert centre"><u>AUTRES CELEBRATIONS</u></h2>
	<br>

	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/journeederentreeparoissiale.html">Quelques idées de célébrations pour une rentrée paroissiale.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/toussaint.html">Célébration Toussaint + cartes à distribuer en fin de messe.</a></p>
<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/christroi.html">Christ roi.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/noel.html">Quelques idées pour l'Avent et Noël.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/presentationjesus.html"> Célébration Présentation de Jésus au Temple</a></p>
<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/baptemejesus.html">Baptême de Jésus.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/cana.html">Les Noces de Cana: Mise en valeur du mot Alliance.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/mercredidescendres.html">Célébration Mercredi des cendres</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/marchedecareme-Marche de Carême: journée d'entrée en Carême avec sacrement de Réconciliation (thème brebis perdue).html">Marche de Carême: journée d'entrée en Carême avec sacrement de Réconciliation (thème brebis perdue).</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/caremedim2.html">Deuxième dimanche de Carême: autour d'Abraham et de la transfiguration.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/caremedim3.html">Troisième dimanche de Carême: Samaritaine.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/caremedim4.html">Quatrième dimanche de Carême: Fils prodigue.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/rameaux.html">Dimanche des Rameaux et remise de croix.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/veilleepascale.html">Veillée Pascale.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/pentecote.html">Quelques idées pour la célébration de la Pentecôte.</a></p>
	<br><br>
	
	
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/royaume.html">Célébration ayant pour thème le Royaume.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/paraboledestalents.html">Célébration ayant pour thème la parabole des talents.</a></p>


	<br>
	<h2 class="txt-vert centre"><u>CELEBRATIONS COMMUNIONS</u></h2>
	<br>

	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/communion7.html">Thème Jésus pain de vie.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/communion.html">Thème de la pêche miraculeuse</a></p> 
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/communion1.html">Thème du pasteur.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/communion3.html">Evangile de l'envoi des apôtres pour la moisson.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/communion8.html">Evangile d'Emmaüs.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/communion5-Communion entre Ascension et Pentecôte. (Evangile Jean 17,11-19).html">Communion entre Ascension et Pentecôte. (Evangile Jean 17,11-19)</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/communion6.html">Autre communion entre Ascension et Pentecôte.</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/communion4.html">Communion le jour de la Trinité</a></p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/communionsmileys.html">Communion avec le thème des smileys</a> </p>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/communion2.html">Autres idées.</a></p>


	<br>
	<h2 class="txt-vert centre"><u>CELEBRATIONS PROFESSION DE FOI</u></h2>
	<br>
	<p class="centre"><a href="<?php echo $urlBase; ?>celebrations/professiondefoi.html">Quelques idées pour une profession de foi.</a></p>

	<br><br>
	<p class="centre">(Pour aller vers le plan, les chants et prières, les images et coloriages, le forum, ne fermez pas! Remontez tout simplement au début de cette rencontre).</p>

</div>
<?php
}
?>