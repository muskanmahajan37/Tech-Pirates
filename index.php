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
    <script src="js/js.js"></script>
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
                    <a href="#vnit" class="navbar-brand"><img height="100%" width="auto" src="images/logo_small.png" alt="vnit"></a>    
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                     
                    <ul class="nav navbar-nav navbar-right">
                       <li class="hvr-underline-from-left" ><a href="#vnit">Top</a></li>
                       <li><a href="#home">2</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#expertise">Expertise</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#team1">Team</a></li>
                        <li><a href="#contact">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        
        
        
        
        
        <div id="vnit" class="section vnit-name align-center">
            <h1>
                VinnovateIT
            </h1>
        </div>
        
        
        
        
        
        
        
        <div class="section bg-color moto_div align-center " id="home">
            <!--<img src="images/ " alt="VinnovateIT" class="img-responsive" />-->
            <div class="moto">
                <h1>
						We at VinnovateIT brings the many dimensions of innovations <br> in one platform to showcase <br> the practical  understanding with meaningful execution.
				 </h1>
            </div>
        </div>
        
        
        
        
        
        
        
        <div class="container section text-align-centre" id="projects"  style="padding-top:5%;padding-bottom:5%;">
            <h1 class="heading">Our Projects</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora.
                <br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br
                <br> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <br>
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
        
        
        
        
        
        
        
        <div class="bg-color container section " id="expertise" align="center" style="padding-top:5%;padding-bottom:5%;">
            <h1 class="heading">Our Expertise</h1>
            <br>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <img src="images/expert/1.PNG" alt="" class="img-responsive" width="120px" height="120px" style="border-radius: 50%;">
                <p>Lorem ipsum dolor sit amet, consectetur
                     </p>
                <img src="images/expert/2.PNG" alt="" class="img-responsive" width="120px" height="120px" style="border-radius: 50%;">
                <p>Lorem ipsum dolor sit amet, consectetur
                     </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <img src="images/expert/3.PNG" alt="" class="img-responsive" width="120px" height="120px" style="border-radius: 50%;">
                <p>Lorem ipsum dolor sit amet, consectetur
                     </p>
                <img src="images/expert/4.PNG" alt="" class="img-responsive" width="120px" height="120px" style="border-radius: 50%;">
                <p>Lorem ipsum dolor sit amet, consectetur
                    </p>
            </div>
        </div>
        
        
        
        
        
                <div class="section container" id="about" align="center" style="padding-top:5%;padding-bottom:5%;" >
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4 align-right about-tab ">
                    <h1 class="heading">About us</h1>
                    <p>
                       <a class="indv-tab" onclick="story1()">Our Story</a><br>
                       <a class="indv-tab"  onclick="vission1()">Vission</a><br>
                       <a class="indv-tab" onclick="mission1()">Mission</a>
                    </p>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-8 about-desc align-left">
                    <div id="story">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. n ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div id="vission" style="display:none;">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora. Utroident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div id="mission" style="display:none;">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
         
        
        
        
        
        
        
        
        
        <div class="container section" align="center" style="padding-top:5%;padding-bottom:5%;">
            <h1 class="heading">How We Work</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora.
                <br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br
                <br> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <img src="images/f.png" class="img-responsive" alt="how we work" width="90%">
        </div>
        
        
        
        
        
        <div class="container" id="team1" style="padding-top:5%;padding-bottom:5%;">
            <h1 class="heading" align="center">Our Mentors</h1>
            <br>
            <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis varius massa, ut suscipit leo. Proin ultricies nibh id facilisis vehicula. Quisque vulputate rutrum libero, sit amet auctor leo vehicula vitae. Nunc et suscipit enim, vel cursus ante. Donec lobortis a sem ut tincidunt. Cras dui eros, congue ut pulvinar at, porta ac orci. Duis faucibus pretium dolor ut pulvinar. Nulla finibus at neque vitae ultricies. Vestibulum condimentum est eu dolor maximus, nec cursus eros rhoncus.</p>
            <br>
            <?php for($k=0;$k<4;$k++):?>
                <div class="col-sm-3 col-md-3 col-lg-3" style="position: relative;">
                    <div class="imgWrap1">
                        <img src="<?php echo($faculty_image[$k]);?>" alt="img" class="img-responsive" style="width:100%;height:250px;" />
                        <p class="imgDescription1">
                            <?php echo($faculty_name[$k]."<br>".$faculty_post[$k]);?>
                        </p>
                    </div>
                    <br>
                </div>
                <?php endfor; ?>
        </div>
        
        
        
        
        
        
        
        
        
        <div class="container-flush" align="center" style="padding-top:5%;padding-bottom:5%;">
            <br>
            <h1  class="heading">Our Team</h1>
            <p><a class="indv-tab" onclick="founder1()">Founders</a> | <a class="indv-tab" onclick="team1()">Operating Team</a></p>
            <br>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempora.
                <br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.br
                <br> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <br>
            <div id="founders">
                <div class="container-flush">
                    <div class="col-md-2 col-md-offset-1">
                        <div class="imgWrap">
                            <img class="img-responsive" src="<?php echo($founder_image[0]);?>" style="width:100%;height:250px;" />
                            <div class="imgDescription">
                                <p>
                                    <?php echo($founder_name[0]."<br>".$founder_post[0]);?>
                                </p>
                                <div class="social">
                                    <ul class="row">
                                        <li><a href="#" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
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
                                <img class="img-responsive" src="<?php echo($founder_image[$k]);?>" style="width:100%;height:250px;" />
                                <div class="imgDescription">
                                    <p>
                                        <?php echo($founder_name[$k]."<br>".$founder_post[$k]);?>
                                    </p>
                                    <div class="social">
                                        <ul class="row">
                                            <li><a href="#" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
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
                                        <img class="img-responsive" src="<?php echo($team_image[$xx]);?>" style="width:100%;height:250px;" />
                                        <div class="imgDescription">
                                            <p>
                                                <?php echo($team_name[$k]."<br>".$team_post[$k]);?>
                                            </p>
                                            <div class="social">
                                                <ul class="row">
                                                    <li><a href="#" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
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
                                            <img src="<?php echo($team_image[$k]);?>" alt="img" class="img-responsive" style="width:100%;height:250px;" />

                                            <div class="imgDescription">
                                                <p>
                                                    <?php echo($team_name[$k]."<br>".$team_post[$k]);?>
                                                </p>
                                                <div class="social">
                                                    <ul class="row">
                                                        <li><a href="#" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
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
                <p>Cognizant Research Lab Centre
                    <br/>VIT University,Vellore
                    <br/>632014</p>
            </div>
        </div>
    </body>

</html>