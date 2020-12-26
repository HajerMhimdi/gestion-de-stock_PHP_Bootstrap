<html>
     <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		 </head>
     <body>
	 <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #800080;">
		     <form class="form-inline" style="width:100%;" >
			 <ul class="navbar-nav">
                     <li class="nav-item active" >
                         <a class="nav-link" href="index.php" style="color:#FFFFFF;" data-toggle="tooltip" title="consulter la page d'accueil"><span class="fa fa-home" ></span>Accueil</a>
                         <script>
                             $(document).ready(function(){
                              $('[data-toggle="tooltip"]').tooltip();
                             });
                         </script>
					 </li>
			     <ul class="navbar-nav">
                     <li class="nav-item" >
                         <a class="nav-link" href="#ajout" style="color:#FFFFFF;">Ajouter accessoire</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="affichage.php" style="color:#FFFFFF;">afficher liste accessoire</a>
                     </li>
				 </ul>
			 </form>
			  <form class="form-inline" action="recherche.php" method="post">
                 <input name="rech" class="form-control mr-sm-2" type="text" placeholder="Tapez un nom d'accessoire.."  required>
                 <button name="rch" class="btn btn-success" type="submit"><span class="fa fa-search"></span></button>
             </form>
		 </nav>
	 <div class="jumbotron">
	 <table class="table table-dark table-hover">
	 <tr><th>reference</th><th>nom</th><th>prix</th><th>stock</th><th>renforme</th><th>vendu</th><th>reste</th><th colspan="2">operations</th></tr>
	 <?php
	    include "include/connexion.php";
			$query="select * from accessoire";
			$result = $conn->query($query);
			$data = $result->fetchAll();
			for($i = 0;$i<count($data);$i++)
			{
				 $id=$data[$i]["id"];
				 $nom=$data[$i]["name"];
				 $prix=$data[$i]["prix"];
			     $nb_unit=$data[$i]["nb_unit"];
				 $renforme=$data[$i]["renforme"];
				 $vendu=$data[$i]["vendu"];
				 $reste=$data[$i]["reste"];
				 echo "<tr><td>$id</td><td>$nom</td><td>$prix</td><td>$nb_unit</td><td>$renforme</td><td>$vendu</td><td>$reste</td>";
				 echo"<td>";
				 echo"<a href='suppression.php?id=$id' onclick='return confirm(\"Confirmez vous cette suppression..?\");'class='btn btn-danger'>Supprimer</a>";
				 echo"</td>";
				 echo"<td>";
				 echo"<a href='modification.php?id=$id' class='btn btn-warning'>Modifier</a>";
echo"</td>";
				 echo"</tr>";
			}			
	 ?>
	 </table>
	 </div>
	 </body>
	 </html>