<?php 
session_start();



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
      
                <div class="fl_right">
                  <ul class="nospace inline pushright">
                    
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


           <?php include("Public/partials/errors.php"); ?>
            <!-- Modal Form Login -->
           <?php require("Controlers/login.php"); ?>
            <!-- modal register -->
            <?php require("Controlers/register.php"); ?>

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
                </div>
              </div>
            </div>
          </div>


          <div class="bgded overlay" style="height: 130px;"> 
            <!-- ################################################################################################ -->
            <!-- menu -->
            <?php
              include("Views/menu.php");
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
                    <img src="Public/static/images/demo/avatar5.png"/>
                    <span>Org. XXX</span>
                  </div>
                  <div class="content-block-act col-sm-4">
                    <div class="block-title">
                      <p><strong>Nullam scelerisque</strong></p>
                      <hr/>
                    </div>
                    <div class="block-desc">
                      <p>Nullam scelerisque quam in dolor lobortis eleifend aliquam luctus elit vitae vulputate eleifend eu morbi.</p>
                      <p>Nullam scelerisque quam in dolor lobortis eleifend aliquam luctus elit vitae vulputate eleifend eu morbi.</p>
                    </div>
                    
                  </div>
                  <div class="media-block-act col-sm-4">
                    <div>
                      
                    </div>
                      <input type="submit" class="btn btn-info btn-md" data-toggle="modal" data-target="#detailModal" name="btn-detail" value="Detail" style="margin-top: 50%;" />
                    
                  </div>
                </div >

                <div class="modal fade" id="detailModal" role="dialog">
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
                
              </main>
            </div>
            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->
            
            
          <?php 
            include("Views/pied.php");
          ?>

          <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
          <!-- JAVASCRIPTS -->
          <script src="Public/static/layout/scripts/jquery.min.js"></script>
          <script src="Public/static/layout/scripts/jquery.backtotop.js"></script>
          <script src="Public/static/layout/scripts/jquery.mobilemenu.js"></script>

          <script src="Public/assets/js/jquery-latest.js"></script>
          <script src="Public/librairies/parsley/parsley.min.js"></script>
          <script src="Public/librairies/parsley/i18n/fr.js"></script>


      </body>
  </html>