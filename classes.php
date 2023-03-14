<?php
   session_start();

   if(isset($_SESSION['userId'])) {
      require('./config/db.php');

      $userId = $_SESSION['userId'];

      $stmt = $pdo -> prepare('SELECT * FROM customer WHERE id =?');
      $stmt -> execute([$userId]);

      $user = $stmt -> fetch();
   }
?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Classes | Zenflow Yoga</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/main.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/zen-fav.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout inner_page">
      <!-- This is the php code -->
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header class="full_bg">
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/zen-log.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="index.html">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.html">About</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="classes.php">classes</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="yoga.html">yoga</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="pricing.html">pricing</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.html">Contact Us</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="profile.html">Profile</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
         <!-- end header -->
         <!-- banner -->
       
      </header>
      <!-- end banner -->
      <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                       <h2>Our Classes</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- our classes -->
      <div class="classes">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="titlepage">
                     <?php if(isset($user)) { ?>
                        <span style="font-size: 20px;font-weight: bold;font-family: 'Jost', sans-serif;">Welcome <?php echo $user->fname ?> </span>
                     <?php } else { ?>
                        <span style="font-size: 20px;font-weight: bold;font-family: 'Jost', sans-serif;">Welcome guest</span>
                     <?php } ?>
                  </div>
               </div>
            </div>
            <!-- <div class="row">
               <div class="col-md-4 col-sm-6 d_none">
               </div>
               <div class="col-md-4 col-sm-6 margin_bott">
                  <div class="our_yoga">
                     <figure><img src="images/our_yoga1.png" alt="#"/></figure>
                     <h3>HATHA YOGA</h3>
                     <span>Lorem ipsum dolor sit amet</span>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 d_none">
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="our_yoga">
                     <figure><img src="images/our_yoga2.png" alt="#"/></figure>
                     <h3>HATHA YOGA</h3>
                     <span>Lorem ipsum dolor sit amet</span>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 d_none">
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="our_yoga">
                     <figure><img src="images/our_yoga3.png" alt="#"/></figure>
                     <h3>HATHA YOGA</h3>
                     <span>Lorem ipsum dolor sit amet</span>
                  </div>
               </div>
               <div class="col-md-4 offset-md-4 col-sm-6  margin_top">
                  <div class="our_yoga">
                     <figure><img src="images/our_yoga4.png" alt="#"/></figure>
                     <h3>HATHA YOGA</h3>
                     <span>Lorem ipsum dolor sit amet</span>
                     <a class="read_more yoga_btn" href="Javascript:void(0)"> Read More</a>
                  </div>
               </div>
            </div> -->
            <div class="row">
               <div class="container class">
                  <div class="card">
                     <div class="card-body">
                        <div class="card-img">
                           <img src="images/our_yoga1.png" alt="">
                        </div>
                        <div class="card-block">
                           <div class="card-block-title">
                              <h2 class="card-title">Hatha Yoga</h2>
                           </div>
                           <div class="card-block-paragraph">
                              <p class="card-paragraph">This is a gentle, slower-paced yoga practice that focuses on basic postures and breathing techniques.</p>
                           </div>
                           <div class="card-block-btn right">
                              <?php if(isset($user)) { ?>
                                 <button class="cta" type="button" id="myBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="myreg()">
                                 <span>Continue Class</span>
                                 <svg viewBox="0 0 13 10" height="10px" width="15px">
                                   <path d="M1,5 L11,5"></path>
                                   <polyline points="8 1 12 5 8 9"></polyline>
                                 </svg>
                                 </button>
                              <?php } else { ?>
                                 <button class="cta" type="button" id="myBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="myreg()">
                                 <span>Start Class</span>
                                 <svg viewBox="0 0 13 10" height="10px" width="15px">
                                   <path d="M1,5 L11,5"></path>
                                   <polyline points="8 1 12 5 8 9"></polyline>
                                 </svg>
                                 </button>
                              <?php } ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container class">
                  <div class="card">
                     <div class="card-body">
                        <div class="card-img">
                           <img src="images/our_yoga2.png" alt="">
                        </div>
                        <div class="card-block">
                           <div class="card-block-title">
                              <h2 class="card-title">Vinyasa Yoga</h2>
                           </div>
                           <div class="card-block-paragraph">
                              <p class="card-paragraph">Also known as flow yoga, this type of practice links breath with movement, and typically involves a dynamic, continuous flow of poses.</p>
                           </div>
                           <div class="card-block-btn right">
                           <?php if(isset($user)) { ?>
                                 <button class="cta" type="button" id="myBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="myreg()">
                                 <span>Continue Class</span>
                                 <svg viewBox="0 0 13 10" height="10px" width="15px">
                                   <path d="M1,5 L11,5"></path>
                                   <polyline points="8 1 12 5 8 9"></polyline>
                                 </svg>
                                 </button>
                              <?php } else { ?>
                                 <button class="cta" type="button" id="myBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="myreg()">
                                 <span>Start Class</span>
                                 <svg viewBox="0 0 13 10" height="10px" width="15px">
                                   <path d="M1,5 L11,5"></path>
                                   <polyline points="8 1 12 5 8 9"></polyline>
                                 </svg>
                                 </button>
                              <?php } ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container class">
                  <div class="card">
                     <div class="card-body">
                        <div class="card-img">
                           <img src="images/our_yoga3.png" alt="">
                        </div>
                        <div class="card-block">
                           <div class="card-block-title">
                              <h2 class="card-title">Yin Yoga</h2>
                           </div>
                           <div class="card-block-paragraph">
                              <p class="card-paragraph">This is a slower-paced practice that focuses on holding poses for several minutes at a time to release tension and promote relaxation.</p>
                           </div>
                           <div class="card-block-btn right">
                           <?php if(isset($user)) { ?>
                                 <button class="cta" type="button" id="myBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="myreg()">
                                 <span>Continue Class</span>
                                 <svg viewBox="0 0 13 10" height="10px" width="15px">
                                   <path d="M1,5 L11,5"></path>
                                   <polyline points="8 1 12 5 8 9"></polyline>
                                 </svg>
                                 </button>
                              <?php } else { ?>
                                 <button class="cta" type="button" id="myBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="myreg()">
                                 <span>Start Class</span>
                                 <svg viewBox="0 0 13 10" height="10px" width="15px">
                                   <path d="M1,5 L11,5"></path>
                                   <polyline points="8 1 12 5 8 9"></polyline>
                                 </svg>
                                 </button>
                              <?php } ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container class">
                  <div class="card">
                     <div class="card-body">
                        <div class="card-img">
                           <img src="images/our_yoga4.png" alt="">
                        </div>
                        <div class="card-block">
                           <div class="card-block-title">
                              <h2 class="card-title">Ashtaga Yoga</h2>
                           </div>
                           <div class="card-block-paragraph">
                              <p class="card-paragraph">This is a more structured, traditional form of yoga that involves a set sequence of poses and focuses on breath and movement coordination.</p>
                           </div>
                           <div class="card-block-btn right">
                           <?php if(isset($user)) { ?>
                                 <button class="cta" type="button" id="myBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="myreg()">
                                 <span>Continue Class</span>
                                 <svg viewBox="0 0 13 10" height="10px" width="15px">
                                   <path d="M1,5 L11,5"></path>
                                   <polyline points="8 1 12 5 8 9"></polyline>
                                 </svg>
                                 </button>
                              <?php } else { ?>
                                 <button class="cta" type="button" id="myBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="myreg()">
                                 <span>Start Class</span>
                                 <svg viewBox="0 0 13 10" height="10px" width="15px">
                                   <path d="M1,5 L11,5"></path>
                                   <polyline points="8 1 12 5 8 9"></polyline>
                                 </svg>
                                 </button>
                              <?php } ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- <div class="container class">
                  <div class="card">
                     <div class="card-body">
                        <div class="card-img">
                           <img src="images/our_yoga1.png" alt="">
                        </div>
                        <div class="card-block">
                           <div class="card-block-title">
                              <h2 class="card-title">Hatha Yoga</h2>
                           </div>
                           <div class="card-block-paragraph">
                              <p class="card-paragraph">This is a gentle, slower-paced yoga practice that focuses on basic postures and breathing techniques.</p>
                           </div>
                           <div class="card-block-btn right">
                              <button class="cta">
                                 <span>Start Class</span>
                                 <svg viewBox="0 0 13 10" height="10px" width="15px">
                                   <path d="M1,5 L11,5"></path>
                                   <polyline points="8 1 12 5 8 9"></polyline>
                                 </svg>
                               </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container class">
                  <div class="card">
                     <div class="card-body">
                        <div class="card-img">
                           <img src="images/our_yoga1.png" alt="">
                        </div>
                        <div class="card-block">
                           <div class="card-block-title">
                              <h2 class="card-title">Hatha Yoga</h2>
                           </div>
                           <div class="card-block-paragraph">
                              <p class="card-paragraph">This is a gentle, slower-paced yoga practice that focuses on basic postures and breathing techniques.</p>
                           </div>
                           <div class="card-block-btn right">
                              <button class="cta">
                                 <span>Start Class</span>
                                 <svg viewBox="0 0 13 10" height="10px" width="15px">
                                   <path d="M1,5 L11,5"></path>
                                   <polyline points="8 1 12 5 8 9"></polyline>
                                 </svg>
                               </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
            </div>
         </div>
      </div>
      <!-- end our classes -->
 
 <!-- Modal -->
 <div id="myModal" class="modal">
   <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboards="false" tabindex="-1" aria-labelledby="staticBackdroplabel" aria-hidden="true">>
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header">
               <span class="close" style="float:right;">&times;</span>
               <h2 class="form-h2 modal-title" style="text-align: center;margin-bottom: 10px;">Register</h2>
            </div>
            <div class="modal-body">
            <form action="register.php" method="post">
                <h2 class="form-h2" style="text-align: center;margin-bottom: 10px;">Register</h2>
                <div class="container-fluid name-tags">
                    <div class="row">
                        <div class="col">
                            <input type="text" name="Fname" class="form-control" placeholder="First name" aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="text" name="Lname" class="form-control" placeholder="Last Name" aria-label="Last name">
                        </div>
                    </div>
                </div>
                <!-- <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div> -->
                <div class="input-group mb-3">
                    <!-- <span class="input-group-text" id="basic-addon1">+254</span> -->
                    <input type="tel" name="phone" class="form-control" placeholder="0712345678" aria-label="Phone" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <!-- <span class="input-group-text" id="basic-addon1">Email</span> -->
                    <input type="email" name="email" class="form-control" placeholder="name@example.com" aria-label="name@example.com">
                    <?php if(isset($emailTaken)) { ?>
                        <p class="danger"><?php echo $emailTaken ?></p>
                    <?php } ?>
                </div>
                <!-- <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Gender</label>
                    <select name="" id="inputGroupSelect01" class="form-select">
                        <option selected>Choose Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="non-binary">Non binary</option>
                    </select>
                </div> -->
                <div class="input-group mb-3">
                    <!-- <span class="input-group-text" id="basic-addon01">Password</span> -->
                    <input type="password" name="password" id="pwd" class="form-control" placeholder="Password" aria-label="Password">
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" onchange="document.getElementById('pwd').type = this.checked ? 'text' : 'password'">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Show password</label>
                </div>
                <div class="input-group mb-3" style="margin-top: 15px;">
                    <button type="submit" value="Register" name="register" class="form-control regbtn">Register</button>
                </div>
                <div class="input-group mb-3">
                    <h6 style="color: snow;">Already a member? <a href="login.html" style="color: aqua;">Login</a></h6>
                </div>
            </form>
            </div>
         </div>
      </div>
   </div>
 </div>
 
   <!-- End modal -->
    
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <div class="newslatter">
                        <h4>Subscribe Our Newsletter</h4>
                        <form class="bottom_form">
                           <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                           <button class="sub_btn">subscribe</button>
                        </form>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class=" border_top1"></div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <h3>QUICK LINKS</h3>
                     <ul class="link_menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="about.html"> About</a></li>
                        <li><a href="classes.html">Classes</a></li>
                        <li><a href="yoga.html">Yoga</a></li>
                        <li><a href="pricing.html">pricing</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                     </ul>
                  </div>
                  <div class=" col-md-3">
                     <h3>TOP Yoga</h3>
                     <p class="many">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humou
                     </p>
                  </div>
                  <div class="col-lg-3 offset-mdlg-2     col-md-4 offset-md-1">
                     <h3>Contact </h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Location</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> demo@gmail.com</a></li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> Call : +01 1234567890</li>
                     </ul>
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        <p>© 2019 All Rights Reserved. Design by <a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/main.js"></script>
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>