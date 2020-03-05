<head>  
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <title>Profile Management</title>

       <!-- CSS  -->      
      <link href="<?php echo base_url(); ?>assests/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <!-- Font Awesome -->
      <link href="<?php echo base_url(); ?>assests/css/font-awesome.css" rel="stylesheet">
      <!-- Skill Progress Bar -->
      <link href="<?php echo base_url(); ?>assests/css/pro-bars.css" rel="stylesheet" type="text/css" media="all" />
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assests/css/owl.carousel.css">
      <!-- Default Theme CSS File-->
      <link id="switcher" href="<?php echo base_url(); ?>assests/css/themes/blue-theme.css" type="text/css" rel="stylesheet" media="screen,projection"/>     
      <!-- Main css File -->
      <link href="<?php echo base_url(); ?>assests/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

      <!-- Font -->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>

  <body>

      <div class="main-wrapper">
        <main role="main">
          <!-- Start Footer -->
            <footer id="footer" role="contentinfo">
            <!-- Start Footer Top -->
            <div class="footer-top">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <div class="footer-top-inner">
                      <h2 class="title">Log In</h2>
                      <div class="contact">
                        <div class="row">
                          <div class="col s12 m6 l6">
                            <div class="contact-form">
                              <form action="<?php echo base_url(''); ?>portfolio/login" method="post">
                                <div class="input-field">
                                  <p>User Name:<input type="text" class="input-box" name="username" id="contact-name">
                                  <label class="input-label" for="contact-name"></label>
                                </div>
                                <div class="input-field">
                                  Password:<input type="password" class="input-box" name="password" id="subject">
                                  <label class="input-label" for="subject"></label>
                                </div>
                                <div><button class="left waves-effect btn-flat brand-text submit-btn" type="submit">Log In</button></div>
                              </form>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </footer>
        </main>
      </div>
      <!-- jQuery Library -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <!-- Materialize js -->
      <script type="text/javascript" src="<?php echo base_url(); ?>assests/js/materialize.min.js"></script>
      <!-- Skill Progress Bar -->
      <script src="<?php echo base_url(); ?>assests/js/appear.min.js" type="text/javascript"></script>
      <script src="<?php echo base_url(); ?>assests/js/pro-bars.min.js" type="text/javascript"></script>
      <!-- Owl slider -->      
      <script src="<?php echo base_url(); ?>assests/js/owl.carousel.min.js"></script>    
      <!-- Mixit slider  -->
      <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
      <!-- counter -->
      <script src="<?php echo base_url(); ?>assests/js/waypoints.min.js"></script>
      <script src="<?php echo base_url(); ?>assests/js/jquery.counterup.min.js"></script>     

      <!-- Custom Js -->
      <script src="<?php echo base_url(); ?>assests/js/custom.js"></script>      
    </body>