<?php 



?>

<!DOCTYPE html>

<html>
  <head>
    <title>Data Share</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

      <!-- ################################################################################################ -->
      		<!-- importation de bootstrap dans le projet -->
      			<!-- importation des classes css de bootstrap -->
      <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css"/>
      <link rel="stylesheet" type="text/css" href="Style/style.css"/>
      <script type="text/javascript" src="Js/jquery.min.js"></script>
      <script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>

  </head>


<body id="top">
<!-- ################################################################################################ -->

  <?php
  	// include("tete.php"); 
  	require_once("PHP/tete.php");
  ?>
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

  <div class="bgded overlay" style="background-image:url('images/demo/backgrounds/img2.JPG');"> 
    <!-- ################################################################################################ -->
    <div class="wrapper row1">
      <header id="header" class="hoc clear"> 
        <!-- ################################################################################################ -->
        <div id="logo" class="fl_left">
          <h1><a href="index.php">Work With Data</a></h1>
        </div>
        <nav id="mainav" class="fl_right">
          <ul class="clear">
            <li class="active"><a href="index.php">Home</a></li>
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
            <li><a href="#">Link Text</a></li>
            <li><a href="#">Link Text</a></li>
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
  <!-- ################################################################################################ -->
  <div class="wrapper row3">
    <main class="hoc container clear"> 
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div class="btmspace-80 center">
        <h3 class="nospace">Faucibus mattis orci</h3>
        <p class="nospace">Quis nunc phasellus sit amet pharetra nunc vitae placerat.</p>
      </div>
      <ul class="nospace group services">
        <li class="one_third first">
          <article>
            <div class="txtwrap"><i class="block fa fa-4x fa-american-sign-language-interpreting"></i>
              <h4 class="heading">Consectetur</h4>
              <p>Sem mauris faucibus metus felis sed cursus metus efficitur&hellip;</p>
            </div>
            <footer><a href="#">View Details</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article>
            <div class="txtwrap"><i class="block fa fa-4x fa-binoculars"></i>
              <h4 class="heading">Sollicitudin</h4>
              <p>Mauris consectetur finibus faucibus praesent purus nec odio&hellip;</p>
            </div>
            <footer><a href="#">View Details</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article>
            <div class="txtwrap"><i class="block fa fa-4x fa-blind"></i>
              <h4 class="heading">Lobortis</h4>
              <p>Mollis eget elementum massa posuere vivamus venenatis mauris&hellip;</p>
            </div>
            <footer><a href="#">View Details</a></footer>
          </article>
        </li>
      </ul>
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper bgded" style="background-image:url('images/demo/backgrounds/01.png');">
    <div class="hoc split clear">
      <article class="box clear"> 
        <!-- ################################################################################################ -->
        <h6 class="heading">Vehicula ac placerat</h6>
        <p class="btmspace-30">Ut varius nunc sit amet enim euismod feugiat eros nec accumsan erat vestibulum tincidunt tristique libero ut luctus duis ultricies felis tempor nulla&hellip;</p>
        <ul class="fa-ul">
          <li><i class="fa-li fa fa-laptop"></i> Id commodo porta nulla in metus arcu donec a tincidunt justo nunc accumsan massa</li>
          <li><i class="fa-li fa fa-lastfm"></i> Mi eros gravida nisl vel massa nulla sit amet lectus quisque sed nisl et urna</li>
          <li><i class="fa-li fa fa-legal"></i> Lobortis purus eu consequat commodo integer at placerat risus aenean venenatis</li>
        </ul>
        <footer><a class="btn" href="#">Read More</a></footer>
        <!-- ################################################################################################ -->
      </article>
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row3">
    <section class="hoc container clear"> 
      <!-- ################################################################################################ -->
      <div class="btmspace-80 center">
        <h3 class="nospace">Leo pretium in quis</h3>
        <p class="nospace">Orci ut quam interdum aliquet phasellus vehicula molestie.</p>
      </div>
      <div class="group">
        <div class="one_third first">
          <h4 class="nospace font-x1">Vulputate justo mattis</h4>
          <p>Cursus quam maecenas convallis posuere neque vitae accumsan ultricies est et condimentum vestibulum integer&hellip;</p>
          <footer><a class="btn" href="#">Read More</a></footer>
        </div>
        <article class="one_third"><a href="#"><img class="btmspace-30" src="images/demo/320x210.png" alt=""></a>
          <h4 class="nospace font-x1">Sollicitudin platea</h4>
          <p>Arcu at tortor tristique laoreet ac a massa lorem ipsum dolor sit amet consectetur adipiscing elit eu rutrum&hellip;</p>
        </article>
        <article class="one_third"><a href="#"><img class="btmspace-30" src="images/demo/320x210.png" alt=""></a>
          <h4 class="nospace font-x1">Habitasse dictumst</h4>
          <p>Pretium felis donec eget libero auctor pretium justo quis consectetur elit et eleifend leo tempor ipsum&hellip;</p>
        </article>
      </div>
      <!-- ################################################################################################ -->
    </section>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper">
    <section id="shout" class="hoc container clear"> 
      <!-- ################################################################################################ -->
      <div class="three_quarter first">
        <h2 class="heading btmspace-10">Vivamus varius scelerisque fermentum</h2>
        <p class="nospace">Nunc leo arcu tempus ut est et pulvinar scelerisque lorem sed et odio ut ullamcorper.</p>
      </div>
      <div class="one_quarter"><a class="btn" href="#">Gravida vivamus</a></div>
      <!-- ################################################################################################ -->
    </section>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row3">
    <div class="hoc container center clear"> 
      <!-- ################################################################################################ -->
      <p class="font-xs"><a href="#">Dui maximus vehicula</a></p>
      <h3 class="btmspace-10">Tempus mollis ante eu bibendum</h3>
      <p class="nospace">Vivamus tempor dui quis fermentum ultricies sem purus scelerisque.</p>
      <!-- ################################################################################################ -->
    </div>
    <ul class="nospace group latest">
      <!-- ################################################################################################ -->
      <li>
        <article>
          <figure><img src="images/demo/380x320.png" alt="">
            <figcaption>
              <time datetime="2045-04-06T08:15+00:00"><strong>06</strong> <em>Apr</em></time>
              <div><a href="#"><i class="fa fa-eye"></i></a></div>
            </figcaption>
          </figure>
          <div class="txtwrap">
            <h4 class="heading">Ut auctor sagittis</h4>
            <p>Lorem ligula sed ex quisque sit amet commodo leo non hendrerit ex fusce erat eros dignissim in nibh&hellip;</p>
          </div>
        </article>
      </li>
      <li>
        <article>
          <figure><img src="images/demo/380x320.png" alt="">
            <figcaption>
              <time datetime="2045-04-05T08:15+00:00"><strong>05</strong> <em>Apr</em></time>
              <div><a href="#"><i class="fa fa-eye"></i></a></div>
            </figcaption>
          </figure>
          <div class="txtwrap">
            <h4 class="heading">Pharetra orci risus</h4>
            <p>Tortor nulla vel luctus tortor ut consequat velit at pretium euismod aliquam sit amet libero turpis&hellip;</p>
          </div>
        </article>
      </li>
      <li>
        <article>
          <figure><img src="images/demo/380x320.png" alt="">
            <figcaption>
              <time datetime="2045-04-04T08:15+00:00"><strong>04</strong> <em>Apr</em></time>
              <div><a href="#"><i class="fa fa-eye"></i></a></div>
            </figcaption>
          </figure>
          <div class="txtwrap">
            <h4 class="heading">Turpis non justo</h4>
            <p>Sed placerat turpis pharetra ac donec vulputate leo diam quis pulvinar urna posuere sit amet posuere&hellip;</p>
          </div>
        </article>
      </li>
      <li>
        <article>
          <figure><img src="images/demo/380x320.png" alt="">
            <figcaption>
              <time datetime="2045-04-03T08:15+00:00"><strong>03</strong> <em>Apr</em></time>
              <div><a href="#"><i class="fa fa-eye"></i></a></div>
            </figcaption>
          </figure>
          <div class="txtwrap">
            <h4 class="heading">Nullam tincidunt</h4>
            <p>Mattis sed lacinia sed interdum sit amet nulla vivamus lobortis vitae mauris pulvinar scelerisque&hellip;</p>
          </div>
        </article>
      </li>
      <!-- ################################################################################################ -->
    </ul>
  </div>
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
  	require_once("PHP/pied.php");
  ?>
  
  <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS -->
  <script src="layout/scripts/jquery.min.js"></script>
  <script src="layout/scripts/jquery.backtotop.js"></script>
  <script src="layout/scripts/jquery.mobilemenu.js"></script>
  </body>
</html>