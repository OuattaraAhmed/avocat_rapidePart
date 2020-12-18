

<!DOCTYPE html>
<html>

<head>
    <title>avocat</title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="JsLocalSearch.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <style>
        .bande {
            height: 3%;
            background-color: #34495e;
        }

        div.ex1 {
            background-color: black;
            width: 510px;
            height: 220px;
            overflow: scroll;
        }

        
    </style>
</head>

<body>
    <!-- ****************************************************************************************** -->

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">avocatrapide@gmail.com</a>
                <i class="icofont-phone"></i> +225 02000202
            </div>
            <div class="social-links">
                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                <a href="#" class="skype"><i class="icofont-skype"></i></a>
                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
            </div>
        </div>
    </div>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="index.html">Avocat rapide</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.php">Acceuil</a></li>
                    <!-- <li><a href="#rdv">Mes Rendez_Vous</a></li> -->

                    <li><a href="rdv_tchat.php">Prendre un rendez-vous</a></li>
                    <!-- <li><a href="#portfolio">Portfolio</a></li> -->
                    <!-- <li><a href="#pricing">Pricing</a></li> -->
                    <li><a href="#footer">Contacter nous </a></li>
                    <li><a href="tchat/index.php">Se connecter</a></li>
                    <li><a href="tchat/index.php">Admin</a></li>

            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>


        <div class="container">

<div class="row">
<div class="col-sm-9">
  <h2>PRENDRE  UN DRV</h2>
  <form action="" method="POST" id="full_client" >

              <div class="form-row">
                <div class="form-group col-md-6">
                  
                  
                  
                  <input type="text" name="nom" id="full_nom" class="form-control" placeholder="nom & prenoms">

                </div>
                <div class="form-group col-md-6">
                  
                 

                  <input type="tel" name="tel" id="full_tel" class="form-control" placeholder="numero">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  
                 
                  <input type="email" name="email" id="full_email"class="form-control" placeholder="email">
                </div>
                <div class="form-group col-md-6">
           
                  

                  <input type="text" name="ville" id="full_ville" class="form-control" placeholder="ville">
                </div>




              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  
                 
                  <input type="text" name="raison" id="full_raison" class="form-control" placeholder="les raisons">
                </div>
                <!-- <div class="form-group col-md-6">
                  <label for="inputPassword4">Password</label>
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div> -->
              </div>


              
              <div class="form-row">
                <div class="form-group col-md-6">
                   
                <SELECT name="pays" size="1" class="form-control">
            <OPTION>Choisir une option          
            <OPTION>Ivory Coast
            <OPTION>Ghana
            <OPTION>togo
            <OPTION>Benin  
             <OPTION>afrique du sud
            </SELECT>

                </div>
                <div class="form-group col-md-6">
          
                <SELECT name="type_rdv" size="1" class="form-control">
            <OPTION>Choisir une option
            <OPTION>en ligne (10.000Fr)
            <OPTION>presentiel (50.000)
           </SELECT>


                </div>
              </div>



              <div class="form-group">
              
               
                <textarea name="description" id="full_description" class="form-control" placeholder="Description de votre préoccupation"></textarea>
              </div>
             
              
         
              <button type="submit" class=" btn btn-primary" id="mysubmit" name="send" value="send"> Prendre un RDV </button>
            </form>
            
            <div class="col-lg-2 col-md-4 col-6">
            <img src="img/moov.jpg" class="img-fluid" alt="">
          </div>



            </div>
</div>
          <!-- <center>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </center> -->

<div class="col-sm-3"></div>
</div>


    </section><!-- End Hero -->

    <!-- ======= Footer ======= -->
    <section id="footer">
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-6">
                            <div class="footer-info">
                                <h3>Avocat Rapide</h3>
                                <p>
                                    cocody-abidjan <br>
                                    , Cote D'Ivoire<br><br>
                                    <strong>Phone:</strong> +225 02000202<br>
                                    <strong>Email:</strong> avocatrapide@gmail.com<br>
                                </p>
                                <div class="social-links mt-3">
                                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Liens Rapide</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Acceuil</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Se connecter</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="rdv_tchat.php">Prendre un Rendez_Vous</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Nous contacter</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Nos Services</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Divorce</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Mariage</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Suivie de votre demande</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Avocat Spécialisé</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Domaine</a></li>
                            </ul>
                        </div>



                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Avocat Rapide</span></strong>. Tout droit reservé
                </div>
                <div class="credits">

                    Fait par <a href="https://bootstrapmade.com/">Avocat Rapide</a>
                </div>
            </div>
        </footer><!-- fin du footer -->
    </section>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/js/main.js"></script>
    <!-- ***************************** -->
    <script src="app.js"></script>
    <?php include("inc/footer.php") ?>
<script type="text/javascript" src="js/auth.js"></script>


</body>

</html>