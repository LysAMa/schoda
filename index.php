<?php 



?>

<!DOCTYPE html>

<html>
  <head>
    <title>Schoda</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <link href="Public/static/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

      <!-- ################################################################################################ -->
      		<!-- importation de bootstrap dans le projet -->
      			<!-- importation des classes css de bootstrap -->
      <link rel="stylesheet" type="text/css" href="Public/static/bootstrap/dist/css/bootstrap.min.css"/>
      <link rel="stylesheet" type="text/css" href="Public/static/Style/style.css"/>
      <script type="text/javascript" src="Public/static/Js/jquery.min.js"></script>
      <script type="text/javascript" src="Public/static/bootstrap/dist/js/bootstrap.min.js"></script>

  </head>


<body id="top">
<!-- ################################################################################################ -->

  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="fl_left">
        <ul class="faico clear">
          <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
        </ul>
      </div>
      <div class="fl_right">
        <ul class="nospace inline pushright">
          <li><input type="text" class="form-control" id="pwd" name="champ_recherche"></li>
          <li><input type="submit" class="btn btn-info btn-log" name="btn_recherche" value="Recherche"></li>
          <li><i class="fa fa-sign-in"></i> <a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- Top Background Image Wrapper -->

  <!-- test modal -->
  <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

  <!-- Modal Login -->

  <div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Connectez</h4>
        </div>
        <div class="modal-body">
        	<input type="text" class="form-control" name="user_name" placeholder="@username"/><br/>
        	<input type="password" class="form-control" name="user_password" placeholder="@password"/>
        </div>
        <div class="modal-footer">
        	<button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Login</button>
          <button type="button" class="btn btn-info btn-sm" data-dismiss="modal" data-toggle="modal" data-target="#registerModal">Register</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- modal register -->
  <div class="modal fade" id="registerModal" role="dialog">
    <div class="modal-dialog ">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header panel panel-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register</h4>
        </div>
        <div class="modal-body">
	    	<div class="row">
	    		<div class="col-sm-6">
	    			<label>Nom de L'organisation</label>
	        		<input type="text" name="orgName" class="form-control"  placeholder="@Schoda"/>
	    		</div>
	    		<div class="col-sm-6">
	    			<label>Nom d'utilisateur</label>
		        	<input type="text" name="username" class="form-control"  placeholder="@Schoda2017"/>
	    		</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-sm-6">
	    			<label>Email</label>
	        		<input type="text" name="email" class="form-control"  placeholder="@Schoda2017@exemple.com"/>
	    		</div>
	    		<div class="col-sm-6">
	    			<label>Telephone</label>
		        	<input type="text" name="telephone" class="form-control"  placeholder="@(509)####-####"/>
	    		</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-sm-6">
	    			<label>Secteur d'activite</label>
	        		<input type="text" name="secteurActivite" class="form-control"  placeholder="@environement"/>
	    		</div>
	    		<div class="col-sm-6">
	    			<label>Langue</label>
		        	<input type="text" name="langue" class="form-control"  placeholder="@francais"/>
	    		</div>
	    	</div>
	    	
	    	<div class="row">
	    		<div class="col-sm-6">
	    			<label>Adresse</label>
	        		<input type="text" name="adresse" class="form-control"  placeholder="@19,delmas"/>
	    		</div>
	    		<div class="col-sm-6">
	    			<label>Photo</label>
		        	<input type="submit" name="photo" class="form-control" value="Ajouter" />
	    		</div>
	    	</div>
		    
		    <div class="row">
	    		<div class="col-sm-6">
	    			<label>Password</label>
	        		<input type="text" name="password" class="form-control"  placeholder="@*************"/>
	    		</div>
	    		<div class="col-sm-6">
	    			<label>Password confirmation</label>
		        	<input type="text" name="confirmPassword" class="form-control"  placeholder="@************"/>
	    		</div>
	    	</div>    
	 	</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info btn-md" data-dismiss="modal">Register</button>
        </div>
      </div>
      </div>
      
    </div>
  </div>

  <div class="bgded overlay" style="height: 130px;"> 
    <!-- ################################################################################################ -->
    <!-- menu -->
    <?php

    	require_once("Views/menu.php");


    ?>
    <!-- ################################################################################################ -->
  </div>
  <!-- End Top Background Image Wrapper -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!--  -->
  <div class="wrapper row3" >
    <main class="hoc container clear" id="act"> 
      <div class="block-act row">
      	<div class="img-block-act col-sm-4" >
      		<img src=""/>
      		<span>Org. XXX</span>
      	</div>
      	<div class="content-block-act col-sm-4">
      		
      	</div>
      	<div class="media-block-act col-sm-4">
      		
      	</div>
      </div >
      
    </main>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row4">
    <footer id="footer" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="clear center btmspace-80">
        <h2 class="heading font-x2">Opiami</h2>
        <p>Efficitur in pulvinar orci eget libero malesuada in lobortis ipsum fermentum sed faucibus.</p>
      </div>
      <div class="one_quarter first">
        <h6 class="title">Finibus porttitor</h6>
        <address class="btmspace-30">
        Street Name &amp; Number<br>
        Town<br>
        Postcode/Zip
        </address>
        <ul class="nospace">
          <li class="btmspace-10"><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
          <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="title">Feugiat ullamcorper</h6>
        <article>
          <h2 class="nospace font-x1"><a href="#">Neque sodales enim</a></h2>
          <time class="font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
          <p>Nullam scelerisque quam in dolor lobortis eleifend aliquam luctus elit vitae vulputate eleifend eu morbi.</p>
        </article>
      </div>
      <div class="one_quarter">
        <h6 class="title">Tellus eu cursus</h6>
        <ul class="nospace linklist">
          <li><a href="#">Arcu ac condimentum turpis</a></li>
          <li><a href="#">Fusce vitae ante tellus</a></li>
          <li><a href="#">Nunc varius auctor dapibus</a></li>
          <li><a href="#">Aliquam consequat scelerisque</a></li>
          <li><a href="#">Sapien at pulvinar rhoncus</a></li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="title">Nisi maximus nec</h6>
        <p>Nec rutrum felis sem nec quam vivamus sodales enim nunc nam nisl nibh cursus at leo.</p>
        <p>Lorem phasellus tellus tellus auctor ut posuere nec gravida nec urna proin at ipsum.</p>
      </div>
      <!-- ################################################################################################ -->
    </footer>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->

  <?php 
  	// include("pied.php");
  	require_once("Views/pied.php");
  ?>
  
  <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS -->
  <script src="Public/static/layout/scripts/jquery.min.js"></script>
  <script src="Public/static/layout/scripts/jquery.backtotop.js"></script>
  <script src="Public/static/layout/scripts/jquery.mobilemenu.js"></script>
  </body>
</html>