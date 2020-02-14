<?php
if(isset($_GET['sn'])){
   $seance=$_GET['sn'];
   $seance=str_replace(".","",$seance);
   $seance=str_replace("/","",$seance);
   if(file_exists("pages/content/chants/$seance.php")){
		?>
		<div id="page-chants" class="page">
		<?php
			include("sociallink.php");
			include("chants/$seance.php");
		?>
		</div>
		<?php
   } else {
      include("404.php");
   }
} else {
?>
<div id="page-chants" class="page">
	<?php
		include("sociallink.php");
	?>
	<h1>
      <img src="<?php echo $urlBase; ?>files/images-max/chants.gif" alt="Quelques idées de chants." />
   </h1>
	
	<p class="centre">Les chants sont classés par ordre alphabétique.<br>
	Ils ont été numérotés de façon à ce que vous retrouviez plus facilement le cd ou la cassette d'origine.<br>
	Cassettes utiles voir en bas de page.<br><br></p>

	<p class="centre gras">Liens pour découvrir d'autres chants:</p>
	<p class="centre">
		<a href="http://www.chantez-online.org" target="_blank">http://www.chantez-online.org</a><br>
		<a href="http://www.cantiquest.org" target="_blank">http://www.cantiquest.org</a><br>
		<a href="http://www.chantonseneglise.fr" target="_blank">http://www.chantonseneglise.fr</a><br>
		<a href="http://www.csdraveurs.qc.ca/musique/Noel/calendrier2007d.html" target="_blank">http://www.csdraveurs.qc.ca/musique/Noel/calendrier2007d.html</a> :<br>
		L'Avent en chansons.
	</p>
	<p class="centre">
		<a href="http://toutchant.free.fr/jonas/titre.html" target="_blank">http://toutchant.free.fr/jonas/titre.html</a><br>
		Sur le thème de Jonas, Jean-Pierre Labbé nous propose un CD (conte musical).<br>
		Quelques extraits sur son site: "Jonas où vas-tu? La mer. Le rêve de Jonas.....
	</p>
	<p class="centre">
		<a href="http://www.en-balade.org" target="_blank">http://www.en-balade.org</a><br>
		(adresse mail ou site de nombreux créateurs) 
	</p>
	<p class="centre">
		<a href="http://www.psallite.org" target="_blank">http://www.psallite.org</a><br>
		Quelques partitions<br>
		<a href="http://bartimee.free.fr" target="_blank">http://bartimee.free.fr</a><br>
		Echange possible de partitions
	</p>
	<br><br>
	<h2 class="txt-vert souligne centre">LES CHANTS:</h2>
	<ul class="listecentre txt-rouge">
		<li><a href="<?php echo $urlBase; ?>files/images-max/alleluia.gif" class="lien-image">Alleluia (1)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/allezcrier.gif" class="lien-image">Allez crier (55)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/allezjusquamavigne.gif" class="lien-image">Allez jusqu'à ma vigne.</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/allumeunelumiere.gif" class="lien-image">Allume une lumière (58)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/allumeunfeudamour.gif" class="lien-image">Allume un feu d'amour (44)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/mendormir.gif" class="lien-image">Avant de m'endormir (2)</a></li>
		<li><a href="<?php echo $urlBase; ?>chants/celuiquigranditavecdieu.html">Celui qui grandit avec dieu (3)</a></li>  
		<li><a href="<?php echo $urlBase; ?>files/images-max/commeungrandvent.gif" class="lien-image">Comme un grand vent (4)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/enfant.gif" class="lien-image">Dans nos yeux d'enfants (5)</a></li>
		<li><a href="<?php echo $urlBase; ?>chants/desmillionsdhommes.html">Des millions d'hommes et de femmes (6)</a></li>
		<li><a href="<?php echo $urlBase; ?>chants/fonddestemps.html">Dieu nous appelle du fond des temps (7)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/dieuvitquecelaetaitbon.gif" class="lien-image">Dieu vit que cela était bon (57)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/donnetout.gif" class="lien-image">Donne tout (8)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/ecoutetvois.gif" class="lien-image">Ecoute et vois (9)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/espritdamour.gif" class="lien-image">Esprit d'Amour (10)</a></li>
		<li><a href="<?php echo $urlBase; ?>chants/eveille.html">Eveille en moi seigneur (11)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/gloireadieuquinousconduit.gif" class="lien-image">Gloire à Dieu qui nous conduit (52)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/heureuxparole.gif" class="lien-image">Heureux celui qui écoute la parole (12)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/jaiouvertlelivre.gif" class="lien-image">J’ai ouvert Le Livre (13)</a></li>
		<li><a href="<?php echo $urlBase; ?>chants/jaitoutquitte.html">J’ai tout quitté pour L’Eternel (14)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/jefaissilence.gif" class="lien-image">Je fais silence (15)</a></li>
		<li><a href="<?php echo $urlBase; ?>chants/jelaisseabandon.html">Je laisse à l’abandon (16)</a></li>
		<li><a href="<?php echo $urlBase; ?>chants/jetai.html">Je t’ai appelé par ton nom (17)</a></li>
		<li><a href="<?php echo $urlBase; ?>chants/jet.html">Je t’appelle à me vivre (18)</a></li>
		<li><a href="<?php echo $urlBase; ?>chants/jetebenismoncreateur.html">Je te bénis mon créateur...<span class="txt-red">(+ mimes)</span></a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/revenirtoi.gif" class="lien-image">Je veux revenir vers toi (19)</a></li>
		<li><a href="<?php echo $urlBase; ?>chants/rondevie.html">La ronde de la vie (20)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/samaritain.jpg" class="lien-image">Le bon Samaritain (21)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/ledernierepas.gif" class="lien-image">Le dernier repas (50)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/lenfantetlafleur.gif" class="lien-image">L'enfant et la fleur (56)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/lepaindansnosmains.gif" class="lien-image">Le  pain dans nos mains (51)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/lepaindetavie.gif" class="lien-image">Le  pain de ta vie (49)</a></li>
		<li><a href="<?php echo $urlBase; ?>chants/semeursorti.html">Le semeur est sorti (22)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/lesoiravantsamort.gif" class="lien-image">Le soir avant sa mort (23)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/leventsouffleouilveut.gif" class="lien-image">Le vent souffle où il veut (54)</a></li>
		<li><a href="<?php echo $urlBase; ?>chants/louerdieu.html">Louez Dieu depuis les cieux (24)</a></li>
		<li><a href="<?php echo $urlBase; ?>chants/malumiere.html">Ma lumière et mon salut (25)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/marie.gif" class="lien-image">Marie (26)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/mariejetedismerci.gif" class="lien-image">Marie, je te dis merci (27)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/mesmainselevent.gif" class="lien-image">Mes mains se lèvent (28)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/mondieutuesgrandtuesbeau.gif" class="lien-image">Mon Dieu,Tu es grand, Tu es beau... (29)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/nerentrezpaschezvous.gif" class="lien-image">Ne rentrez pas chez vous comme avant! (30)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/noelcouleur.gif" class="lien-image">Noël à mille couleurs (31)</a></li>
		<li><a href="<?php echo $urlBase; ?>chants/ouijesusjeveuxporter.html">Oui Jésus je veux porter ta lumière</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/ouvrezvosmains.gif" class="lien-image">Ouvrez vos mains (32)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/preparonslatable.gif" class="lien-image">Préparons la table (53)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/quefleurisselapaix.gif" class="lien-image">Que fleurisse la paix (43)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/quetesoeuvressontbelles.gif" class="lien-image">Que tes oeuvres sont belles! (33)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/revedunmonde.gif" class="lien-image">Rêve d'un monde (34)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/reviendratil.gif" class="lien-image">Reviendra-t-il? (59)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/sanstoijesuis.gif" class="lien-image">Sans toi, je suis... (46)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/surlescheminsdumonde.gif" class="lien-image">Sur les chemins du monde (35)</a></li>
		<li><a href="<?php echo $urlBase; ?>chants/nuitlumiere.html">Ta nuit sera lumière (36)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/taparoleseigneur.gif" class="lien-image">Ta Parole Seigneur (47)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/trouverdansmavie.gif" class="lien-image">Trouver dans ma vie Ta Présence (48)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/donnervie.gif" class="lien-image">Tu choisis de donner ta vie (37)</a></li>
		<li><a href="<?php echo $urlBase; ?>chants/dieugrandsespaces.html">Tu es le Dieu des grands espaces (38)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/tureviendras.gif" class="lien-image">Tu reviendras (45)</a></li>
		<li><a href="<?php echo $urlBase; ?>chants/venezchanter.html">Venez, on va chanter (39)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/coeurseigneur.gif" class="lien-image">Viens dans mon coeur seigneur (40)</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/vivejoie.gif" class="lien-image">Vive ma joie (41)</a></li>
		<li><a href="<?php echo $urlBase; ?>chants/vivonsenenfant.html">Vivons en enfant de lumière.</a></li>
		<li><a href="<?php echo $urlBase; ?>files/images-max/zacheearbre.gif" class="lien-image">Zachée, descends de ton arbre (42)</a></li>
	</ul>
	<br>
	<p class="centre">(Pour aller vers le plan, les chants et prières, les images et coloriages, ne fermez pas! Remontez tout simplement au début de cette rencontre).</p>
	<br>
	<h2 class="txt-vert souligne centre">Cassettes utiles</h2>
	<p class="txt-vert centre">(Les titres précédés d'une étoile sont conseillés pour les plus jeunes CE1, CE2.)</p>
	<p class="centre"><span class="txt-rouge">* "Ecoute et vois"  de Danielle Sciaky et Michel Wackenheim. Editions Tardy.</span><br>Chants n°: 3, 9, 10, 12, 15, 19, 28, 31, 37, 56.</p>
	<p class="centre"><span class="txt-rouge">*"Jésus, viens dans mon coeur" de Cécile et Jean-Noël Klinguer. Editeur: Philippe Viard.</span><br>Chants n°: 2, 5, 27, 40.</p>
	<p class="centre"><span class="txt-rouge">"Que fleurisse la paix" de Cécile et Jean-Noël Klinguer. Editeur: Philippe Viard.</span><br>Chants n°: 43, 44, .</p>
	<p class="centre"><span class="txt-rouge">"Fais jaillir la vie", année bleue. Distribution: CRER. Angers. Edition 1997</span><br>Chants n°: 4, 6, 7, 11, 21, 29, 38, 40, 41, 42, 49, 51, 55, 58. </p>
	<p class="centre"><span class="txt-rouge">"Fais jaillir la vie", année verte. Distribution: CRER. Angers. Edition 1996.</span><br>Chants n°: 6, 14, 18, 20, 25, 26, 36, 37. </p>
	<p class="centre"><span class="txt-rouge">"Fais jaillir la vie", année rouge. Distribution: CRER. Angers. Edition 1998.</span><br>Chants n°: 1, 7, 12, 17, 22, 23.</p>
	<p class="centre"><span class="txt-rouge">"Aux quatre chemins de l'Evangile" N°3. Père Joseph Gelineau. Collection catémusique.</span><br>Chants n°: 24,52, 53.</p>
	<p class="centre"><span class="txt-rouge">Paroles: Michel Scouarnec. Musique: Jo Akepsimas. Editions musicales Studio S.M.</span><br>Chant n°: 35, 59.</p>
	<p class="centre"><span class="txt-rouge">Jean Pierre Cabot.</span><br>Chant n° 39.</p>
	<p class="centre"><span class="txt-rouge">Paroles Didier Rimaud. Musique Jacques Berthier.</span><br>Chant n°: 33.</p>
	<p class="centre"><span class="txt-rouge">Les plus belles chansons chrétiennes. Vol 2. Ateliers du Fresne.</span><br>(Jean Humenry (13), Théophile Penndu (45, 47), Patrick Richard (46), John Featherstone (50) )<br>Chants n°: 13, 45, 46, 47, 50.</p>
	<br>
	<p class="centre">Les cassettes s'achètent dans toutes les librairies religieuses: Siloë; La Procure...</p>
	<p class="centre">
		Site du CRER Angers: <a href="http://www.editions-crer.fr" target="_blank">http://www.editions-crer.fr</a><br>
		Site des ateliers du Fresnes: <a href="http://www.ateliers-du-fresne.com" target="_blank">http://www.ateliers-du-fresne.com</a><br>
		<br>Certains auteurs ont leur site:<br>
		<a href="http://danielle.sciaky.free.fr" target="_blank">http://danielle.sciaky.free.fr</a><br>
		<a href="http://www.jnc-klinguer.com" target="_blank">http://www.jnc-klinguer.com</a>
	</p>
	<p class="centre">(Pour aller vers le plan, les chants et prières, les images et coloriages, ne fermez pas! Remontez tout simplement au début de cette rencontre).</p>
</div>
<?php
}
?>