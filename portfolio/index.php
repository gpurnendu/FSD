<?php include('./include/db.php'); 
$query = "SELECT * FROM basic_setup,personal_setup,aboutus_setup";
$runquery = mysqli_query($db,$query);
if(!$db){
    header("location:index-2.html");
}
$data = mysqli_fetch_array($runquery);
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?=$data['title']?></title>
    <meta content="<?=$data['description']?>" name="description">
    <meta content="<?=$data['keyword']?>" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/<?=$data['icon']?>" rel="icon">
    <link href="assets/img/<?=$data['icon']?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


    <style>
        #hero {
            background: url(assets/img/<?=$data['homewallpaper']?>);
        }
        img {
  border-radius: 50%;
}
    </style>
</head>

<body>
  
    <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    <div class="bs-example">
    <nav class="navbar  navbar-expand-md navbar-light bg-light">
        <a href="#" class="navbar-brand">
            <img src="assets/img/<?=$data['profilepic']?>" height="60" alt="Logo";  >
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ml-auto" >
                <a href="#" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">About</a>
                <a href="#" class="nav-item nav-link">Skills</a>
                <a href="contact.html" class="nav-item nav-link">Resume</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>

                <a href="chill.html" class="nav-item nav-link animated infinite heartBeat delay-2s" 
                style=" font-size: larger;color: rgb(252, 4, 78);">Chilling Room</a>
            </div>
            
        </div>
    </nav>
    </div>
    <div style="background-image: linear-gradient(#f1f5a6, #f3b769);">
      <section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto" >
            <h1><?=$data['name']?></h1>
            <h1 class="fw-dark">Hi, I'm a <span class="typed" data-typed-items="<?php
                                           $prof = explode(",",$data['professions']);
                                           foreach($prof as $value){echo $value.",";}?>"></span></h1>
            

            </p>
            <br>
            <br>
            <br>
            <br>
            <br>
          </div>
        </div>
      </section>
    </div>    

<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>


        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
            <button class="button button2" onclick="document.getElementById('about').style.color = 'blue'"></button>
            <button class="button button3" onclick="document.getElementById('about').style.color = 'red'"></button>
            <button class="button button4" onclick="document.getElementById('about').style.color = 'gray'"></button>

                <div class="section-title">
                    <h2>About</h2>
                    <p><?=$data['shortdesc']?></p>
                </div>
                  
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="assets/img/<?=$data['profilepic']?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3><?=$data['heading']?></h3>
                        <p class="font-italic">
                            <?=$data['subheading']?>
                        </p>
                        <div>
                            <ul class="row">
                                <li class="col-lg-6"><i class="icofont-rounded-right"></i> <strong>Birthday :</strong> <?=$data['dob']?></li>
                                <li class="col-lg-6"><i class="icofont-rounded-right"></i> <strong>Email :</strong> <?=$data['emailid']?></li>
                                <li class="col-lg-5"><i class="icofont-rounded-right"></i> <strong>Mobile :</strong> <?=$data['mobile']?></li>
                               
                                
                                


                            </ul>
                        </div>
                        <p>
                            <?=$data['longdesc']?>
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Skills</h2>
                </div>

                <div class="row skills-content">

                    <div class="row col-lg-12" data-aos="fade-up">
<?php
                    $query3 = "SELECT * FROM skills";
$runquery3= mysqli_query($db,$query3);
while($data3=mysqli_fetch_array($runquery3)){
    ?>
                        <div class="progress col-lg-6">
                            <span class="skill"><?=$data3['skill']?> <i class="val"><?=$data3['score']?>%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="<?=$data3['score']?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                                <?php
}
                    ?>
                        

                        
                    </div>

                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Resume</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">Education</h3>
                        <?php
                    $query4 = "SELECT * FROM resume WHERE category='e'";
$runquery4= mysqli_query($db,$query4);
while($data4=mysqli_fetch_array($runquery4)){
    ?>
                    <div class="resume-item">
                            <h4><?=$data4['title']?></h4>
                            <h5><?=$data4['year']?></h5>
                            <p><em><?=$data4['ogname']?></em></p>
                            <p><?=$data4['workdesc']?></p>
                        </div>
                                <?php
}
                    ?>
                        
                        
                        
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Professional Experience</h3>
                        
                        <?php
                    $query4 = "SELECT * FROM resume WHERE category='pe'";
$runquery4= mysqli_query($db,$query4);
while($data4=mysqli_fetch_array($runquery4)){
    ?>
                    <div class="resume-item">
                            <h4><?=$data4['title']?></h4>
                            <h5><?=$data4['year']?></h5>
                            <p><em><?=$data4['ogname']?></em></p>
                            <p><?=$data4['workdesc']?></p>
                        </div>
                                <?php
}
                    ?>
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Project Demonstration</h2>
                </div>
                <div class="card mx-auto" style="width: 50rem;">
      <video class="card-img-top" width="600" height="480" controls>
        <source src="media/movie.mp4" type="video/mp4">                       
      </video>
      <div class="card-body">
        <h5 class="card-title">Design Archives</h5>
        <a href="#" class="btn btn-primary">Code</a>
      </div>
    </div>
                

            </div>
        </section><!-- End Skills Section -->

  <section>
 
</section>
        
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" >

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row" data-aos="fade-in" >

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info" style="background-image: linear-gradient(#f1f5a6, #f3b769);">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p><?=$data['location']?></p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p><a href="mailto:<?=$data['emailid']?>"><?=$data['emailid']?></a></p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p><?=$data['mobile']?></p>
                            </div>
                            <div class="email">
                            <h4><button type="button" onclick="myFunction()" class="btn btn-primary btn-sm">Last edited</button></h4>
                                <p id="demo1"></p>
                                <script>
                                    document.getElementById("demo1").innerHTML = document.lastModified;
                                </script>   
                            </div>
                            <div class="phone">
                                <h4>Device Size</h4>
                                <p><script>document.write("Screen width: " + screen.width); document.write("<br>Screen width: " + screen.width);</script></p>
                            </div>
                        </div>

                    </div>

<script>
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" >
                        <form action="include/message.php" method="post" role="form" class="php-email-form" style="background-image: linear-gradient(#f1f5a6, #f3b769);">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label for="name">Country</label>
                                <input type="text" onkeyup="showHint(this.value)" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <p>Suggestions: <span id="txtHint"></span></p>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" id="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="bg-success error-message"></div>
                                <div class="sent-message"></div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                        
                    </div>
<!--
                    
-->

                </div>

            </div>
        </section><!-- End Contact Section -->




        

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script>
        if (window.self == window.top) {
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-55234356-4', 'auto');
            ga('send', 'pageview');
        }

    </script>
</body>



</html>
