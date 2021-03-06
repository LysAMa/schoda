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
          <ul class="active nospace inline pushright clear">
          <li>
            <a href="#" >
              <img src="../Public/static/images/demo/avatar3.png" class="img">
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
                  <a href="pageprofil.php">Setting</a>
                </li>
                <li>
                  <a href="#">Log out</a>
                </li>
              </ul>
          </li>
        </ul>
        </nav>
      </div>
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- Top Background Image Wrapper -->
  <!-- <?php
  #	require_once("tete.php");
  ?>
 -->
      <!-- Block Menu with image -->
  <div class="bgded overlay" style="height: 130px; background-image:url('../Public/static/images/demo/backgrounds/img2.JPG') "> 
    <!-- ################################################################################################ -->
    <!-- menu -->
    <div class="wrapper row1">
      <header id="header" class="hoc clear"> 
        <!-- ################################################################################################ -->
        <div id="logo" class="fl_left">
          <h1><a href="../index.php">Data Share</a></h1>
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

      <?php
        require("../Views/activities.php");
        require("../Views/activities.php");
        require("../Views/activities.php");
        require("../Views/activities.php");
        require("../Views/activities.php");
        require("../Views/activities.php");
      ?>

      
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