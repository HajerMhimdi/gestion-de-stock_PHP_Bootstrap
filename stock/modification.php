<?php
$id  = "";
$nom="";
$prix="";
$nb_unit="";
$renforme="";
$vendu="";
$reste="";
if(isset($_GET["id"]))
{
	$id = $_GET["id"];
	if(!empty($id) && is_numeric($id))
	{
		 include("include/connexion.php");
		 $query="select * from accessoire where id = $id";
	     $result = $conn->query($query);
		 $data = $result->fetchAll();
		 $id = $data[0]["id"];
		 $nom = $data[0]["name"];
		 $prix = $data[0]["prix"];
		 $nb_unit = $data[0]["nb_unit"];
		 $renforme = $data[0]["renforme"];
		 $vendu = $data[0]["vendu"];
		 $reste = $data[0]["reste"];
	}
}
if(isset($_POST["modif"]))
{
	$id = $_POST["id"];
	$nom = $_POST["nom"];
	$prix = $_POST["prix"];
	$nb_unit = $_POST["nb_unit"];
	$renforme = $_POST["renforme"];
	$vendu = $_POST["vendu"];
	$reste = $_POST["reste"];
		include("include/connexion.php");
		$query = "update accessoire set name = '$nom', prix = '$prix', nb_unit= '$nb_unit', renforme= '$renforme', vendu= '$vendu', reste= '$reste' where id = '$id' ";
		$conn->exec($query);
		header("Location:affichage.php");
}
?>
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
		     <form class="form-inline" method="post" action="#">
			 <ul class="navbar-nav">
                     <li class="nav-item active" >
                         <a class="nav-link" href="index.php" style="color:#FFFFFF;"><span class="fa fa-home"></span>Accueil</a>
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
		 </nav>
	     <div class="jumbotron" style="margin: 5%;">
		     <h1 class="text-danger" style="text-align:center">Modifier un accessoire</h1>
			 <form class="form-inline" method="post" action="">
                     <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>" style="width: 9%;">
					 <input class="form-control" name="nom" value="<?php echo $nom;?>" style="width: 9%;">
					 <input class="form-control" name="prix" value="<?php echo $prix;?>" style="width: 9%;">
					 <input class="form-control" name="nb_unit" value="<?php echo $nb_unit;?>" style="width: 9%;">
					 <input class="form-control" name="renforme" value="<?php echo $renforme;?>" style="width: 9%;">
					 <input class="form-control" name="vendu" value="<?php echo $vendu;?>" style="width: 9%;">
					 <input class="form-control" name="reste" value="<?php echo $reste;?>" style="width: 9%;">
					 <input class="form-control btn btn-success" name="modif" type="submit">
			 </form>
		 </div>
		 </body>
		 </html>