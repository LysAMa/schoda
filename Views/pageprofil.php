<!DOCTYPE html>

<html>
  <head>
    <title>Schoda</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <link href="../Public/static/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

      <!-- ################################################################################################ -->
          <!-- importation de bootstrap dans le projet -->
            <!-- importation des classes css de bootstrap -->
      <link rel="stylesheet" type="text/css" href="../Public/static/bootstrap/dist/css/bootstrap.min.css"/>
      <link rel="stylesheet" type="text/css" href="../Public/static/Style/style.css"/>
      <script type="text/javascript" src="../Public/static/Js/jquery.min.js"></script>
      <script type="text/javascript" src="../Public/static/bootstrap/dist/js/bootstrap.min.js"></script>

      <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
      			<!-- importation des classes css de bootstrap -->
  </head>


<body id="top">
<!-- ################################################################################################ -->

  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      
      <div class="fl_right">
        <nav id="mainav2" class="fl_right org">
          <ul class="nospace inline pushright clear">
          <li>
            <a href="#" >
              <img src="../Public/static/images/demo/avatar3.png">
              
            </a>
              <ul>
                <li>
                  <a href="#" >Name organisation</a>
                </li>
                <li>
                  <a href="#" class="drop">Ajouter Activite</a>
                    <ul>
                      <li>
                        <a href="#">Add Projet</a>
                      </li>
                      <li>
                        <a href="#">Add Enquete</a>
                      </li>
                    </ul>
                </li>
                <li>
                  <a href="#">Setting</a>
                </li>
                <li>
                  <a href="#">Log out</a>
                </li>
              </ul>


          </li>
        </ul>
        </nav>
        
      </div>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- Top Background Image Wrapper -->
  <?php
  	require_once("tete.php");
  ?>

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

  <div class="bgded overlay" style="height: 130px; background-image:url('../Public/static/images/demo/backgrounds/img2.JPG') "> 
    <!-- ################################################################################################ -->
    <!-- menu -->
    <div class="wrapper row1">
      <header id="header" class="hoc clear"> 
        <!-- ################################################################################################ -->
        <div id="logo" class="fl_left">
          <h1><a href="index.php">Work With Data</a></h1>
        </div>
        <nav id="mainav" class="fl_right">
          <ul class="clear">
            <li class="active"><a href="../index.php">Home</a></li>
            <li><a class="drop" href="#">Pages</a>
              <ul>
                <li><a href="pages/gallery.html">Gallery</a></li>
                <li><a href="pages/full-width.html">Full Width</a></li>
                <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
                <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
                <li><a href="pages/basic-grid.html">Basic Grid</a></li>
              </ul>
            </li>
            <li><a class="drop" href="#">Dropdown</a>
              <ul>
                <li><a href="#">Level 2</a></li>
                <li><a class="drop" href="#">Level 2 + Drop</a>
                  <ul>
                    <li><a href="#">Level 3</a></li>
                    <li><a href="#">Level 3</a></li>
                    <li><a href="#">Level 3</a></li>
                  </ul>
                </li>
                <li><a href="#">Level 2</a></li>
              </ul>
            </li>
            <li><a href="#">Apropos</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
        <!-- ################################################################################################ -->
      </header>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div id="pageintro" class="hoc clear"> 
      <!-- ################################################################################################ -->
     
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
  </div>
  <!-- End Top Background Image Wrapper -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!--  -->
  <div class="wrapper row3" >
     <main class="hoc container clear" id="act"> 

        <div class="block-profil">
          <div class="profil-img">
            
          </div>
         
            <div class="detail">
              <!-- <input type="name" name="name-org" class="form-control"> -->
              <p class="form-control"><strong>Nom</strong> </p>
            </div>
            <div class="button">
              <input type="submit" name="edit" class="btn btn-info btn-md" value="Edit">
            </div>
          
        </div>
    </main>
  </div>
  
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->

  <?php 
    // include("pied.php");
    require_once("../Views/pied.php");
  ?>
  
  <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS -->
  <script src="../Public/static/layout/scripts/jquery.min.js"></script>
  <script src="../Public/static/layout/scripts/jquery.backtotop.js"></script>
  <script src="../Public/static/layout/scripts/jquery.mobilemenu.js"></script>
  </body>
</html>