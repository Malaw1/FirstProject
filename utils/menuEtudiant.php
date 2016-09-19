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
				   if($menu=="cv"){
					   echo"<span class=\"courant\">CV</span>";
				   }
				   else{
					  echo  "<a href=\"cv.php\">CV</a>";
				   }
				?>
				</li>
				<li><?php
				   if($menu=="stage"){
					   echo"<span class=\"courant\">Stage</span>";
				   }
				   else{
					  echo  "<a href=\"stage.php\">Stage</a>";
				   }
				?>
				</li>
				<li><?php
				   if($menu=="diplomes"){
					   echo"<span class=\"courant\">Diplomes</span>";
				   }
				   else{
					  echo  "<a href=\"diplomes.php\">Diplomes</a>";
				   }
				?>
				</li>
				<li><?php
				   if($menu=="etat_civil"){
					   echo"<span class=\"courant\">Etat civil</span>";
				   }
				   else{
					  echo  "<a href=\"etat_civil.php\">Etat civil</a>";
				   }
				?>
				</li>
				<li><?php
				   if($menu=="loisirs"){
					   echo"<span class=\"courant\">Loisirs</span>";
				   }
				   else{
					  echo  "<a href=\"loisirs.php\">Loisirs</a>";
				   }
				?>
				</li>
			</ul>
		</div><!-- #navigation -->

<div id="contenu">