<?php
     include("include/connexion.php");
     if(isset($_POST["ajout"]))
	 {
		 $id = $_POST["id"];
		 $name=$_POST["nom"];
	     $prix=$_POST["prix"];
	     $nb_unit=$_POST["nb_unit"];
		 $renforme=$_POST["renforme"];
		 $vendu=$_POST["vendu"];
		 $reste=$_POST["reste"];
		 if(!empty($id) && !empty($name) && !empty($prix) && !empty($nb_unit)){
		     $query = "insert into accessoire(id, name, prix, nb_unit, renforme, vendu, reste) values('$id','$name','$prix','$nb_unit', '$renforme', '$vendu', '$reste')";
	         $conn->exec($query);
		 }
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
		 <style>
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
     </head>
     <body>
	     <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #800080;">
		     <form class="form-inline" >
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
                         <a class="nav-link" href="affichage.php" style="color:#FFFFFF;">afficher accessoire</a>
                     </li>
				 </ul>
			 </form>
		 </nav>
		 <div id="demo" class="carousel slide" data-ride="carousel">

             <!-- Indicators -->
             <ul class="carousel-indicators">
                 <li data-target="#demo" data-slide-to="0" class="active"></li>
                 <li data-target="#demo" data-slide-to="1"></li>
                 <li data-target="#demo" data-slide-to="2"></li>
				 <li data-target="#demo" data-slide-to="3"></li>
             </ul>

             <!-- The slideshow -->
             <div class="carousel-inner" style="height:90%;">
                 <div class="carousel-item active" style="background-color:#FF00FF; width:100%; height:100%;">
				 <h2 style="font-size: 60px; text-align: center; color: white; font-family: emoji;" class="font-italic">Bienvenue @Mhimdi Net</h2><br >
				 <img src="hp.jpg" class="rounded-circle mx-auto d-block" style="width:30%; height:60%;">
                 </div>
                 <div class="carousel-item">
                     <img src="cs.jpg" >
                 </div>
                 <div class="carousel-item">
                     <img src="cs2.jpg">
                 </div>
				 <div class="carousel-item">
				     <img src="cs3.jpg">
				 </diV>
             </div>
			 <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
					 </div>
				 </div>
			 </div>
		 </div>
		 <div class="container-fluid mx-width" style="padding:5%;">
		 <h3 class="text-info">Services</h3>
		 <div class="row">
		     <div class="col-sm-4">
			 <div class="card" style="width:80%;">
			 <div class="card-body">
			 <img src="traitement-texte.png" class="rounded-circle mx-auto d-block">
			 </div>
			 <div class="card-footer">
			 <button class="btn btn-success mx-auto d-block" style="border-radius:12em;" data-toggle="modal" data-target="#Mymodal">convertisseur mp3</button>
			 <div class="modal" id="myModal">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h4 class="modal-title">meilleurs software et sites online pour convertir mp4 to mp3</h4>
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                         </div>
                         <div class="modal-body">
						     <ul class="list-group">
                                 <li class="list-group-item d-flex justify-content-between align-items-center text-info">
                                  4K downloader
                                 <a target="_blanck" href="https://www.4kdownload.com/fr/downloads"><span class="fa fa-download"></span></a>
                                 </li>
								 <li class="list-group-item d-flex justify-content-between align-items-center text-danger">
                                  YoutubeDownloader
                                 <a target="_blanck" href="https://free-youtube-downloader-converter.fr.malavida.com/#gref"><span class="fa fa-download"></span></a>
                                 </li>
                                 <li class="list-group-item d-flex justify-content-between align-items-center text-info">
                                  Convert2mp3
                                 <a target="_blanck" href="https://convert2mp3.club/"><span class="fa fa-arrow-right"></span></a>
                                 </li>
                             </ul>
                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                         </div>

                     </div>
                 </div>
             </div>
			 </div>
			 </div>
			 </div>
			 <div class="col-sm-4">
			     <div class="card" style="width:80%;">
				 <div class="card-body">
			     <img src="logiciel.jpg" class="rounded-circle mx-auto d-block"><br>
				 </div>
				 <div class="card-footer">
			     <button class="btn btn-success mx-auto d-block" style="border-radius:12em;" data-target="#Mymodal2" data-toggle="modal">Logiciels</button>
				 <div class="modal" id="myModal2">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h4 class="modal-title">meilleurs sites web pour telecharges des logiciels</h4>
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                         </div>
                         <div class="modal-body">
						     <ul class="list-group">
                                 <li class="list-group-item d-flex justify-content-between align-items-center text-info">
                                  GET INTO PC
                                 <a target="_blanck" href="https://getintopc.com/"><span class="fa fa-share"></span></a>
                                 </li>
								 <li class="list-group-item d-flex justify-content-between align-items-center text-danger">
                                  CLUBIC
                                 <a target="_blanck" href="https://www.clubic.com/"><span class="fa fa-share"></span></a>
                                 </li>
                                 <li class="list-group-item d-flex justify-content-between align-items-center text-info">
                                  01NET
                                 <a target="_blanck" href="https://www.01net.com/"><span class="fa fa-share"></span></a>
                                 </li>
								 <li class="list-group-item d-flex justify-content-between align-items-center text-info">
                                  FILEHIPPO
                                 <a target="_blanck" href="https://filehippo.com/fr/"><span class="fa fa-share"></span></a>
                                 </li>
								 <li class="list-group-item d-flex justify-content-between align-items-center text-info">
                                  TECHSPOT
                                 <a target="_blanck" href="https://www.techspot.com/downloads/"><span class="fa fa-share"></span></a>
                                 </li>
                             </ul>
                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                         </div>

                     </div>
                 </div>
             </div>
				 </div>
				 </div>
			 </div>
			 <div class="col-sm-4">
			     <div class="card" style="width:80%;">
				 <div class="card-body">
			     <img src="recherche.jpg" class="rounded-circle mx-auto d-block"><br>
				 </div>
				 <div class="card-footer">
			     <button class="btn btn-success mx-auto d-block" style="border-radius:12em;" data-toggle="modal" data-target="#Mymodal3">recherches et documents</button>
				 <div class="modal" id="myModal3">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h4 class="modal-title">meilleurs sites web concerner</h4>
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                         </div>
                         <div class="modal-body">
						     <ul class="list-group">
                                 <li class="list-group-item d-flex justify-content-between align-items-center text-info">
                                  الموسوعة المدرسية
                                 <a target="_blanck" href="https://encysco.blogspot.com/"><span class="fa fa-share"></span></a>
                                 </li>
								 <li class="list-group-item d-flex justify-content-between align-items-center text-danger">
                                  madrassati
                                 <a target="_blanck" href="https://madrassatii.com"><span class="fa fa-share"></span></a>
                                 </li>
                                 <li class="list-group-item d-flex justify-content-between align-items-center text-info">
                                  devoirTN
                                 <a target="_blanck" href="https://www.devoir.tn/"><span class="fa fa-share"></span></a>
                                 </li>
								 <li class="list-group-item d-flex justify-content-between align-items-center text-info">
                                  devoiratNET
                                 <a target="_blanck" href="https://www.devoirat.net/"><span class="fa fa-share"></span></a>
                                 </li>
								 <li class="list-group-item d-flex justify-content-between align-items-center text-info">
                                  موارد المعلم
                                 <a target="_blanck" href="https://instiressources.blogspot.com/"><span class="fa fa-share"></span></a>
                                 </li>
                             </ul>
                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                         </div>

                     </div>
                 </div>
             </div>
				 
				 </div>
				 </div>
			 </div>
		 </div>
		 </div>
		 <div class="jumbotron bg-dark" id="ajout">
		     <form method="post" action="">
			     <div class="form group">
								     <input name="id" required class="form-control" placeholder="reference numeric">
								 </div>
								 <br>
							     <div class="form-inline mx-auto d-block">
								     <input name="nom" required class="form-control" placeholder="nom" style="width:48%;">&nbsp;
								     <input name="prix" required class="form-control" placeholder="prix" style="width:48%;">
								 </div>
								 <br>
								 <div class="form-inline mx-auto d-block">
								     <input name="nb_unit" required class="form-control" placeholder="nombres d'unites" style="width:48%;">&nbsp;
									 <input name="renforme" required class="form-control" placeholder="Qte reforme (par defaut ecrire 0)" style="width:48%;">
								 </div><br>
								 <div class="form-inline mx-auto d-block">
								     <input name="vendu" required class="form-control" placeholder="Qte vendus (par defaut ecrire 0)" style="width:48%;">&nbsp;
									 <input name="reste" required class="form-control" placeholder="Reste(par defaut ecrire 0)" style="width:48%;">
								 </div><br>
								 <div class="form-group">
								 <button name="ajout" class="btn btn-success" type="submit">suivant</button>
								 </div>
			 </form>
		 </div>
     </body>
</html>