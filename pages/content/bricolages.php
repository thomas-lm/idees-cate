<?php
if(isset($_GET['sn'])){
   $seance=$_GET['sn'];
   $seance=str_replace(".","",$seance);
   $seance=str_replace("/","",$seance);
   if(file_exists("pages/content/bricolages/$seance.php")){
		?>
		<div id="page-bricolages" class="page">
		<?php
			include("sociallink.php");
			include("bricolages/$seance.php");
		?>
		</div>
		<?php
   } else {
      include("404.php");
   }
} else {
?>
<div id="page-bricolages" class="page">
	<?php
		include("sociallink.php");
	?>
	<h1>
      <img src="<?php echo $urlBase; ?>files/images-max/bricolages.gif" alt="Quelques idées de bricolages pour le caté." />
   </h1>
	
	<p><a href="<?php echo $urlBase; ?>bricolages/alliance.html">Alliance:</a> Alliance avec Jésus et nos frères. Bracelet de l'Alliance. Croix en perles à repasser. Thème de Noé.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/ange.html">Ange:</a> Fabriquer un ange.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/anneeliturgique.html">Année liturgique- Calendrier:</a> Frise. Coloriage. Jeux: remets en ordre.</p>

<p><a href="<?php echo $urlBase; ?>bricolages/arbredevie.html">Arbre de vie: Pour se situer dans le Premier et le Nouveau Testament.</a></p>

<p><a href="<?php echo $urlBase; ?>bricolages/noel.html">Avent et Noël bricolages:</a> *Bricolages pour le temps de l'Avent et de Noël.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/beatitudes.html">Béatitudes:</a> Marque page. Jeu des dominos. Soleil.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/bougie.html">Bougie: </a> Thème de la confiance. Thème de la fête des lumières. Décor devant la crèche ou aux fenêtres.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/cana-Cana (Noces de Cana).html">Cana (Noces de Cana):</a>Puzzle. Coloriages. Un jeu de Mémory.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/careme.html">Carême:</a> Calendriers. Vitrail. Train de carême. Maison de Carême. Arbre de Carême. Dé de Carême. Images. Etoiles. Chemin de lumières. Signets. Frise.......</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/colombe.html">Colombe:</a> Mosaïque. Icône. Colombe en bristol.</p>
	
	<p><a href="<?php echo $urlBase; ?>bricolages/communion.html">Communion:</a> Signet. Croix. Enveloppe. </p>

	<p><a href="<?php echo $urlBase; ?>bricolages/creation.html">Création:</a> Croix de la création. Scrapbooking. Frise. Panneaux.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/croix.html">Croix:</a> Pour décorer le coin prière. Pour le temps de Pâques.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/dizainier.html">Dizainier:</a> Pour prier avec Marie.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/enveloppes.html">Enveloppes décorées:</a> Pour inviter des parents à nous rejoindre lors d'une célébration. Pour envoyer à ceux que l'on aime à Pâques, à Noël, pour une communion,...</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/epiphanie.html">Epiphanie- Rois mages:</a> Couronne des rois. Rois mages. Jeu autour des fruits de l'Esprit.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/espritsaint.html">Esprit Saint:</a>Vitrail. Peintures et jeux autour des dons et des fruits de l'Esprit Saint.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/figuier.html">Figuier stérile:</a> Figuier en carton et eucalyptus.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/fleursdepapier.html">Fleurs en papier:</a> Pour décorer le coin prière.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/frises.html">Frises:</a> Frises premier testament. Frise d'enfants. Frise Montgolfières. Frise de colombes. Frise récapitulative de toute l'année.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/icone.html">Icône:</a> *Pour décorer le coin prière. *Pour compléter une rencontre sur Marie.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/invitation.html">Invitation:</a> *Pour une première communion. *On pourra aussi reprendre l'idée pour Noël, pour Pâques.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/isaie.html">Isaïe: autour du thème de la feuille.</a></p>

	<p><a href="<?php echo $urlBase; ?>bricolages/lettre.html">Lettre colorée:</a> *Pour inviter des parents à nous rejoindre lors d'une célébration. *Pour envoyer à ceux que l'on aime à Pâques, à Noël,... *Pour inviter mes amis à m'accompagner le jour de ma première communion.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/mangeoire.html">Mangeoire:</a> *Pour compléter une rencontre avec saint françois, patron des écologistes.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/marie.html">Marie:</a> *Pour compléter une rencontre parlant de Marie.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/marqpage.html">Marque page:</a> *Pour compléter une rencontre (modèle proposé: le grain de blé). *Pour offrir à ceux que l'on aime.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/moise.html">Moïse:</a> *Thème buisson ardent. Thème mer, désert, Terre Promise.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/mosaique.html">Mosaïque:</a> *Pour Noël.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/mouton.html">Mouton:</a> *Pour compléter une rencontre parlant de David (berger), de Noël (visite des bergers), de la brebis perdue et retrouvée, de Pâques (agneau pascal). *Pour le sacrement de Réconciliation.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/noe.html">Noé:</a> *Pour compléter une rencontre autour du thème de l'arche de Noé.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/noel.html">Noël bricolages:</a> *Bricolages pour le temps de l'Avent et de Noël.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/papillon.html">Papillon:</a> *Pour compléter une rencontre autour du thème de la création. *Pour compléter une rencontre autour du thème de la mort.</p>


	<p><a href="<?php echo $urlBase; ?>bricolages/paques.html">Pâques:</a> Signets. Cloches. Arbre de Pâques. Dessins. </p>


	<p><a href="<?php echo $urlBase; ?>bricolages/parabolegrainedemoutarde.html">Parabole de la graine de moutarde:</a></p>

	<p><a href="<?php echo $urlBase; ?>bricolages/pechemiraculeuse.html">Pêche miraculeuse:</a> Pots de fleurs.</p>
	
	<p><a href="<?php echo $urlBase; ?>bricolages/pentecote.html">Pentecôte: </a> Tryptique à colorier. Colombes.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/personnages.html">Personnages en bristol pour mime:</a> Exemple proposé: la parabole des talents.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/phare.html">Phare:</a></p>

	

	<p><a href="<?php echo $urlBase; ?>bricolages/presentationautemple.html">Présentation de Jésus au Temple.</a></p>

	<p><a href="<?php echo $urlBase; ?>bricolages/professiondefoi.html">Profession de foi: Vitraux.</a></p>

	<p><a href="<?php echo $urlBase; ?>bricolages/prophete.html">Prophètes: Royaume du Sud et du Nord.</a></p>

	<p><a href="<?php echo $urlBase; ?>bricolages/sacrements.html">Sacrements:</a> Disque des sacrements. Mobile.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/pierre.html">Saint Pierre:</a> Coq. Vitrail. Serviettes décorées.</p>


	<p><a href="<?php echo $urlBase; ?>bricolages/seldelaterre.html">Sel de la terre- Lumière des hommes:</a> Marque page. Phare.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/semainesainte.html">Semaine Sainte:</a>Chemin vers Pâques. Roue multicolore. Bougies en papier. Couronne d'épines. Votives. Coin prière. Images.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/signets.html"> Signets:</a> Pour Noël. Pour offrir un jour de communion (Autres modèles dans "L'Eucharistie aujourd'hui", caté.)</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/temple.html"> Temple:</a>Les marchands duTemple...</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/tentations.html"> Tentations:</a>Vitrail...</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/transfiguration.html"> Transfiguration:</a>Jeu de dominos</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/toussaint.html"> Toussaint:</a> Vitraux, ribambelle de saints, icône, boîte...</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/vitrail.html">Vitrail:</a> Vitrail de la transfiguration. Vitrail de saint François. Vitrail de la Toussaint. Vitrail de la Toussaint pour une célébration.</p>

	<p><a href="<?php echo $urlBase; ?>bricolages/votives.html">Votives:</a> Communion. La brebis perdue. La pêche miraculeuse.</p>

	<br>
	<p class="centre">(Pour aller vers le plan, les chants et prières, les images et coloriages, le forum, ne fermez pas! Remontez tout simplement au début de cette rencontre).</p>

</div>
<?php
}
?>