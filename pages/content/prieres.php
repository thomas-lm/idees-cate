<?php
if(isset($_GET['sn'])){
   $seance=$_GET['sn'];
   $seance=str_replace(".","",$seance);
   $seance=str_replace("/","",$seance);
   if(file_exists("pages/content/prieres/$seance.php")){
		?>
		<div id="page-prieres" class="page">
		<?php
			include("sociallink.php");
			include("prieres/$seance.php");
		?>
		</div>
		<?php
   } else {
      include("404.php");
   }
} else {
?>
<div id="page-prieres" class="page">
	<?php
		include("sociallink.php");
	?>
	<h1>
      <img src="<?php echo $urlBase; ?>files/images-max/priere.gif" alt="Quelques idées de prières." />
   </h1>
	
	<p class="centre">Cliquer sur le nom de la prière pour la lire.<br>
	Après le nom de la prière, des exemples de rencontres dans lesquelles elle peut être utilisée.<br>
	Les prières avec les étoiles parleront sans doute plus aux adultes.</p>
	
	<br><br>
	<p>
		<a href="<?php echo $urlBase; ?>prieres/aimetonprochain.html">Aime ton prochain</a>
		(Le plus grand commandement. Le bon samaritain. Femme adultère. Thème de l'amour.)
	
		<br><a href="<?php echo $urlBase; ?>prieres/apetitspas.html">A petits pas dans la vie</a> (Parabole du levain. Grandir)

		<br><a href="<?php echo $urlBase; ?>prieres/arcenciel.html">Arc-en-ciel</a> (Arche de Noé. Thème de l'espérance. Alliance éternelle avec Dieu.)

		<br><a href="<?php echo $urlBase; ?>prieres/unebraise.html">Au creux des mains une braise***</a> (Thème de l'espérance. Thème de l'Avent)

		<br><a href="<?php echo $urlBase; ?>prieres/avent.html">Avent</a> (Thème de l'Avent)

		<br><a href="<?php echo $urlBase; ?>prieres/benir.html">Bénir***</a>(Texte pour adulte: pour toujours bénir ceux qui nous entourent)

		<br><a href="<?php echo $urlBase; ?>prieres/bernadette.html">Bernadette</a> (Sainte Bernadette. Lourdes)

		<br><a href="<?php echo $urlBase; ?>prieres/bienheureux.html">Bienheureux</a> (Béatitudes. Toussaint. Thème du bonheur.)

		<br><a href="<?php echo $urlBase; ?>prieres/bullesdenoel.html">Bulles de Noël</a> (Noël)

		<br><a href="<?php echo $urlBase; ?>prieres/celuiquigrandit.html">Celui qui grandit avec Dieu</a> (Carême. Création. Grandir.)

		<br><a href="<?php echo $urlBase; ?>prieres/cendre.html">Cendre</a> (Mercredi des cendres. Carême)

		<br><a href="<?php echo $urlBase; ?>prieres/cendregrise.html">Cendre grise</a> (Mercredi des cendres. Carême)

		<br><a href="<?php echo $urlBase; ?>prieres/changement.html">Changement</a> (Carême)

		<br><a href="<?php echo $urlBase; ?>prieres/cherjesus.html">Cher Jésus</a> (Mère Teresa. Ouvrir sa vie à Jésus.)

		<br><a href="<?php echo $urlBase; ?>prieres/commeenfant.html">Comme un enfant</a> (Les petits enfants)

		<br><a href="<?php echo $urlBase; ?>prieres/commeunsouffle.html">Comme un souffle</a> (Esprit Saint. Pentecôte)

		<br><a href="<?php echo $urlBase; ?>prieres/conduismoi.html">Conduis-moi, douce lumière***</a> (Prière dans les difficultés de la vie)

		<br><a href="<?php echo $urlBase; ?>prieres/dansmatete.html">Dans ma tête</a> (Pardon, sacrement de réconciliation)
		
		<br><a href="<?php echo $urlBase; ?>prieres/devenirsaint.html">Devenir saint</a> (Toussaint)

		<br><a href="<?php echo $urlBase; ?>prieres/diversite.html">Diversité</a> (Création. Découvrir.) 

		<br><a href="<?php echo $urlBase; ?>files/images-max/dondedieu.gif" class="lien-image">Don de Dieu en image</a> OU 
			 <a href="<?php echo $urlBase; ?>prieres/dondedieu.html">Don de Dieu</a> (Esprit Saint. Thème de la prière)

		<br><a href="<?php echo $urlBase; ?>prieres/donnemoi.html">Donne-moi</a> (Prière de demande)

		<br><a href="<?php echo $urlBase; ?>prieres/donnemoidetoneau.html">Donne-moi de ton Eau</a> (Prière de carême. Samaritaine.)

		<br><a href="<?php echo $urlBase; ?>files/images-max/dusilencepourprier.gif" class="lien-image">Du silence pour prier en image</a> OU
			 <a href="<?php echo $urlBase; ?>prieres/dusilencepourprier.html">Du silence pour prier </a> (Thème de la prière)

		<br><a href="<?php echo $urlBase; ?>prieres/empreintes.html">Empreintes***</a> (Dieu nous porte toujours)
		
		<br><a href="<?php echo $urlBase; ?>prieres/entendsmavoix.html">Entends ma voix, Seigneur***</a> (Prière de Jean Paul II pour la paix)

		<br><a href="<?php echo $urlBase; ?>prieres/envoienous.html">Envoie-nous des fous***</a> (S'engager)

		<br><a href="<?php echo $urlBase; ?>prieres/ezechiel.html">Ezéchiel</a> (Prophètes)

		<br><a href="<?php echo $urlBase; ?>prieres/faireconnaitretonamour.html">Faire connaître ton Amour</a> (Thème de l'Amour de Dieu)
		
		<br><a href="<?php echo $urlBase; ?>prieres/fairedelaplace.html">Faire de la place en moi.</a> (Thème: Jésus et les marchands du temple)

		<br><a href="<?php echo $urlBase; ?>files/images-max/seigneurfaisdemoi.gif" class="lien-image">Fais de moi un instrument de paix (Image)</a> (Thème de la prière. Saint François)

		<br><a href="<?php echo $urlBase; ?>prieres/fetes.html">Fêtes</a> (Pour un début d'année. Rentrée paroissiale.)

		<br><a href="<?php echo $urlBase; ?>prieres/fleursbonheur.html">Fleurs bonheur</a> (Etre disciple de Jésus. Femme adultère.)

		<br><a href="<?php echo $urlBase; ?>prieres/graindeble.html">Grain de blé</a> (Pâques. Thème de la mort. Grain de blé.)

		<br><a href="<?php echo $urlBase; ?>prieres/ilrestera.html">Il restera de toi</a> (Thème du don. Multiplication des pains. Le figuier stérile. Le grain de blé.)
		
		<br><a href="<?php echo $urlBase; ?>prieres/imiterjesus.html">Imiter Jésus</a> (Thème du service)

		<br><a href="<?php echo $urlBase; ?>prieres/confiance.html">J'ai confiance en toi</a> (Thème de la confiance)

		<br><a href="<?php echo $urlBase; ?>prieres/confessedieu.html">Je confesse à dieu</a> (Pardon)

		<br><a href="<?php echo $urlBase; ?>files/images-max/credo4.gif" class="lien-image">Je crois en Dieu (image)</a> OU
			 <a href="<?php echo $urlBase; ?>prieres/credo.html">Je crois en Dieu</a> (Dire notre foi.) 

		<br><a href="<?php echo $urlBase; ?>prieres/silence.html">Je fais Silence...</a> (Samuel. Thème de la prière)

		<br><a href="<?php echo $urlBase; ?>prieres/jepenseauxautres.html">Je pense aux autres</a> (S'ouvrir aux autres. Prier pour eux. )

		<br><a href="<?php echo $urlBase; ?>prieres/revais.html">Je rêvais</a> (Qui est Dieu? Découvrir la Bible.)

		<br><a href="<?php echo $urlBase; ?>prieres/suisla.html">Je suis là...</a> ( Qui est Dieu? La création. Découvrir la Bible.)

		<br><a href="<?php echo $urlBase; ?>prieres/jesusjepriepourtoneglise.html">Jésus, je prie pour ton Eglise</a> ( L'Eglise)

		<br><a href="<?php echo $urlBase; ?>prieres/jesusmarchedevantmoi.html">Jésus marche devant moi</a> (Disciples)

		<br><a href="<?php echo $urlBase; ?>prieres/jesustendlamain.html">Jésus tend la main</a> (Jésus: notre modèle. Femme adultère.)

		<br><a href="<?php echo $urlBase; ?>prieres/jeveuxteprier.html">Je veux Te prier</a> (Thème de la prière.)

		<br><a href="<?php echo $urlBase; ?>prieres/jeviendraiverstoi.html">Je viendrai vers Toi***</a> (Miséricorde de Dieu. Création. Le fils prodigue.)

		<br><a href="<?php echo $urlBase; ?>files/images-max/jevoussaluemarie.gif" class="lien-image">Je vous salue, Marie (Image)</a> (Marie. Thème de la prière.)
		
		<br><a href="<?php echo $urlBase; ?>prieres/joseph.html">Joseph</a> (Saint Joseph)

		<br><a href="<?php echo $urlBase; ?>prieres/cananeenne.html">La cananéenne</a> (La cananéenne)

		<br><a href="<?php echo $urlBase; ?>prieres/flute.html">La flûte de l'amour***</a> (Hindouisme: l'Amour veut nous rencontrer.)

		<br><a href="<?php echo $urlBase; ?>prieres/joieparole.html">La joie pour dire Ta Parole***</a> (Prière de catéchiste)

		<br><a href="<?php echo $urlBase; ?>prieres/paix.html">La paix***</a> Temps de carême. Réconciliation. Thème de la paix.
		
		
		<br><a href="<?php echo $urlBase; ?>prieres/lapaixdedieu.html">La paix de Dieu.</a> Thème de la paix

		<br><a href="<?php echo $urlBase; ?>prieres/larbredevie.html">L'arbre de vie</a> Jésus, l'arbre de vie

		<br><a href="<?php echo $urlBase; ?>prieres/tendresse.html">La tendresse***</a>

		<br><a href="<?php echo $urlBase; ?>prieres/lavie.html">La vie</a> (Mère Teresa. Thème de la vie.)

		<br><a href="<?php echo $urlBase; ?>prieres/regard.html">Le regard</a> (Pour la période du Carême ou de l'Avent: changer son regard)

		<br><a href="<?php echo $urlBase; ?>prieres/sourire.html">Le sourire</a> (Gandhi. Thème du don)

		<br><a href="<?php echo $urlBase; ?>prieres/leventdejesus.html">Le vent de Jésus</a> (Thème des disciples. Eucharistie.)
		
		<br>
		<a href="<?php echo $urlBase; ?>files/other/pdf/prieres.pdf" target="_blank">Livret avec quelques prières usuelles.</a>

		<br><a href="<?php echo $urlBase; ?>prieres/oisillon.html">L'oisillon</a> (Grandir. La création.)

		<br><a href="<?php echo $urlBase; ?>prieres/louesoistu.html">Loué sois-tu</a> (Création. Thème de la prière. Saint François)

		<br><a href="<?php echo $urlBase; ?>prieres/magnificat.html">Magnificat</a> (Marie. Temps de l'Avent)

		<br><a href="<?php echo $urlBase; ?>prieres/marcheenavent.html">Marche en Avent</a> (Avent)

		<br><a href="<?php echo $urlBase; ?>prieres/mercijesus.html">Merci Jésus</a> (Carême. Eucharistie.)
		
		<br><a href="<?php echo $urlBase; ?>prieres/mercipourleau.html">Merci pour l'eau</a> (Baptême)
		
		<br><a href="<?php echo $urlBase; ?>prieres/mercipourlhuilesainte.html">Merci pour l'Huile Sainte</a> (Baptême)

		<br><a href="<?php echo $urlBase; ?>prieres/mesmains.html">Mes Mains</a> (Mercredi des Cendres.)

		<br><a href="<?php echo $urlBase; ?>prieres/mesvieuxhabits.html">Mes vieux habits</a> (Mercredi des cendres. Carême)

		<br><a href="<?php echo $urlBase; ?>prieres/petit.html">Moi je suis petit</a> (Bénédiction de Dieu. Le dernier repas de Jésus.)

		<br><a href="<?php echo $urlBase; ?>prieres/mondieuregret.html">Mon Dieu, j'ai un très grand regret</a> (Pardon)

		<br><a href="<?php echo $urlBase; ?>prieres/abandonne.html">Mon Père, je m'abandonne à toi***</a> (Prière d'abandon; Charles de Foucauld)

		<br><a href="<?php echo $urlBase; ?>prieres/vietaire.html">Ne laisse jamais ta vie se taire</a> (Chanter Dieu avec sa vie. Le dernier repas de Jésus.)

		<br><a href="<?php echo $urlBase; ?>prieres/neteignezpaslesprit.html">N'éteignez pas l'Esprit</a> (L'Esprit Saint)

		<br><a href="<?php echo $urlBase; ?>files/images-max/notrepere.gif" class="lien-image">Notre père (Image)</a> (Le Père. Thème de la prière.)

		<br><a href="<?php echo $urlBase; ?>prieres/ouvremoncoeur.html">Ouvre mon coeur!</a> (Les ouvriers de la dernière heure.)

		<br><a href="<?php echo $urlBase; ?>files/images-max/papaduciel.gif" class="lien-image">Papa du Ciel (Image)</a> (Thème de la prière. Thème de la confiance.)

		<br><a href="<?php echo $urlBase; ?>prieres/pereconnais.html">Père, Tu me connais.</a> (Thème du pardon. Le fils prodigue.)

		<br><a href="<?php echo $urlBase; ?>files/images-max/petitdisciple.gif" class="lien-image">Petit disciple. (Image)</a> (Etre disciple)
		
				<br><a href="<?php echo $urlBase; ?>prieres/petitrameau.html">Petit rameau</a> (Dimanche des rameaux)
				
				<br><a href="<?php echo $urlBase; ?>prieres/prendreunrameau.html">Prendre un rameau. Charles Singer.</a> (Dimanche des rameaux)

		<br><a href="<?php echo $urlBase; ?>prieres/prierealespritsaint.html">Prière à L'Esprit Saint</a> (Esprit Saint. Pentecôte)

		<br><a href="<?php echo $urlBase; ?>prieres/prieraveclerosaire.html">Prier avec le Rosaire</a> (Pour prier au mois d'octobre)

		<br><a href="<?php echo $urlBase; ?>prieres/prieravecdoigts.html">Prier avec les doigts de ma main</a> (Pour inviter les plus petits à prier.)

		<br><a href="<?php echo $urlBase; ?>prieres/prieredelabbepierre.html">Prière de l'abbé Pierre</a> (Emmaüs. Temps de Pâques.)

		<br><a href="<?php echo $urlBase; ?>prieres/prieredelacateauboutdurouleau.html">Prière de la catéchiste au bout du rouleau***</a> (Prière de catéchiste)

		<br><a href="<?php echo $urlBase; ?>prieres/prieredelasamaritaine.html">Prière de la samaritaine</a> (Samaritaine)

		<br><a href="<?php echo $urlBase; ?>prieres/prierereconciliation.html">Prière de réconciliation: Seigneur, je t'en prie, pardonne-moi.</a> (temps de pardon)

		<br><a href="<?php echo $urlBase; ?>prieres/prieresaintetherese.html">Prières de sainte Thérèse de Lisieux***</a> (Toussaint. Sainte Thérèse)

		<br><a href="<?php echo $urlBase; ?>prieres/prierepourlarentree.html">Prière pour la rentrée</a> (Thème de la prière pour les enfants.)

		<br><a href="<?php echo $urlBase; ?>prieres/prierepourlarentree1.html">Prière pour la rentrée***</a> (Prière de catéchiste) 

		<br><a href="<?php echo $urlBase; ?>prieres/prierlematin.html">Prier le matin</a> (Thème de la prière. Sainte Thérèse d'Avila.)

		<br><a href="<?php echo $urlBase; ?>files/images-max/prierpresduncierge.gif" class="lien-image">Prier près d'un cierge (Image)</a> (Thème de la prière)

		<br><a href="<?php echo $urlBase; ?>prieres/psaume8.html">Psaume 8</a> (Qu'est-ce que l'homme? David.)

		<br><a href="<?php echo $urlBase; ?>prieres/psaume22.html">Psaume 23 ou 22</a> (Thème du berger. David.)

		<br><a href="<?php echo $urlBase; ?>prieres/psaume102.html">Psaume 102</a> ( Louange. David.)

		<br><a href="<?php echo $urlBase; ?>prieres/psaume107.html">Psaume 107</a> (Louange. David.)

		<br><a href="<?php echo $urlBase; ?>prieres/psaume138.html">Psaume 138</a> ( Dieu nous connaît. David.)

		<br><a href="<?php echo $urlBase; ?>prieres/puisquetoutamour.html">Puisque tout amour prend racine</a> ( Aimer son prochain. La cananéenne.)

		<br><a href="<?php echo $urlBase; ?>prieres/quandtuattends.html">Quand tu attends...</a> (Avent)

		<br><a href="<?php echo $urlBase; ?>prieres/quatraverseux.html">Qu'à travers eux, je vois ton visage***</a> (Prière de catéchistes)

		<br><a href="<?php echo $urlBase; ?>prieres/rameau.html">Rameau</a> (Dimanche des rameaux)

		<br><a href="<?php echo $urlBase; ?>prieres/relevemoi.html">Relève-moi</a> (Pardon. Le fils prodigue.)

		<br><a href="<?php echo $urlBase; ?>prieres/saintefamille.html">Sainte famille</a> (Prier avec Joseph et Marie)

		<br><a href="<?php echo $urlBase; ?>prieres/saintjoseph.html">Saint Joseph</a> (Saint Joseph. Prier saint Joseph dans les difficultés.)

		<br><a href="<?php echo $urlBase; ?>prieres/saint_joseph.html">Saint Joseph</a> (Saint Joseph)

		<br><a href="<?php echo $urlBase; ?>prieres/seigneurdonnemoi.html">Seigneur, donne-moi...</a> (Disciples. Femme adultère.)

		<br><a href="<?php echo $urlBase; ?>prieres/seigneurdonnemoidevoir.html">Seigneur, donne-moi de voir***</a> (Savoir Aimer)

		<br><a href="<?php echo $urlBase; ?>prieres/seigneurtuconnaismoncoeur.html">Seigneur, Tu connais mon coeur***</a> (Prière de catéchistes)

		<br><a href="<?php echo $urlBase; ?>prieres/semer.html">Semer</a> (Parabole du semeur. Le grain de blé.)
		
		<br><a href="<?php echo $urlBase; ?>prieres/servircommejesus.html">Servir comme Jésus</a> (Etre disciples. Servir. Serviteurs.)

		<br><a href="<?php echo $urlBase; ?>prieres/serviteurs.html">Serviteurs</a> (Prières de catéchistes pour le début d'année.)

		<br><a href="<?php echo $urlBase; ?>prieres/shemaisrael.html">Shéma Israël</a> (Premier Testament. Le plus grand commandement)

		<br><a href="<?php echo $urlBase; ?>prieres/signedecroix.html">Signe de croix</a> (Thème de la prière)

		<br><a href="<?php echo $urlBase; ?>prieres/signedecroix1-Signe de croix (autre prière).html">Signe de croix (autre prière)</a> (Thème de la prière)

		<br><a href="<?php echo $urlBase; ?>prieres/aimeramour.html">Si je ne sais pas aimer d'amour</a> (Aimer. Le plus grand commandement)

		<br><a href="<?php echo $urlBase; ?>prieres/toussaint.html">Toussaint</a> (Prier avec tous les prénoms des enfants du caté)
		
		<br><a href="<?php echo $urlBase; ?>prieres/transfiguration.html">Prière de la Transfiguration.</a> (Transfiguration. Carême)

		<br><a href="<?php echo $urlBase; ?>files/images-max/travaillerpourleroyaume.gif" class="lien-image">Travailler pour le Royaume (Image)</a> (Les ouvriers de la dernière heure.)

		<br><a href="<?php echo $urlBase; ?>prieres/bonsamaritain.html">Tu es le bon samaritain</a> (Le bon samaritain. Regarder versl'autre.)

		<br><a href="<?php echo $urlBase; ?>prieres/tuesmondieu.html">Tu es Mon Dieu</a> (Prière du soir. Jésus au temple.)

		<br><a href="<?php echo $urlBase; ?>files/images-max/tunousdonnes.gif" class="lien-image">Tu nous donnes... (Image)</a> ( Répondre à un appel)

		<br><a href="<?php echo $urlBase; ?>prieres/lumierevie.html">Une lumière dans ma vie</a> (Thème de la confiance. Jérémie.)

		<br><a href="<?php echo $urlBase; ?>prieres/sourcesansfin.html">Une source sans fin</a> (L'Amour de Dieu)

		<br><a href="<?php echo $urlBase; ?>prieres/unpere.html">Un père</a> (Thème du père)
		
		<br><a href="<?php echo $urlBase; ?>prieres/unrameaualamain.html">Un rameau à la main</a> (Dimanche des rameaux)

		<br><a href="<?php echo $urlBase; ?>prieres/viensespritsaint.html">Viens, Esprit Saint</a> (Esprit Saint. Pentecôte)

		<br><a href="<?php echo $urlBase; ?>prieres/viensespritsaint2.html">Viens, Esprit Saint</a> (Esprit Saint. Pentecôte)
			 
		<br><a href="<?php echo $urlBase; ?>prieres/voirtafaceensoleillee.html">Voir ta face ensoleillée***</a> (Transfiguration. Sœur Emmanuelle.)
	</p>
	
</div>
<?php
}
?>