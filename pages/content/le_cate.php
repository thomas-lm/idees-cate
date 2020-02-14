<?php
if(isset($_GET['sn'])){
   $seance=$_GET['sn'];
   $seance=str_replace(".","",$seance);
   $seance=str_replace("/","",$seance);
	
   if(file_exists("pages/content/le_cate/$seance.php")){
		?>
		<div id="page-le_cate" class="page">
		<?php
			include("sociallink.php");
			include("le_cate/$seance.php");
		?>
		</div>
		<?php
   } else {
      include("404.php");
   }
} else {
?>
<div id="page-le_cate" class="page">
	<?php
		include("sociallink.php");
	?>
   <h1>
      <img src="<?php echo $urlBase; ?>files/images-max/plan1.gif" alt="Quelques idées pour le cate et catéchèse..." />
   </h1>
   <h2>POUR COMMENCER L'ANNEE</h2>
   <ul>
      <li>
         <a href="<?php echo $urlBase; ?>le_cate/apprendreaseconnaitre.html" title="cate" alt="cate">Pour se connaître un peu mieux.</a>
      </li>
      <li>
         <a href="<?php echo $urlBase; ?>le_cate/decouvrir.html" >Découvrir: S'émerveiller et remercier.</a>
         
      </li>
      <li>
         <a href="<?php echo $urlBase; ?>le_cate/decouvrirlabible.html" >Découvrir la Bible.
         Parole de Dieu. Thème de l'Alliance.</a>
        
      </li>
	  
      <li><a href="<?php echo $urlBase; ?>le_cate/prier.html">Comment prier? La prière, qu'est-ce que c'est?</a></li>
      <li>
         Pour le coin prière: <a href="<?php echo $urlBase; ?>le_cate/icone.html">Icônes </a>......
         Pour en savoir plus: <a href="<?php echo $urlBase; ?>le_cate/iconostase.html">Iconostases.</a>
      </li>
   </ul>
   <p class="backtotop"><a href="#top">revenir en haut</a></p>
   <h2>LE PREMIER TESTAMENT, PREMIERES ALLIANCES</h2>
   <ul>
      <li><a href="<?php echo $urlBase; ?>le_cate/creation.html" >La création: Texte de la Bible. La création de l'homme</a>
         
      </li>
      <li><a href="<?php echo $urlBase; ?>le_cate/creation1.html" >La création: jeux, activités, contes.</a>
         
         
      </li>
      <li><a href="<?php echo $urlBase; ?>le_cate/adameve.html" >Adam et Eve, la chute</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/noe.html" >L'arche de Noé.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/abrahamcatechiste.html" >Abraham introduction : pour les catéchistes.</a></li>
      <ul>
         <li><a href="<?php echo $urlBase; ?>le_cate/abraham.html" >Abraham quitte son pays, Genèse (12-1,7).</a></li>
         <li><a href="<?php echo $urlBase; ?>le_cate/abraham2.html" >Abraham regarde le ciel, Genèse (15-1,6).</a>
            
         </li>
         <li><a href="<?php echo $urlBase; ?>le_cate/abraham3.html" >Abraham: rencontre au chêne de Mambré, Genèse (18-1).</a></li>
         <li><a href="<?php echo $urlBase; ?>le_cate/abraham4.html" >Abraham et l'offrande, (Gen 22,1..13).</a></li>
      </ul>
      <li><a href="<?php echo $urlBase; ?>le_cate/moisecatechiste.html" >Moïse introduction : pour les catéchistes</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/moisegeneralites.html" >Survol de la vie de Moïse.</a></li>
      <li>
         
            Complément Moïse pour aller plus loin :
            <ul> <a href="<?php echo $urlBase; ?>le_cate/moisenaissance.html" >Moïse: Naissance + Thème de la confiance.</a><span class="txt-vert"> (Conte des trois arbres.)</span>
               <br><a href="<?php echo $urlBase; ?>le_cate/moisecompassion.html" > Moïse: De sédentaire à nomade + thème de l'eau + thème de la compassion.</a><span class="txt-vert"> (Conte L'eau source de vie.)</span>
               <br><a href="<?php echo $urlBase; ?>le_cate/moisebuissonardent.html" > Moïse: Le buisson ardent.</a>
               <br><a href="<?php echo $urlBase; ?>le_cate/moisepassagemer.html" > Moïse: Fuite d'Egypte. Passage.</a>
					<br><a href="<?php echo $urlBase; ?>le_cate/moisemanne.html" > Moïse: La manne; l'eau du rocher.</a>
					<br><a href="<?php echo $urlBase; ?>le_cate/moisecommandements-Moïse: L'alliance. Les dix paroles pour Vivre.html"> Moïse: L'Alliance. Les dix paroles pour Vivre.</a>
            </ul>
         
      </li>
      <li><a href="<?php echo $urlBase; ?>le_cate/samuel.html">Les juges : Samuel.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/david.html">Le roi David: Onction. Goliath. Psaumes.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/davidarche.html">Le roi David: Arche d'alliance. Pardon de Dieu: Urie et Bethsabée. Temple de Salomon.</a><span class="txt-vert">Conte du berger: autour de la confiance.</span></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/prophetes.html">Prophètes généralités et jeux.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/isaie.html">Isaïe: vocation.</a> <span class="txt-vert"> Conte sur le pardon.</span></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/isaieesperance.html">Isaïe: L'espérance messianique.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/jeremie.html">Le prophète Jérémie.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/baruch.html">Le Livre de Baruch (Lecture de la veillée pascale).</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/ezechiel.html">Le prophète Ezéchiel.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/jonas.html">Jonas.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/premiertestament.html">Bilan Premier Testament: Jeux et frise.</a></li>
   </ul>
    <p class="backtotop"><a href="#top">revenir en haut</a></p>
	
	
	
	 <h2>EVANGILES PROPOSES SUR LE SITE et TEXTES DE SAINT PAUL:</h2>
   <ul>
      <li><a href="<?php echo $urlBase; ?>le_cate/saintmarc.html">Evangile selon saint Marc</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/saintmatthieu.html">Evangile selon saint Matthieu</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/saintluc.html">Evangile selon saint Luc</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/saintjean.html">Evangile selon saint Jean</a></li><br>
	  <li><a href="<?php echo $urlBase; ?>le_cate/saintpaul.html">Textes de saint Paul:</a> Travailler quelques épîtres: L'accomplissement de la Loi, c'est l'Amour. S'abaisser jusqu'à mourir. Pour moi, vivre c'est le Christ. Etre préoccupé des autres. Frères, ne soyez inquiets de rien... Je sais vivre de peu...</li>
   </ul>
   
   <p class="backtotop"><a href="#top">revenir en haut</a></p>


<h2>TOUSSAINT, ANNEE LITURGIQUE, AVENT, NOËL, ENFANCE.</h2>
   <ul>
      <li><a href="<?php echo $urlBase; ?>le_cate/toussaint.html">La Toussaint: Généralités.</a>
         <br><span class="txt-rouge">Powerpoint: "Béatitudes".</span>
         
      </li>
      <li><a href="<?php echo $urlBase; ?>le_cate/saints.html">La Toussaint: L'étude de quelques saints: St André, Ste Geneviève, St Vincent, Ste thérèse, St Louis-Marie Grignion de Monfort, St Martin, St François.</a>
         
      </li>
      <li><a href="<?php echo $urlBase; ?>le_cate/beatitudes.html">Béatitudes selon Saint Matthieu.</a> ou <a href="<?php echo $urlBase; ?>le_cate/beatitudesluc.html">Béatitudes selon saint Luc.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/anneeliturgique.html">Année liturgique.</a></li>
      <li>
         
            AVENT: 
            <ul>
               <ul><a href="<?php echo $urlBase; ?>le_cate/bonnenouvelle.html">Avent: Bonne Nouvelle qui nous entraîne vers une naissance.</a> 
                  <br> <a href="<?php echo $urlBase; ?>le_cate/avent1.html">Pour découvrir l'Avent. S'émerveiller, accueillir Dieu et marcher vers les autres.</a>
                  <br><a href="<?php echo $urlBase; ?>le_cate/aventA.html">Préparer l'Avent avec les lectures des quatre dimanches de l'Avent: Année A</a>
                  <br><a href="<?php echo $urlBase; ?>le_cate/aventB.html">Préparer l'Avent avec les lectures des quatre dimanches de l'Avent: Année B</a>
                  <br><a href="<?php echo $urlBase; ?>le_cate/aventC.html">Préparer l'Avent avec les lectures des quatre dimanches de l'Avent: Année C</a>
                  <br><a href="<?php echo $urlBase; ?>le_cate/vivrelaventavecmarie.html">Vivre l'Avent avec Marie </a>
                  <br><a href="<?php echo $urlBase; ?>le_cate/jeanbaptiste.html">Vivre l'Avent avec Jean-Baptiste </a>
               </ul>
            </ul>
         
      </li>
      <li><a href="<?php echo $urlBase; ?>le_cate/noel.html">NOËL : Autour de l'Evangile de Luc: les bergers.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/epiphanie.html">Epiphanie</a><span class="txt-vert"> (Conte: Les quatre mages.)</span></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/crechedenoel.html">Quelques idées de crèches.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/esperance.html">Idées autour du mot espérance.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/contesdenoel.html">Contes de Noël.</a>
         <br>Voir aussi en célébrations plusieurs idées de mimes de Noël .
      </li>
      <li><a href="<?php echo $urlBase; ?>le_cate/presentationjesus.html">Présentation de Jésus au Temple.</a></li>
   </ul>
<p class="backtotop"><a href="#top">revenir en haut</a></p>



  


   <h2>CARÊME, RAMEAUX, PÂQUES, EMMAÜS, ASCENSION</h2>
   <ul>
		<li><a href="<?php echo $urlBase; ?>le_cate/conversion.html">Idée pour réaliser un panneau: Thème de la conversion.</a></li>
			<li><a href="<?php echo $urlBase; ?>le_cate/mercredidescendres.html">Idée pour réaliser un panneau: Thème le mercredi des cendres.</a></li>
		<li><a href="<?php echo $urlBase; ?>le_cate/careme.html">Le Carême, le Mercredi des Cendres: calendrier, explication, jeux.</a></li>
		<li><a href="<?php echo $urlBase; ?>le_cate/caremeanneeABC.html">Le Carême année A, B, C: Vues rapides: résumés des évangiles lus pendant le Carême.</a></li>
		<li><a href="<?php echo $urlBase; ?>le_cate/caremejeudeloie.html">Jeu de l'oie pour le carême: année C.</a></li>
		
<li><a href="<?php echo $urlBase; ?>le_cate/caremeseptfamilles.html" >Jeu des sept familles. Carême. Année C</a></li>
		<li>Lectures des Evangiles pendant le temps du Carême:</li>
	
		<ul>
			<li>Premier dimanche de Carême:<a href="<?php echo $urlBase; ?>le_cate/tentations.html"> L'évangile des tentations.  Luc 4,1-13  Marc 1,12-15  Matthieu 4,1.</a></li>
			<li>Second dimanche de Carême:<a href="<?php echo $urlBase; ?>le_cate/transfigurationluc.html"> La transfiguration: selon saint Luc. </a> ou <a href="<?php echo $urlBase; ?>le_cate/transfigurationmarc.html"> La transfiguration selon saint Marc ou Matthieu. </a></li>
			<li>Troisième dimanche de Carême:<a href="<?php echo $urlBase; ?>le_cate/samaritaine.html">"La samaritaine"</a> ou <a href="<?php echo $urlBase; ?>le_cate/jesusetlesmarchandsdutemple.html"> Jésus et les marchands du temple. </a>ou <a href="<?php echo $urlBase; ?>le_cate/figuier.html"> Le figuier stérile. </a></li>
			<li>Quatrième dimanche de Carême:<a href="<?php echo $urlBase; ?>le_cate/aveuglene.html">L'aveugle-né. </a> ou <a href="<?php echo $urlBase; ?>le_cate/dieuestricheenmisericorde-Dieu est riche en miséricorde (Lettre de Saint paul).html"> Dieu est riche en miséricorde (Lettre de Saint paul). </a> ou <a href="<?php echo $urlBase; ?>le_cate/veniralalumiere.html"> Venir à la lumière (Evangile de St Jean).</a> ou <a href="<?php echo $urlBase; ?>le_cate/filsprodigue.html"> Le fils prodigue. </a></li>
			<li>Cinquième dimanche de Carême:<a href="<?php echo $urlBase; ?>le_cate/lazare.html"> La résurrection de Lazare. </a> ou <a href="<?php echo $urlBase; ?>le_cate/graindeble.html"> Le grain de blé (Evangile de St Jean). </a> ou <a href="<?php echo $urlBase; ?>le_cate/femmeadultere.html"> La femme adultère. </a></li> 
			<li><a href="<?php echo $urlBase; ?>le_cate/rameaux.html">Les Rameaux</a></li>
		</ul>
	
		<li><a href="<?php echo $urlBase; ?>le_cate/paques.html">Le temps de Pâques: semaine sainte</a></li>
		<li><a href="<?php echo $urlBase; ?>le_cate/chemincroix.html">Le temps de Pâques: Chemin de croix.</a></li>
		<li><a href="<?php echo $urlBase; ?>le_cate/resurrection.html">Pâques: Jour de Résurrection.</a></li>
		<li><a href="<?php echo $urlBase; ?>le_cate/emmaus.html">Sur le chemin d'Emmaüs.</a></li>
		<li><a href="<?php echo $urlBase; ?>le_cate/ascension.html">L'Ascension.</a></li>
   </ul>
   <p class="backtotop"><a href="#top">revenir en haut</a></p>
   <h2>LA PENTECÔTE. L'ESPRIT SAINT. CONFIRMATION. TRINITE.</h2>
   <ul>
		<li><a href="<?php echo $urlBase; ?>le_cate/pentecote.html">La Pentecôte: la fête de l'Esprit Saint.</a></li>
		<li><a href="<?php echo $urlBase; ?>le_cate/confirmation.html">La confirmation et l'Esprit Saint.</a></li>
		<li><a href="<?php echo $urlBase; ?>le_cate/signedecroix.html">Le signe de croix.</a> Voir le texte du père Jacques Bonnechose</li>
   </ul>
	<p class="backtotop"><a href="#top">revenir en haut</a></p>



   <h2>TRAVAILLER LE THEME DU ROYAUME.</h2>
   <ul>
      <li><a href="<?php echo $urlBase; ?>le_cate/paysdejesus.html">Jésus grandit dans un pays, dans une famille.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/baptemedejesus.html">Le baptême de Jésus.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/tentations.html">L'évangile des tentations: le choix de Jésus</a></li>
      <li>Le Royaume:</li>
      <ul>
      <li>Jésus choisit de partir sur les routes pour annoncer le Royaume de Dieu :<a href="<?php echo $urlBase; ?>le_cate/parabolegrainemoutarde.html"> Parabole de la graine de moutarde</a> ou <a href="<?php echo $urlBase; ?>le_cate/paraboledulevain.html">parabole du levain</a> ou <a href="<?php echo $urlBase; ?>le_cate/paraboledusemeur.html">parabole du semeur</a> ou <a href="<?php echo $urlBase; ?>le_cate/ouvriersderniereheure.html">parabole des ouvriers</a> ou <a href="<?php echo $urlBase; ?>le_cate/moutonperdu.html">"Parabole de la brebis perdue et retrouvée."</a></li>
      <li>Choisir de s'ouvrir au Royaume, c'est découvrir un trésor :<a href="<?php echo $urlBase; ?>le_cate/tresor.html"> Parabole du trésor</a></li>
      <li>Comment découvrir le Royaume? :</li>
      <ul>
      <li><a href="<?php echo $urlBase; ?>le_cate/pauvresdecoeur.html">Promenade avec Matthieu : "Les pauvres de coeur".</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/beatitudes.html">Petite plongée dans les Béatitudes.</a><span class="txt-vert"> (Histoire du bocal à remplir)</span></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/petitsenfants.html">"Les petits enfants": voir promenade avec Marc </a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/commandement.html">Promenade avec Marc: "Le plus grand commandement".</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/bonsamaritain.html">Promenade avec Luc: "Qui est mon prochain" (Le bon samaritain)</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/pechemiraculeuse.html">Promenade avec Luc: "La pêche miraculeuse". (Donner encore Luc 5,1-11)</a></li>
      </ul>
      <li>Que faire du trésor découvert? Comment le faire fructifier? Comment le faire grandir en nous et autour de nous? :</li>
      <ul>
      <li><a href="<?php echo $urlBase; ?>le_cate/paraboledestalents.html">Parabole des talents ou parabole des trois serviteurs</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/lesoiseauxduciel.html">Semer sans se soucier et avoir confiance en Dieu : Les oiseaux du ciel</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/confiance.html">Qu'est ce que la confiance? </a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/multiplicationdespains.html">La multiplication des pains</a> <span class="txt-rouge">Powerpoint: "Cueille le temps".</span></li>
      </ul>
      <li>Qui est concerné par le Royaume de Dieu?:</li>
      <ul>
      <li><a href="<?php echo $urlBase; ?>le_cate/petitsenfants.html">"Les petits enfants": voir promenade avec Marc </a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/marthemarie.html">Les amies de Jésus: "Marthe et Marie"  </a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/zachee.html">Les pécheurs: "Promenade avec Zachée" </a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/cananeenne.html">Les étrangers: "La cananéenne"</a> ou <a href="<?php echo $urlBase; ?>le_cate/samaritaine.html">"La samaritaine"</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/lepauvrelazare.html">Les riches et les pauvres: "Le pauvre nommé Lazare" + conte "paradis enfer".</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/ouvriersderniereheure.html">Les ouvriers de la dernière heure (ou Les ouvriers de la onzième heure).</a></li>
      </ul>
      <li>Jésus annonce Le Royaume par ses paroles et par ses actes. Parmi ceux-ci, certains étonnent.</li>
      <ul>
      <li><a href="<?php echo $urlBase; ?>le_cate/paralyse.html"> Paroles étonnantes de Jésus: Guérison du paralysé de Capharnaüm.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/aveuglene.html"> Geste étonnant de Jésus: Guérison de l'aveugle-né.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/sabbat.html">La synagogue et le sabbat...: Jésus et le sabbat. </a></li>
      </ul></ul>
   </ul>
	
   <p class="backtotop"><a href="#top">revenir en haut</a></p>
   
   
  
   
   <h2>LA FOI. LA PRIERE. LE SIGNE DE CROIX. LE NOTRE PERE. CREDO. PROFESSION DE FOI.  EGLISE.</h2>
   <ul>
      <br>
      <li><a href="<?php echo $urlBase; ?>le_cate/prier.html">La prière.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/signedecroix.html">Le signe de croix.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/notrepere.html">Le Notre Père.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/credo.html">Le Credo: quelques pistes de réflexion et propositions de jeux.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/professiondefoi.html">Profession de foi: quelques idées de thèmes:</a> Croire...... A quoi ça sert la vie?......  Suivre Jésus...... Méditer la lettre de Jésus......   L'Eglise......   Lettre du père Di Falco......    Le signe de croix.</li>
      <li><a href="<?php echo $urlBase; ?>le_cate/cierge.html">Cierge profession de foi.</a></li>
   </ul>
   <p class="backtotop"><a href="#top">revenir en haut</a></p>


   <h2>GENERALITES SUR LES SACREMENTS. SACREMENT DU BAPTÊME. SACREMENT DE RECONCILIATION.</h2>
   <ul>
   <li><a href="<?php echo $urlBase; ?>le_cate/sacrements.html">Généralités sur les sacrements.</a></li>
   <br>
   <li>En route vers le sacrement du baptême:</li>
   <ul><ul>
   <li><a href="<?php echo $urlBase; ?>le_cate/sacrementdubapteme.html">Le sacrement du baptême.</a></li>
   <li><a href="<?php echo $urlBase; ?>le_cate/bapteme.html">Le baptême: Accompagner des enfants de primaire vers le baptême.</a></li>
   <li><a href="<?php echo $urlBase; ?>le_cate/livretbapteme.html">Création d'un livret de baptême à offrir et reportage photos (Année de sixième).</a></li>
   </ul></ul>
   <li>En route vers le sacrement de réconciliation: (Pour ceux qui le reçoivent pour la première fois, on pourra prévoir toutes les rencontres.)</li>
   <ul><ul>
   <li><a href="<?php echo $urlBase; ?>le_cate/pardon.html">Le pardon des péchés.</a>  <span class="txt-rouge">Powerpoint: "L'agression."</span></li>
   <li><a href="<?php echo $urlBase; ?>le_cate/filsprodigue.html">Jésus nous parle de l'Amour de Dieu:  "Le fils prodigue."</a> <span class="txt-vert"> (Histoire des foulards blancs.)</span> ou <a href="<?php echo $urlBase; ?>le_cate/moutonperdu.html">"Parabole de la brebis perdue et retrouvée."</a> ou <a href="<?php echo $urlBase; ?>le_cate/aveugle.html">"L'aveugle de 
   Jéricho."</a></li> 
   <li><a href="<?php echo $urlBase; ?>le_cate/rencontrepardon.html">Rencontre avec le prêtre.</a></li>
   <li><a href="<?php echo $urlBase; ?>le_cate/transfigurationluc.html">La transfiguration.</a></li>
   </ul></ul>
   </ul>
   <p class="backtotop"><a href="#top">revenir en haut</a></p>
   <h2>COMMUNION. SACREMENT DE L'EUCHARISTIE. MESSE.</h2>
   <ul>
   <li>En route vers le sacrement de l'Eucharistie: (Pour ceux qui le reçoivent pour la première fois, on pourra prévoir toutes les  rencontres.)</li>
   <ul><ul>
   <li><a href="<?php echo $urlBase; ?>le_cate/sortir.html">Sortir.</a></li>
   <li><a href="<?php echo $urlBase; ?>le_cate/repasdelapaque.html">Le repas de la Pâque.</a></li>
   <li><a href="<?php echo $urlBase; ?>le_cate/dernierrepasdejesus.html">Le dernier repas de Jésus.</a></li>
   <li><a href="<?php echo $urlBase; ?>le_cate/eucharistie.html">Prière Eucharistique- Communion.</a></li>
   </ul></ul>
   <br>
   <li>La messe: <a href="<?php echo $urlBase; ?>le_cate/messe.html"> Différentes parties de la messe et jeux.</a></li>
   <br>
   <li>La messe: <a href="<?php echo $urlBase; ?>le_cate/messelivret.html"> La messe: création de livrets. </a></li>
   <br> 
   <li>Première communion: <a href="<?php echo $urlBase; ?>le_cate/retraitecommunion.html">Livret autour des mots Pain et Vin. Livret autour du mot offrande.</a></li>
   <br>
   <li>Communion: Jeu de piste. <a href="<?php echo $urlBase; ?>le_cate/communionjeu.html">Jeu de piste autour de la communion.</a></li>
   </ul>
   <p class="backtotop"><a href="#top">revenir en haut</a></p>
   <h2>ETRE DISCIPLES. VIE DE SAINT PIERRE. LES MOINES.</h2>
   <ul>
      <li><a href="<?php echo $urlBase; ?>le_cate/disciples.html">Etre disciple: Appel de Simon, André, Jacques et Jean.</li>
      <li><a href="<?php echo $urlBase; ?>le_cate/va_travailler_a_ma_vigne.html">Travailler à la vigne du père.</li>
      <li><a href="<?php echo $urlBase; ?>le_cate/pierre.html">La vie de Pierre (Evangile de Matthieu+ vidéo actes des apôtres):</a> Appel. Guérison de la belle-mère de Pierre. Les douze apôtres. Marche sur l'eau. Profession de foi de Pierre. Reniement.</li>
      <li><a href="<?php echo $urlBase; ?>le_cate/moines.html">Pdf sur la vie des moines, abbaye de Fleury.</li>
   </ul>
   
   <p class="backtotop"><a href="#top">revenir en haut</a></p>
   <h2>JOSEPH, MARIE, PELERINAGE A LOURDES</h2>
   <ul>
      <br>
      <li><a href="<?php echo $urlBase; ?>le_cate/joseph.html">Promenade avec Joseph:</a></li>
      <li><u>Marie:</u> </li>
      <ul>
         <li><a href="<?php echo $urlBase; ?>le_cate/marcheavecmarie.html">Marche avec Marie. Prévoir le temps selon le trajet.</a></li>
         <li><a href="<?php echo $urlBase; ?>le_cate/marieevangiles.html">Marie dans les évangiles.</a></li>
         <li><a href="<?php echo $urlBase; ?>le_cate/mariejeux.html">Jouons avec Marie: images, prières, dizainier, jeux.</a></li>
			<li><a href="<?php echo $urlBase; ?>le_cate/rosaire.html" >Le Rosaire.</a></li>
         <li><a href="<?php echo $urlBase; ?>le_cate/marieapresmidi.html">Après-midi festive avec Marie.</a></li>
      </ul>
      <li><a href="<?php echo $urlBase; ?>le_cate/lourdes.html">Pèlerinage à Lourdes.</a></li>
   </ul>
   <p class="backtotop"><a href="#top">revenir en haut</a></p>
   <h2>TEMOINS, RELIGIONS, LE THEME DE LA MORT, LE MAL.</h2>
   <br>
   <ul>
      <li><u>Quelques témoins de l'Amour au 20ème siècle:</u></li>
      <ul>
         <li>L'Amour est non-violent:<a href="<?php echo $urlBase; ?>le_cate/gandhi.html"> Un hindouiste: Gandhi.</a></li>
         <li>Le fruit de L'Amour est le service: <a href="<?php echo $urlBase; ?>le_cate/mereteresa.html"> Une soeur catholique: Mère Teresa. </a></li>
         <li>L'Amour sait pardonner: <a href="<?php echo $urlBase; ?>le_cate/martinlutherking.html">Un pasteur baptiste: Martin-Luther King.</a></li>
         <li>L'Amour ne connaît pas de frontières: <a href="<?php echo $urlBase; ?>le_cate/silouane.html">Un moine orthodoxe: Silouane.</a></li>
         (Textes sur le pardon (Maïti) et l'esprit de non compétition (Marc le moniteur de sport et powerpoint autisme)).
      </ul>
      <li><u>Le Vent Divin souffle vers la terre des hommes et l'humain Le reçoit... :</u> </li>
      <ul>
         <li><a href="<?php echo $urlBase; ?>le_cate/hindouisme.html"> L'hindouisme. </a></li>
         <li><a href="<?php echo $urlBase; ?>le_cate/judaismechristianismeislam.html">Judaïsme, christianisme, islam. </a></li>
         <li><a href="<?php echo $urlBase; ?>le_cate/christianisme.html"> Le christianisme. </a></li>
      </ul>
      <li><a href="<?php echo $urlBase; ?>le_cate/mort.html">Autour du thème de la mort</a></li>
      <li><u>Le problème du mal</u></li>
      <ul>
         <li><a href="<?php echo $urlBase; ?>le_cate/lemal.html">Le mal que l'on fait.</a></li>
      </ul>
   </ul>
   <p class="backtotop"><a href="#top">revenir en haut</a></p>
   <h2>IDEES POUR UNE CATECHESE INTERGENERATIONNELLE</h2>
   <p>Deux dimanches par trimestre, nous proposons à toute la paroisse une catéchèse intergénérationnelle.<br>Nous invitons la communauté à se retrouver une heure avant la célébration autour d'ateliers. Nous prévoyons quatre ateliers.<br> Voir ci-dessous quelques propositions:</p>
   <ul>
      <li>Atelier chant: expliquer le Psaume, ou un autre chant et l'apprendre avec la chorale.</li>
      <li><a href="<?php echo $urlBase; ?>le_cate/visiteeglise.html">Visiter une église.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/rosaire.html">En octobre, atelier Rosaire.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/anneeliturgique.html">En novembre, présenter l'année liturgique.</a></li>
      <li>En novembre, présenter l'Avent.</li>
      <li><a href="<?php echo $urlBase; ?>le_cate/terre.html">Une journée autour du thème: "Où va la terre?"</a></li>
   </ul>
   <p class="backtotop"><a href="#top">revenir en haut</a></p>
   <h2>JEUX FIN D'ANNEE - SORTIES</h2>
   <ul>
      <li><a href="<?php echo $urlBase; ?>le_cate/jeumillebornes.html">Jeu règle du mille bornes: Autour de l'Evangile.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/jeudespersonnages.html">Avec Jésus: jeu des personnages.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/communionjeu.html">Jeu de pistes: Thème communion.</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/surlespasdepaul.html">Fête KT: Jeux "Sur les pas de saint Paul."</a></li>
      <li><a href="<?php echo $urlBase; ?>le_cate/enquetepere.html">Enquête: "Qu'est-ce qu'un père?"</a>: une sortie + une rencontre</li>
   </ul>
</div>
<?php 
}
?>