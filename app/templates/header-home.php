<!DOCTYPE html>
<html lang="en">

<?php
include 'head.php';
require_once '../core/init.php';
require_once '../models/dbConfig.php';
$db = DB::getInstance();?>
<body class="body-left">
<div class="loading">
    <div class="table" style="height: 100%">
        <div class="inner"> <img src="../../public/images/logo1.png" alt="Image" class="logo"> </div>
        <!-- end inner -->
    </div>
    <!-- end table -->
</div>
<!-- end loading -->
<div class="transition-overlay"></div>
<header>
    <div class="side-box">
        <span class="close-sidebar"><i class="ion-close"></i></span>
        <div class="widget search">
            <h4>QUICK SEARCH</h4>
            <form action="search-result.php" method="get">
                <input type="text" placeholder="Project Name" name="p-name" id="project" autocomplete="off" onkeyup="suggest(this.value);"                                  onblur="fill();" required/>
                <div class="searchBox display_box" id="search" style="display: none;">
                    <div style="width: 190px;" class="suggestionList" id="searchList"> &nbsp; <br></div>
                </div>
                <button type="submit">GO</button>
            </form>
        </div>
        <!-- end widget -->
        <div class="widget text">
            <img src="../../public/images/logo1.png" alt="Image">
            <p>SC is one of the best service provider in construction industry for Sri Lanka</p>
        </div>
        <!-- end text -->
        <div class="widget gallery">
            <ul >
                <?php
                include '../controller/load-db.php';
                for ($i=0;$i<$photocnt;$i++){echo "
                    <li><a href=".SCRIPT_ROOT. $photores[$i]->path." class='fancybox' rel='gallery'><img src=".SCRIPT_ROOT.$photores[$i]->path." alt='Image'></a></li>";}
                ?>
            </ul>
        </div>
        <!-- end gallery -->
        <div class="widget responsive">
            <img src="../../public/images/icon-responsive.png" alt="Image"><br>
            <a href="#" ><h6><br>info@sidathconstruction.com<br></h6></a>
            <a href="#" ><h6>sidathconstruction@gmail.com<br></h6></a>
            <h6><b>+94 772 66 80 78 </b></h6>
        </div>
        <!-- end responsive -->
        <div class="widget social-media">
            <ul>
                <li><a href="https://www.facebook.com/Sidath-Construction-1511044005867620/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                <li><a href="https://plus.google.com/u/0/117141415954932621342" target="_blank"><i class="ion-social-googleplus"></i></a></li>
                <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
            </ul>
        </div>
        <!-- end social-media -->
        <small>Copyright � 2016,| Sidath Construction |</small>
    </div>
    <!-- end side-menu -->
    <!--<div class="search-bar">
        <form>
            <input type="text" placeholder="Type your word" autofocus >
            <button type="submit">SEARCH</button>
        </form>
        <span class="close-button"><i class="ion-close"></i></span> </div>-->
    <!-- end search-bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 hidden-xs">
                    <h5 class="...hidden-sm" >CUSTOMER SERVICE : <b>+94 772 66 80 78 </b></h5>
                    <ul class="social-media">
                        <li><a href="https://www.facebook.com/Sidath-Construction-1511044005867620/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/u/0/117141415954932621342" target="_blank"><i class="ion-social-googleplus"></i></a></li>
                    </ul>
                </div>
                <!-- end col-6 -->
                <div class="col-md-5 col-sm-0 col-xs-12">
                    <ul class="shop-menu">
                        <?php if ($_SESSION['new_user']==""){ ?>
                            <!--<li><a href="#" data-toggle="modal" data-target="#register-box">REGISTER</a></li>-->
                            <li><a href="#" data-toggle="modal" data-target="#login-box">LOGIN</a></li>
                        <?php } ?>
                        <?php if ($_SESSION['new_user']!=""){ ?>
                            <li style="margin-right: 0px;margin-left: -10px;color: #29282e;"><a href="../controller/logout.php" class="search-btn" ><i class="ion-power"></i> LOGOUT</a></li>
                        <?php } ?>
                    </ul>

                    <div class="language dropdown hidden-xs"> <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <img src="../../public/images/en.png" alt="Image"> ENGLISH
                    </div>
                    <!-- end language -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end top-bar -->
    <nav class="navbar navbar-default transparent" role="navigation" id="nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse" data-target="#mobile-menu"> <i class="ion-navicon"></i> </button>
                <a class="navbar-brand" href="<?php echo SCRIPT_ROOT ?>"><img src="../../public/images/logo1.png" alt="Image"></a> </div>
            <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="mobile-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="" class="transition">HOME</a></li>
                    <li class="dropdown"> <a href="#">ABOUT US</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="about-us.php" class="transition">ABOUT COMPANY</a></li>
                            <li><a href="certificate.php" class="transition">CERTIFICATES</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"> <a href="#">PAGES</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="projects.php" class="transition">PROJECTS</a></li>
                            <li><a href="promo-video.php" class="transition">PROMO VIDEO</a></li>
                            <!--<li><a href="404.php" class="transition">CAREER</a></li>-->
                            <!--<li><a href="404.php" class="transition">ELEMENTS</a></li>
                            <li><a href="404.php" class="transition">TYPOGRAPHY</a></li>-->


                        </ul>
                    </li>
                    <li><a href="gallery.php" class="transition">GALLERY</a></li>
                    <li class="dropdown"> <a href="#">SERVICES</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="Road-Highways.php" class="transition">ROAD & HIGHWAYS</a></li>
                            <li><a href="Renovation.php" class="transition">RENOVATION</a></li>
                            <li><a href="buildings.php" class="transition">BUILDINGS</a></li>
                            <li><a href="water.php" class="transition">WATER SUPPLY & DRAINGE SYSTEMS</a></li>
                            <li><a href="Paving.php" class="transition">PAVING BLOCK</a></li>
                            <!--<li><a href="404.php" class="transition">ROOF SOLUTIONS</a></li>
                            <li><a href="404.php" class="transition">KITCHEN REDESIGNING</a></li>
                            <li><a href="404.php" class="transition">INTERIOR DESIGNS</a></li>
                            <li><a href="404.php" class="transition">LANDSCAPE - GARDEN</a></li>
                            <li><a href="404.php" class="transition">PARQUET FLOORS</a></li>-->
                        </ul>
                    </li>
                    <?php if ($_SESSION['new_user']==""){ ?>
                    <li><a href="contact-us.php" class="transition">CONTAT US</a></li>
                    <?php } ?>
                    <?php if ($_SESSION['new_user']!=""){ ?>
                    <li class="dropdown"> <a href="#">ADMIN</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="clientlist.php" class="transition">CLIENT LIST</a></li>
                            <li><a href="clientmsg.php" class="transition">CLIENT MESSAGES</a></li>
                        </ul>
                    </li>
                    <?php } ?>
                    <li class="side-menu">SIDE MENU<span></span><span class="spacing"></span><span></span></li>

                </ul>
                <!-- end navbar-nav -->
            </div>
            <!-- end navbar-collapse -->
        </div>
        <!-- end container-->
    </nav>
    <!--- end nav -->
</header>
<!-- Modal -->
<div class="modal fade" id="register-box" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Register now </h4>
            </div>
            <!-- end modal-header -->
            <div class="modal-body">
                <script src="../../public/js/singup.js"></script>
                <form action="../controller/signup.php" id="signupform" method="post">
                    <div class="form-group">
                        <label>Client ID</label>
                        <?php
                        $db_result=$db->query("SELECT * FROM client")->result(); // Run your query
                        $count=$db->query("SELECT * FROM client")->count();
                        echo '<select name="client_ID" >'; // Open your drop down box
                        echo "<option value='client_id'>Select..</option>";
                        // Loop through the query results, outputing the options one by onefor
                        for ($i=0;$i<$count;$i++){
                            echo "<option value=  '{$db_result[$i]->c_id}'>{$db_result[$i]->c_id}</option>";

                        }


                        echo '</select>';
                        $res='';?>
                    </div>

                    <!-- end form-group -->
                    <div class="form-group">
                        <label>Your e-mail</label>
                        <?php

                        if ($res){
                            $db_result1=$db->query("SELECT * FROM client WHERE c_id='$res'")->result();
                            echo "<label>" .$db_result1[0]->c_email."<lable>";
                        }
                        else {
                            echo '
                            <input type = "text" placeholder = "E-mail" name = "email" >';
                        }
                        ?>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group">
                        <label>Your password</label>
                        <input type="password" placeholder="password" name="password">
                    </div>
                    <!-- end form-group -->
                    <div class="form-group">
                        <label>Your password - Again</label>
                        <input type="password" placeholder="Password Again" name="repassword">
                    </div>
                    <!-- end form-group -->
                    <div class="form-group">
                        <button type="submit" id="btn-signup">REGISTER</button>
                    </div>
                    <!-- end form-group -->
                </form>
            </div>
            <!-- end modal-body -->
        </div>
        <!-- end modal-content -->
    </div>
    <!-- end modal-dialog -->
</div>
<!-- end reg-modal -->

<div class="modal fade" id="login-box" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times</span></button>
                <h4 class="modal-title">Login</h4>
            </div>
            <!-- end modal-header -->
            <div class="modal-body">
                <form action="../controller/login.php" method="post">
                    <div class="form-group">
                        <label>Your e-mail</label>
                        <input type="text" placeholder="E-mail" name="username" >
                    </div>
                    <!-- end form-group -->
                    <div class="form-group">
                        <label>Your password</label>
                        <input type="password" placeholder="password" name="password">
                    </div>
                    <!-- end form-group -->
                    <div class="form-group"> <a href="#">I forget my password</a> </div>
                    <!-- end form-group -->
                    <div class="form-group">
                        <button type="submit" >LOGIN</button>
                    </div>
                    <!-- end form-group -->
                </form>
            </div>
            <!-- end modal-body -->
        </div>
        <!-- end modal-content -->
    </div>
    <!-- end modal-dialog -->
</div>
<!-- end login-modal -->
