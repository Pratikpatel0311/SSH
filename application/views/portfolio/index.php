<!DOCTYPE html>
  <html>
    <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <title>Portfolio</title>

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
      <!-- BEGAIN PRELOADER -->         
      <div id="preloader">        
        <div class="progress">
          <div class="indeterminate"></div>
        </div>        
      </div>
      <!-- END PRELOADER -->
      <header id="header" role="banner">
        <div class="navbar-fixed">
          <nav>
            <div class="container">
              <div class="nav-wrapper">

                <ul class="right hide-on-med-and-down custom-nav menu-scroll">
                  <li><a href="#about">About Me</a></li>
                  <li><a href="#resume">Resume</a></li>
                  <li><a href="#portfolio">Portfolio</a></li>
                  <li><a href="#testimonial">Testimonial</a></li>
                  <li><a href="#blog">Blog</a></li>
                  <li><a href="#footer">Contact</a></li>
                </ul>
                <!-- For Mobile View -->
                <ul id="slide-out" class="side-nav menu-scroll">
                  <li><a href="#about">About Me</a></li>
                  <li><a href="#resume">Resume</a></li>
                  <li><a href="#portfolio">Portfolio</a></li>
                  <li><a href="#testimonial">Testimonial</a></li>
                  <li><a href="#blog">Blog</a></li>
                  <li><a href="#footer">Contact</a></li>
                </ul>
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
              </div>
            </div>
          </nav>
        </div>  
      </header>
      <div class="main-wrapper">
        <main role="main">
          <!-- START HOME SECTION -->
          <section id="home">
            <div class="overlay-section">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <div class="home-inner">
                      <?php 
                            foreach($res_id->result() as $row){
                            ?>
                      <h1 class="home-title">HI! I'm <span><?php echo $row->name; ?></span></h1>
                      <p>I'm a <?php echo $row->country; }?> based <b>Full Stack Developer </b> creating awesome and effective visual identities for companies of all sizes around the globe</p>
                      <a class="hire-me-btn btn waves-effect waves-light btn-large" href="#footer">Hire Me <i class="mdi-content-send left"></i>                     
                      </a>
                      <!-- Call to About Button -->
                      <button class="btn btn-floating waves-effect waves-light btn-large white call-to-about"><i class="material-icons">play_for_work</i></button>                  
                    </div>
                  </div>  
                </div>
              </div>
            </div>
          </section>
          
          <!-- START ABOUT SECTION -->
          <section id="about">
            <div class="container">
              <div class="row">
                <div class="col s12">
                  <div class="about-inner">
                    <div class="row">
                      <div class="col s12 m4 l3">
                        <?php 
                            foreach($res_id->result() as $row){
                            ?>
                        <div class="about-inner-left">
                          <img class="profile-img" src="<?php echo base_url(); ?>assests/img/<?php echo $row->profile_img; ?>" alt="Profile Image">
                        </div>
                      </div>
                      <div class="col s12 m8 l9">
                        <div class="about-inner-right">
                          <h3>About Me</h3>
                          <p>I'm a <?php echo $row->country; ?> based <b>Full Stack Developer</b> creating awesome and effective visual identities for companies of all sizes around the globe.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here</p>
                          
                            

                          <div class="personal-information col s12 m12 l6">
                            <h3>Personal Information</h3>
                            <ul>
                              <li><span>Name : <?php echo $row->name; ?> </span> </li>
                              <li><span>Age : <?php echo $row->age; ?> </span></li>
                              <li><span>Phone : +91 <?php echo $row->phone; ?> </span></li>
                              <li><span>Email : <?php echo $row->email; ?> </span></li>
                              <li><span>Address : <?php echo $row->city; ?>,<?php echo $row->state; ?>,<?php echo $row->country; ?> </span></li>
                            </ul>
                          </div><?php }?>
                          <div class="resume-download col s12 m12 l6">
                            <a href="#" class="waves-effect waves-light btn-large resume-btn"><i class="mdi-content-archive left"></i> Download Resume</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Start Resume -->
          <section id="resume">
            <!-- Start Skill -->
            <section id="skill">
              <div class="container">
                <div class="skill-inner">
                  <h2 class="title">Skills</h2>

                  <!-- Start skills progress bar -->
                  <?php foreach($s_id->result() as $row){ ?>
                  <div class="skill-progress-bar">
                    <span><?php echo $row->skill_name; ?></span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-100 color-amethyst" data-pro-bar-percent="<?php echo $row->proficiency; ?>"></div>
                    </div>
                  </div><?php } ?>
                </div>
              </div>
            </section>
            <!-- Start Experience -->
            <section id="experience">
              <div class="container">
                <div class="experience-inner">
                  <h2 class="title">Experience</h2>
                  <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                  <div id="owl-carousel" class="experience-slider row">
                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">January 2013 - Present</h2>
                          <img class="activator" src="<?php echo base_url(); ?>assests/img/office.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">UX/UI Designer<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">Windows Phone</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">UX/UI Designer<i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle">Windows Phone</a>
                          <p>Here is some more information about this product that is only revealed once clicked on.
                          The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                        </div>
                      </div>
                    </div>
                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">January 2013 - Present</h2>
                          <img class="activator" src="<?php echo base_url(); ?>assests/img/office.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">UX/UI Designer<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">Android Phone</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">UX/UI Designer<i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle">Android Phone</a>
                          <p>Here is some more information about this product that is only revealed once clicked on.
                          The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                        </div>
                      </div>
                    </div>

                    <!-- Start Single Experience -->

                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">January 2013 - Present</h2>
                          <img class="activator" src="<?php echo base_url(); ?>assests/img/office.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">UX/UI Designer<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">Windows Phone</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">UX/UI Designer<i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle">Windows Phone</a>
                          <p>Here is some more information about this product that is only revealed once clicked on.
                          The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                        </div>
                      </div>
                    </div>
                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">January 2013 - Present</h2>
                          <img class="activator" src="<?php echo base_url(); ?>assests/img/office.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">UX/UI Designer<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">Windows Phone</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">UX/UI Designer<i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle">Windows Phone</a>
                          <p>Here is some more information about this product that is only revealed once clicked on.
                          The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                        </div>
                      </div>
                    </div>
                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">January 2013 - Present</h2>
                          <img class="activator" src="<?php echo base_url(); ?>assests/img/office.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">UX/UI Designer<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">Windows Phone</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">UX/UI Designer<i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle">Windows Phone</a>
                          <p>Here is some more information about this product that is only revealed once clicked on.
                          The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                        </div>
                      </div>
                    </div>
                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">January 2013 - Present</h2>
                          <img class="activator" src="<?php echo base_url(); ?>assests/img/office.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">UX/UI Designer<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">Android Phone</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">UX/UI Designer<i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle">Android Phone</a>
                          <p>Here is some more information about this product that is only revealed once clicked on.
                          The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                        </div>
                      </div>
                    </div>
                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">January 2013 - Present</h2>
                          <img class="activator" src="<?php echo base_url(); ?>assests/img/office.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">UX/UI Designer<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">Windows Phone</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">UX/UI Designer<i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle">Windows Phone</a>
                          <p>Here is some more information about this product that is only revealed once clicked on.
                          The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                        </div>
                      </div>
                    </div>
                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">January 2013 - Present</h2>
                          <img class="activator" src="<?php echo base_url(); ?>assests/img/office.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">UX/UI Designer<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">Windows Phone</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">UX/UI Designer<i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle">Windows Phone</a>
                          <p>Here is some more information about this product that is only revealed once clicked on.
                          The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                        </div>
                      </div>
                    </div>
                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">January 2013 - Present</h2>
                          <img class="activator" src="<?php echo base_url(); ?>assests/img/office.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">UX/UI Designer<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">Windows Phone</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">UX/UI Designer<i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle">Windows Phone</a>
                          <p>Here is some more information about this product that is only revealed once clicked on.
                          The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- owl navigation -->
                  <div class="customNavigation">
                    <a class="btn prev btn-floating waves-effect waves-light btn-large white"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                    <a class="btn next btn-floating waves-effect waves-light btn-large white"><i class="mdi-navigation-chevron-right brand-text"></i></a>                    
                  </div>
                </div>
              </div>
            </section>
            <!-- Start Education -->
            <section id="edcuation">
              <div class="container">
                <div class="education-inner">
                  <h2 class="title">Education</h2>
                  <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                  <div id="owl-carousel1" class="experience-slider row">
                    <!-- Start Single Experience -->
                    <?php foreach($e_id->result() as $row){ ?>
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title"><?php echo $row->duration; ?></h2>
                          <img class="activator" src="<?php echo base_url(); ?>assests/img/graduate-cap.jpg">
                        </div>
                        
                        <div class="card-content">
                          <span class="card-title activator reveal-title"><?php echo $row->education_level; ?><i class="material-icons right">more_vert</i></span>
                          <p><a href="#"><?php echo $row->university; ?></a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title"><?php echo $row->university; ?><i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle">California University</a>
                          <p>Here is some more information about this product that is only revealed once clicked on.
                          The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                        </div>
                      </div>
                    </div><?php } ?>
                    
                    
                  </div>
                  <!-- owl navigation -->
                  <div class="customNavigation">
                    <a class="btn prev1 btn-floating waves-effect waves-light btn-large white"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                    <a class="btn next1 btn-floating waves-effect waves-light btn-large white"><i class="mdi-navigation-chevron-right brand-text"></i></a>                    
                  </div>
                </div>
              </div>
            </section>
          </section>
          <!-- Start Portfolio -->
          <section id="portfolio">
            <div class="portfolio-top">
              <div class="container">
                <div class="portfolio-top-inner">
                   <h2 class="title">Portfolio</h2>
                   <div class="controls">  
                    
                </div>
              </div>
            </div>
            </div>
            <div class="portfolio-bottom">
              <div class="container">
                <div class="portfolio-bottom-inner">
                  <div id="portfolio-list">                    
                  


                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Start Facts -->
          <section id="facts">
            <div class="facts-overlay">
              <div class="container">
              <div class="row">
                <div class="col s12">
                  <div class="facts-inner">
                    <div class="row">
                      <div class="col s12 m4 l4">
                        <div class="single-facts waves-effect waves-block waves-light">
                          <i class="material-icons">work</i>
                          <span class="counter"><?php if(isset($p_count)){echo $p_count;} ?></span>
                          <span class="counter-text">Projects Under Taken</span>
                        </div>
                      </div>
                      <div class="col s12 m4 l4">
                        <div class="single-facts waves-effect waves-block waves-light">
                          <i class="material-icons">supervisor_account</i>
                          <span class="counter"></span>
                          <span class="counter-text">Happy Clients</span>
                        </div>
                      </div>
                      <div class="col s12 m4 l4">
                        <div class="single-facts waves-effect waves-block waves-light">
                          <i class="material-icons">redeem</i>
                          <span class="counter"></span>
                          <span class="counter-text">Award Won</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </section>
          <!-- Testimonial -->
          <section id="testimonial">
            <div class="container">
              <div class="row">
               <div class="col s12">
                 <div class="testimonial-inner">
                   <h2 class="title">Testimonial</h2>
                   <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                    <!-- Start Testimonial Slider -->
                    <div class="testimonial-slider-area">
                      <div id="owl-carousel2" class="testimonial-slider row">
                        <div class="col s12">
                          <div class="single-testimonial">
                            <div class="testimonial-img">
                              <img src="<?php echo base_url(); ?>assests/img/profile-img.jpg" alt="img">
                            </div>
                            <div class="testimonial-content">
                              <h3>Mike Jones</h3>
                              <span>CEO, Google Inc.</span>
                              <p>"The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout"</p>
                            </div>
                          </div>
                        </div>
                        <div class="col s12">
                          <div class="single-testimonial">
                            <div class="testimonial-img">
                              <img src="<?php echo base_url(); ?>assests/img/profile-img1.jpg" alt="img">
                            </div>
                            <div class="testimonial-content">
                              <h3>Mike Jones</h3>
                              <span>CEO, Google Inc.</span>
                              <p>"The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout"</p>
                            </div>
                          </div>
                        </div> 
                        <div class="col s12">
                          <div class="single-testimonial">
                            <div class="testimonial-img">
                              <img src="<?php echo base_url(); ?>assests/img/profile-img.jpg" alt="img">
                            </div>
                            <div class="testimonial-content">
                              <h3>Mike Jones</h3>
                              <span>CEO, Google Inc.</span>
                              <p>"The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout"</p>
                            </div>
                          </div>
                        </div>
                        <div class="col s12">
                          <div class="single-testimonial">
                            <div class="testimonial-img">
                              <img src="<?php echo base_url(); ?>assests/img/profile-img1.jpg" alt="img">
                            </div>
                            <div class="testimonial-content">
                              <h3>Mike Jones</h3>
                              <span>CEO, Google Inc.</span>
                              <p>"The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout"</p>
                            </div>
                          </div>
                        </div>                                       
                      </div>
                      <div class="customNavigation">
                        <a class="btn prev2 btn-floating waves-effect waves-light btn-large white"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                        <a class="btn next2 btn-floating waves-effect waves-light btn-large white"><i class="mdi-navigation-chevron-right brand-text"></i></a>
                      </div>                  
                    </div>
                 </div>
               </div>
               </div> 
            </div>
          </section>
          <!-- Start Blog -->
          <section id="blog">
            <div class="container">
              <div class="row">
               <div class="col s12">
                 <div class="blog-inner">
                   <h2 class="title">Blog</h2>
                   <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>

                  <!-- Start Blog area -->
                  <div class="blog-area">
                    <div class="row">
                      <!-- Start single blog post -->
                      <div class="col s12 m4 l4">
                        <div class="blog-post">
                          <div class="card">
                            <div class="card-image">
                              <img src="<?php echo base_url(); ?>assests/img/blog1.jpg">     
                            </div>
                            <div class="card-content blog-post-content">
                              <h2><a href="blog-single.php">Awesome Post Title</a></h2>
                              <div class="meta-media">
                                <div class="single-meta">
                                  Post By <a href="#">Admin</a>
                                </div>
                                <div class="single-meta">
                                  Category : <a href="#">Web/Design</a>
                                </div>
                              </div>
                              <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                            </div>
                            <div class="card-action">
                              <a class="post-comment" href="#"><i class="material-icons">comment</i><span>15</span></a>
                              <a class="readmore-btn" href="blog-single.php">Read More</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Start single blog post -->
                      <div class="col s12 m4 l4">
                        <div class="blog-post">
                          <div class="card">
                            <div class="card-image">
                              <img src="<?php echo base_url(); ?>assests/img/blog2.jpg">     
                            </div>
                            <div class="card-content blog-post-content">
                              <h2><a href="blog-single.php">Awesome Post Title</a></h2>
                              <div class="meta-media">
                                <div class="single-meta">
                                  Post By <a href="#">Admin</a>
                                </div>
                                <div class="single-meta">
                                  Category : <a href="#">Web/Design</a>
                                </div>
                              </div>
                              <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                            </div>
                            <div class="card-action">
                              <a class="post-comment" href="#"><i class="material-icons">comment</i><span>10</span></a>
                              <a class="readmore-btn" href="blog-single.php">Read More</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Start single blog post -->
                      <div class="col s12 m4 l4">
                        <div class="blog-post">
                          <div class="card">
                            <div class="card-image">
                              <img src="<?php echo base_url(); ?>assests/img/blog3.jpg">     
                            </div>
                            <div class="card-content blog-post-content">
                              <h2><a href="blog-single.php">Awesome Post Title</a></h2>
                              <div class="meta-media">
                                <div class="single-meta">
                                  Post By <a href="#">Admin</a>
                                </div>
                                <div class="single-meta">
                                  Category : <a href="#">Web/Design</a>
                                </div>
                              </div>
                              <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                            </div>
                            <div class="card-action">
                              <a class="post-comment" href="#"><i class="material-icons">comment</i><span>15</span></a>
                              <a class="readmore-btn" href="blog-single.php">Read More</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- All Post Button -->
                    
                  </div>                    
                 </div>
                </div>
              </div> 
            </div>
          </section>
          <!-- Start Footer -->
          <footer id="footer" role="contentinfo">
            <!-- Start Footer Top -->
            <div class="footer-top">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <div class="footer-top-inner">
                      <h2 class="title">Contact</h2>
                      <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                      <div class="contact">
                        <div class="row">
                          <div class="col s12 m6 l6">
                            <div class="contact-form">
                              <form action="<?php echo base_url(''); ?>portfolio/contact" method="post">
                                <div class="input-field">
                                  <input type="text" class="input-box" name="contactName" id="contact-name" required="">
                                  <label class="input-label" for="contact-name">Name</label>
                                </div>
                                <div class="input-field">
                                  <input type="email" class="input-box" name="contactEmail" id="email" required="">
                                  <label class="input-label" for="email">Email</label>
                                </div>
                                <div class="input-field">
                                  <input type="text" class="input-box" name="contactSubject" id="subject" required="">
                                  <label class="input-label" for="subject">Subject</label>
                                </div>
                                <div class="input-field textarea-input">
                                  <textarea class="materialize-textarea" name="contactMessage" id="textarea1"></textarea>
                                  <label class="input-label" for="textarea1">Message</label>
                                </div>
                                <button class="left waves-effect btn-flat brand-text submit-btn" type="submit">send message</button>
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
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <div class="footer-inner">
                      <!-- Bottom to Up Btn -->
                      <button class="btn-floating btn-large up-btn"><i class="mdi-navigation-expand-less"></i></button>
                     
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
  </html>