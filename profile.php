<?php 

   session_start();

    if(isset($_SESSION['userId'])) {
        require('./config/db.php');

        $userId = $_SESSION['userId'];

        if(isset($_POST['edit'])) {
            $fname = filter_var($_POST["Fname"], FILTER_SANITIZE_STRING);
            $lname = filter_var($_POST["Lname"], FILTER_SANITIZE_STRING);
            $phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
            $email = filter_var($_POST["Email"], FILTER_SANITIZE_EMAIL);
            $stmt = $pdo -> prepare('UPDATE customer SET fname=?, lname=?, phone=?, email=? WHERE id=?');
            $stmt -> execute([$fname, $lname, $phone, $email, $userId]);
        }

        $stmt = $pdo -> prepare('SELECT * from customer WHERE id = ?');
        $stmt->execute([$userId]);

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
      <title>Profile | Zenflow Yoga</title>
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
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout inner_page">
     
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
                              <!-- <a href="index.html"><img src="images/zen-log.png" alt="#" /></a> -->
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
                              <li class="nav-item">
                                 <a class="nav-link" href="classes.html">classes</a>
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
                              <li class="nav-item active">
                                <a href="logout.php" class="nav-link logout">Logout</a>
                            </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         </header>
      <div class="container">
         <div class="card" style="margin-top: 70px;margin-bottom: 70px;">
            <div class="card-header">
               <h2 class="card-title text-center">Update your details</h2>
            </div>
            <div class="card-body">
               <form action="" method="post">
                  <div class="row">
                     <div class="mb-3 form-group col">
                        <label for="Fname" class="form-label">First name</label>
                        <input type="text" class="form-control" name="fname" required value="<?php echo $user->fname ?>">
                     </div>
                     <div class="mb-3 form-group col">
                        <label for="Lname" class="form-label">Last name</label>
                        <input type="text" class="form-control" name="lname" required value="<?php echo $user->lname ?>">
                     </div>
                  </div>
                  <div class="mb-3 form-group">
                     <label for="Phone" class="form-label">Phone number</label>
                     <input type="text" class="form-control" name="phone" required value="<?php echo $user->phone ?>">
                  </div>
                  <div class="mb-3 form-group">
                     <label for="email" class="form-label">Email</label>
                     <input type="text" class="form-control" name="email" required value="<?php echo $user->email ?>">
                  </div>
                  <div class="input-group mb-3" style="margin-top: 15px;">
                    <button type="submit" value="Register" name="edit" class="form-control regbtn">Update details</button>
                 </div>
                  <!-- <div class="mb-3 form-group">
                     <label for="" class="form-label">
                     <input type="text" class="form-control">
                  </div> -->
               </form>
            </div>
         </div>
      </div>
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
                    <h3>ZenFlow Yoga Studio</h3>
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