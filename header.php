<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
<meat charset ="<?php bloginfo("charset"); ?>"/>
<title> <?php bloginfo("name"); ?></title>
<link  rel="pingpack" href="<?php bloginfo("pingback_url"); ?>"/>
<meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0
minimum-scale=1.0, maximum-scale=1.0,
                      user-scalable=no">
<meta name="description" content="Junior Wordpress Developer & Technical SEO ">
<meta name='copyright' content='Safaa Abdou =WP Developer>
<meta name='robots' content='index,follow'>


<?php wp_head(); ?>


<script src="https://kit.fontawesome.com/7128208d2e.js" crossorigin="anonymous"></script>

</head>

<body>



<!--========== HEADER ==========-->
            <!-- Navbar -->
            
<nav class="navbar sticky-top navbar-expand-lg navbar-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo site_url();?>">Safaa Abdou</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
    <?php display_nav_menu();?>

    </div>
</div>
  
  
</nav>
<!--========== END HEADER ==========-->
