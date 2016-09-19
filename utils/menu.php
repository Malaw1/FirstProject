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
				   if($menu=="etudiant"){
					   echo"<span class=\"courant\">Etudiant</span>";
				   }
				   else{
					  echo  "<a href=\"etudiant.php\">Etudiant</a>";
				   }
				?>
				</li>
				<li><?php
				   if($menu=="recherche"){
					   echo"<span class=\"courant\">Recherche</span>";
				   }
				   else{
					  echo  "<a href=\"recherche.php\">Recherche</a>";
				   }
				?>
				</li>
				<li><?php
				   if($menu=="connexion"){
					   echo"<span class=\"courant\">Connexion</span>";
				   }
				   else{
					  echo  "<a href=\"connexion.php\">Connexion</a>";
				   }
				?>
				</li>
			</ul>
		</div><!-- #navigation -->

<div id="contenu">