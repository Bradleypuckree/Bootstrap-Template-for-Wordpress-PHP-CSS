<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bootstrap Template for Wordpress</title>

    <!-- MAIN STYLE -->
<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
<link href="<?php echo get_bloginfo('template_directory'); ?>/css/unicons.css" rel="stylesheet">
<link href="<?php echo get_bloginfo('template_directory'); ?>/css/owl.carousel.min.css" rel="stylesheet">
<link href="<?php echo get_bloginfo('template_directory'); ?>/css/owl.theme.default.min.css" rel="stylesheet">
<link href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
      <?php wp_head();?>
  </head>
  
      <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.html"><i class='uil uil-user'></i> Marvel</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
<?php
wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu',  
	 'menu_class'    => 'navbar',
	) ); 
?>
                </ul>

            </div>
        </div>
    </nav>

	
	    <!-- ABOUT -->
    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                    <div class="about-text">
                        <small class="small-text">Welcome to <span class="mobile-block">my portfolio website!</span></small>
                        <h1 class="animated animated-text">
                            <span class="mr-2">Hey folks, I'm</span>
                                <div class="animated-info">
                                    <span class="animated-item">Marvel Sann</span>
                                    <span class="animated-item">Web Designer</span>
                                    <span class="animated-item">UI Specialist</span>
                                </div>
                        </h1>

                        <p>Building a successful product is a challenge. I am highly energetic in user experience design, interfaces and web development.</p>
                        
                        <div class="custom-btn-group mt-4">
                          <a href="#" class="btn mr-lg-2 custom-btn"><i class='uil uil-file-alt'></i> Download Resume</a>
                          <a href="#contact" class="btn custom-btn custom-btn-bg custom-btn-link">Get a free quote</a>
                        </div>
                    </div>
                </div>

     

            </div>
        </div>
    </section>