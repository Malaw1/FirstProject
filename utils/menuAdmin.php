<div id="centre">
		<div id="navigation">
			<ul>
				<li><?php
				   if($menu=="index"){
					   echo"<span class=\"courant\"> Accueil</span>";
				   }
				   else{
					  echo  "<a href=\"index.php\">Accueil</a>";
				   }
				?>
				</li>
				<li><?php
				   if($menu=="gestionEtudiant"){
					   echo"<span class=\"courant\">gestion des Etudiant</span>";
				   }
				   else{
					  echo  "<a href=\"gestionEtudiant.php\">gestion des Etudiant</a>";
				   }
				?>
				</li>
			</ul>
		</div><!-- #navigation -->

<div id="contenu">