<!DOCTYPE html>
<html lang="en">
<head>
<title>VinnovateIt</title>
<link rel="icon" href="images/vnit.png" type="image/x-icon">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="js/jquery-1.11.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script src="http://maps.googleapis.com/maps/api/js"></script>
<link rel="stylesheet" href="css/vnit.css">
<script type='text/javascript'>
	function story1() {
   document.getElementById('story').style.display = "block";
   document.getElementById('vission').style.display = "none";
   document.getElementById('mission').style.display = "none";
	}
	function vission1() {
   document.getElementById('story').style.display = "none";
   document.getElementById('vission').style.display = "block";
   document.getElementById('mission').style.display = "none";
	}
	function mission1() {
   document.getElementById('story').style.display = "none";
   document.getElementById('vission').style.display = "none";
   document.getElementById('mission').style.display = "block";
	}
	function team1() {
   document.getElementById('team').style.display = "block";
   document.getElementById('founders').style.display = "none";
	}
	function founder1() {
   document.getElementById('founders').style.display = "block";
   document.getElementById('team').style.display = "none";
	}
</script>
<script>
	function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(12.970936, 79.163673),
    zoom:15,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script>
        $(document).ready(function(){
        $("a").on('click', function(event) {
        if (this.hash !== "") {
               event.preventDefault();
               var hash = this.hash;
               $('html, body').animate({
                     scrollTop: $(hash).offset().top
        }, 800, function(){
              window.location.hash = hash;
                   });
            }
        });
     });
     </script>
</head>
<?php
$faculty_name = array("Aditya", "Aditya", "Aditya","Aditya");
$faculty_post = array("1337","1337","1337","1337");
$faculty_image = array("images/d.jpg","images/d.jpg","images/d.jpg","images/d.jpg");
$founder_name = array("Aditya", "Aditya", "Aditya","Aditya","Aditya");
$founder_post = array("1337","1337","1337","1337","1337");
$founder_image = array("images/d.jpg","images/d.jpg","images/d.jpg","images/d.jpg","images/d.jpg");
$team_name = array("Aditya", "Aditya", "Aditya","Aditya","Aditya","Aditya", "Aditya", "Aditya","Aditya","Aditya");
$team_post = array("1337","1337","1337","1337","1337","1337","1337","1337","1337","1337");
$team_image = array("images/d.jpg","images/d.jpg","images/d.jpg","images/d.jpg","images/d.jpg","images/d.jpg","images/d.jpg","images/d.jpg","images/d.jpg","images/d.jpg");
$our_project = array("images/10.jpg","images/10.jpg","images/10.jpg","images/10.jpg");
?>
<body>
<nav class="navbar-adi navbar-fixed-top ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
	 <li><a href="#home"><img src="images/vnit.png" alt="Logo" class="img-responsive" style=" width:50px;height:35px;" /></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
		<li><a href="#projects">Project</a></li>
		<li><a href="#expertise">Expertise</a></li>
	    <li><a href="#about">About Us</a></li>  
        <li><a href="#team1">Team</a></li>
		<li><a href="#contact">Contact us</a></li>
        </ul>
    </div>
  </div>
</nav>
	<div class="moto_div" id="home" aling="center">
		<img src="images/vnit.png" alt="VinnovateIT" class="img-responsive" />
			<div class="moto">
				<h1><br><br>
						We at VinnovateIT bring the many dimensions of <br>
						innovation together into practical understanding <br>
						and meaningful action.
				 </h1>
			</div>
	</div>
	<div class="container" id="projects" align="center" style="padding-top:5%;padding-bottom:5%;">
		<h1>Our Projects</h1>
			<p>
			 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora. <br>
			  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
			  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br <br>
			   Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p><br>
		<?php for($k=0;$k<4;$k++):?>
                <div class="col-sm-3 col-md-3 col-lg-3" style="position: relative;">
                    <div class="imgWrap1">
                        <img src="<?php echo($our_project[$k]);?>" alt="img" class="img-responsive" style="width:100%;height:250px;" />
                        <div class="imgDescription1">
                           <h3 class="img-desc-h3"><?php echo($faculty_name[$k]);?></h3>
                            <h5 class="img-desc-h5"><?php echo($faculty_post[$k]);?></h5>
                        </div>
                    </div>
                    <br>
                </div>
                <?php endfor; ?>	
	</div>
	<div class="container" id="expertise" align="center" style="padding-top:5%;padding-bottom:5%;">
		<h1>Our Expertise</h1><br>
		<div class="col-sm-6 col-md-6 col-lg-6" >
			<img src="images/10.jpg" alt="" class="img-responsive" width="220px" height="220px" style="border-radius: 50%;">
			<p>Lorem ipsum dolor sit amet, consectetur<br/> adipiscing elit, sed do<br/> eiusmod tempora.</p>
			<img src="images/10.jpg" alt="" class="img-responsive" width="220px" height="220px" style="border-radius: 50%;">
			<p>Lorem ipsum dolor sit amet, consectetur<br/> adipiscing elit, sed do<br/> eiusmod tempora.</p>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-6" >
			<img src="images/10.jpg" alt="" class="img-responsive" width="220px" height="220px" style="border-radius: 50%;">
			<p>Lorem ipsum dolor sit amet, consectetur<br/> adipiscing elit, sed do<br/> eiusmod tempora.</p>
			<img src="images/10.jpg" alt="" class="img-responsive" width="220px" height="220px" style="border-radius: 50%;">
			<p>Lorem ipsum dolor sit amet, consectetur<br/> adipiscing elit, sed do<br/> eiusmod tempora.</p>
		</div>
	</div>	
<div class="container" id="about"align="center" style="padding-top:5%;padding-bottom:5%;">
	<div class="row">
		<div class="col-sm-2 col-md-5 col-lg-3" >
			<h1>About us</h1>
			<p><a onclick="story1()">Our Story</a><br><a onclick="vission1()">Vission</a><br><a onclick="mission1()">Mission</a></p>
		</div>
		<div class="col-sm-10 col-md-7 col-lg-9">
			<div id="story">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						n ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
			</div>
			<div id="vission" style="display:none;">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora.
						Utroident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
			</div>
			<div id="mission" style="display:none;">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
			</div>
		</div>
	</div>
</div>
<div class="container" align="center"style="padding-top:5%;padding-bottom:5%;" >
            <h1>How We Work</h1>
            <p>
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora. <br>
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
                  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br <br>
                   Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <img src="images/f.png" class="img-responsive" alt="how we work" width="90%">
        </div>
<div class="container" id="team1" style="padding-top:5%;padding-bottom:5%;">
	<h1 align="center">Our Mentors</h1>
	<br>
	<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis varius massa, ut suscipit leo. Proin ultricies nibh id facilisis vehicula. Quisque vulputate rutrum libero, sit amet auctor leo vehicula vitae. Nunc et suscipit enim, vel cursus ante. Donec lobortis a sem ut tincidunt. Cras dui eros, congue ut pulvinar at, porta ac orci. Duis faucibus pretium dolor ut pulvinar. Nulla finibus at neque vitae ultricies. Vestibulum condimentum est eu dolor maximus, nec cursus eros rhoncus.</p>
	<br>
	<?php for($k=0;$k<4;$k++):?>
	 <div class="col-sm-3 col-md-3 col-lg-3" style="position: relative;" >
		<div class="imgWrap1">
			<img src="<?php echo($faculty_image[$k]);?>" alt="img" class="img-responsive" style="width:100%;height:250px;"/>
			<p class="imgDescription1"><?php echo($faculty_name[$k]."<br>".$faculty_post[$k]);?></p>
		</div>
		<br>
	</div>
	<?php endfor; ?>
	</div>
	<div class="container-flush" align="center" style="padding-top:5%;padding-bottom:5%;">
	<br>
	<h1>Our Team</h1>
	<p><a onclick="founder1()">Founders</a>  |  <a onclick="team1()">Operating Team</a></p>
	<br>
	         <p >
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora. <br>
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
                  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br <br>
                   Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
			<br>
	<div id="founders">
	<div class="container-flush">
		 <div class="col-md-2 col-md-offset-1">
		 	<div class="imgWrap">
			<img class="img-responsive" src="<?php echo($founder_image[0]);?>" style="width:100%;height:250px;"/>
			<div class="imgDescription">
			<p><?php echo($founder_name[0]."<br>".$founder_post[0]);?></p>
			<div class="social">
			<ul class="row">
				<li><a href="#"  target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
				<li><a href="#" target="_blank"><i class="fa fa-lg fa-linkedin"></i></a></li>
				<li><a href="#" target="_blank"><i class="fa fa-lg fa-twitter"></i></a></li>
			</ul>
			</div>
			</div>
		</div>
		<br>
		</div>
		<?php for($k=1;$k<5;$k++):?>
		<div class="col-sm-2 col-md-2 col-lg-2">
		<div class="imgWrap">
			<img class="img-responsive" src="<?php echo($founder_image[$k]);?>" style="width:100%;height:250px;"/>
			<div class="imgDescription">
			<p><?php echo($founder_name[$k]."<br>".$founder_post[$k]);?></p>
			<div class="social">
			<ul class="row">
				<li><a href="#"  target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
				<li><a href="#" target="_blank"><i class="fa fa-lg fa-linkedin"></i></a></li>
				<li><a href="#" target="_blank"><i class="fa fa-lg fa-twitter"></i></a></li>
			</ul>
			</div>
			</div>
		</div>
		<br>
	</div>
	<?php endfor; ?>
	</div>
	</div>
	<div id="team" style="display:none;">
	<div class="container-flush">
	<?php $xx=0; ?>
	<?php for ($i = 0; $i<2;$i++):?>
		<div class="row">
		 <div class="col-md-2 col-md-offset-1">
		 <div class="imgWrap">
			<img class="img-responsive" src="<?php echo($team_image[$xx]);?>" style="width:100%;height:250px;"/>
			<div class="imgDescription">
			<p><?php echo($team_name[$k]."<br>".$team_post[$k]);?></p>
			<div class="social">
			<ul class="row">
				<li><a href="#"  target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
				<li><a href="#" target="_blank"><i class="fa fa-lg fa-linkedin"></i></a></li>
				<li><a href="#" target="_blank"><i class="fa fa-lg fa-twitter"></i></a></li>
			</ul>
			</div>
			</div>
		<br>
		</div>
		</div>
		<?php for($k=$xx+1;$k<$xx+5;$k++):?>
		<div class="col-sm-2 col-md-2 col-lg-2">
		<div class="imgWrap">
			<img src="<?php echo($team_image[$k]);?>" alt="img" class="img-responsive" style="width:100%;height:250px;"/>

			<div class="imgDescription">
			<p><?php echo($team_name[$k]."<br>".$team_post[$k]);?></p>
			<div class="social">
			<ul class="row">
				<li><a href="#"  target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
				<li><a href="#" target="_blank"><i class="fa fa-lg fa-linkedin"></i></a></li>
				<li><a href="#" target="_blank"><i class="fa fa-lg fa-twitter"></i></a></li>
			</ul>
			</div>
			</div>
			<br>
		</div>
		</div>
		
		<?php endfor; ?>
		<?php $xx=$xx+4;?>
		</div>
	<br>
	<?php endfor; ?>
	</div>
	</div>
	</div>
	   <div class="container" id="contact" style="padding-top:5%;padding-bottom:5%;">
            <div class="col-sm-7 col-md-7 col-lg-7">
					<div id="googleMap" style="width:100%;height:380px;"></div>
            </div>
            <div class="col-sm-5 col-md-5 col-lg-5">
                  <h1>Contact Us</h1>
                  <p><b>VinnovateIT Lab</b></p>
                  <p>Cognizant Research Lab Centre<br/>VIT University,Vellore<br/>632014</p>
            </div>
        </div>
</body>
</html>
