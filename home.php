<?php get_header(); ?>

<!-- start head section -->

<div class="head" >
<video  autoplay loop muted>
  <source src="<?php bloginfo('template_directory'); ?>/assets/videos/home-video.mp4" type="video/mp4">
  <source src="<?php bloginfo('template_directory'); ?>/assets/videos/home-video.mp4" type="video/ogg">
  
</video>

<div class="content">
        <h1 >Safaa <br/> Abdou</h1>
        <p >Junior WordPress Developer &amp; Technical SEO Specialist</p>
        <div class="callBtn">
        <button class="hire-btn" onclick="scrollToSec('hire-me')">Hire Me </button>
        <button class="work-btn" onclick="scrollToSec('work')">Portfolio </button>
        </div> 
        </div>
</div>

<!-- end head section -->

<!-- start about section -->
<div class="about" id="about">
<div class="text-left">
    <h2>About</h2>
    <span>Who am I and my objective</span>

</div>
<div class="text-right">
    <p>Creative WordPress Developer with a strong history in Website Optimization (SEO). Experienced in all aspects
       of WordPress website creation, including design & build custom themes, plug-ins and implementation. <br>I have a passion to start a new challenge .</p>
   <!-- progress bar  -->
   <div class="progress-div">
   <span class="progress-label">CSS3</span>
   <div class="progress">
     <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">98%</div>
    </div>
   </div>
   <div class="progress-div">
   <span class="progress-label">HTML5</span>
   <div class="progress">
     <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%" aria-valuenow="95"  aria-valuemin="0" aria-valuemax="100">95%</div>
    </div>
   </div>
   <div class="progress-div">
   <span class="progress-label">PHP</span>
   <div class="progress">
     <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"  style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
    </div>
   </div>
   <div class="progress-div">
   <span class="progress-label">Java Script</span>
   <div class="progress">
     <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 70%"  aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
    </div>
   </div>
   <div class="progress-div">
   <span class="progress-label">Bootstrap</span>
   <div class="progress">
     <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%"  aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
    </div>
   </div>

</div>

</div>

<!-- end about section -->

<!-- start experience section -->
<div class="experience" id="experience">
<div class="ex-left">
    <h2>Experience</h2>
    <span>My Last Experience & Achievments</span>

</div>
<div class="ex-right">
   <div class="ex-div">
   <i class="fa-solid fa-briefcase"></i>
   <div>
   <h5><span>SEO Specialist /</span> Gallery Seven </h5>
   <p>Manage websites for our clients.<br> Create SEO Strategies to improve their ranking.<br>Improve technical SEO  performance .</p>

   </div>
   </div>

   <div class="ex-div active">
   <i class="fa-solid fa-briefcase"></i>
   <div>
    <h5><span>SEO Specialist /</span> Fatora.io</h5>
   <p>Increase SEO ranking in the target markets.<br>Help the site to rank for more than (1.5k) keywords "organic" on the first pages.<br>Improve site performance to 95%.</p>
</div>
   </div>
   <div class="ex-div">
   <i class="fa-solid fa-briefcase"></i>
   <div>
   <h5><span>Freelancer WP Developer /</span> Mostaql</h5>
   <p>Convert Designs to responsive websites & Build custome themes from scratch.<br>Connect Websites with Marketing Tools.</p>

   </div>
   </div>
</div>
</div>

<!-- end experience section -->


<!-- start work section -->

<div class="work" id="work">
<div class="container">
    <h2>Work</h2>
    <span>Samples of my work</span>

</div>
<div class="work-right">

 <!--start ptect-->
   <div class="work-row" style="background: url(<?php bloginfo('template_directory'); ?>/assets/images/ptect.png;); background-position: center;
    background-repeat:no-repeat;background-size:cover;">

    
   <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Details
   </button>

    <!-- Scrollable modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-scrollable ">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Ptect.org <a href="https://ptect.org/" target="_blank"> (Visit Website)</a></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Description</h5>
        <ul>
          <li>Convert static HTML Website to Wordpress Using Elementor.</li>
          <li>Edit Theme Colors,Connect website with mailchimp,GSC & GA.</li>
          <li>Add Arabic Language and add content.</li>
        </ul>
        <h5>Skills :<span> WordPress,PHP,CSS3,HTML5,Elementor</span></h5>
        <h5>Screens</h5>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
       <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/ptect.png" class="d-block w-100" alt="website-image">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/ptect2.png" class="d-block w-100" alt="website-image">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/ptect3.png" class="d-block w-100" alt="website-image">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        
      </div>
  
       </div>
      </div>
   
   </div>
   <!--end modal-->
</div>
<!--end ptect-->

  <!--start tasaweeq-->
   <div class="work-row" style="background: url(<?php bloginfo('template_directory'); ?>/assets/images/home-tasawiq.png;;); background-position: center;
    background-repeat: no-repeat;background-size:cover;">

    
   <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
    Details
   </button>

    <!-- Scrollable modal -->
      <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-scrollable ">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel2">Tasawiq.com <a href="https://tasawiq.com/" target="_blank"> (Visit Website)</a></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Description</h5>
        <ul>
          <li>Build Ecommerce Website using Elementor and WooCommerce.</li>
          <li>Connect website with MailChimp,GSC & GA.</li>
          <li>Implement best SEO Techniques & plug-ins.</li>
        </ul>
        <h5>Skills :<span> WordPress,WooCommerce,Elementor</span></h5>
        <h5>Screens</h5>
        <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
       <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/home-tasawiqfull.png" class="d-block w-100" alt="website-image">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/tasawiq-blog-.png" class="d-block w-100" alt="website-image">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/tasawiq-shop.png" class="d-block w-100" alt="website-image">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/tasawiq-cart.png" class="d-block w-100" alt="website-image">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/tasawiq-product.png" class="d-block w-100" alt="website-image">
    </div>
  </div>


  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        
      </div>
  
       </div>
      </div>
   
   </div>
   <!--end modal-->
   
   </div>
   <!--end tasaweeq-->

   <!--start edusa-->

   <div class="work-row" style="background: url(<?php bloginfo('template_directory'); ?>/assets/images/home.png;); background-position: center;
    background-repeat: no-repeat;background-size:cover;">

    
   <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
    Details
   </button>

    <!-- Scrollable modal -->
      <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel3" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-scrollable ">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel3">Edusa <a href="https://github.com/SafaaAbdou/Edusa" target="_blank"> (Visit Website and Theme Link)</a></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Description</h5>
        <ul>
          <li>Convert Figma Design to responsive WordPress Theme using HTML5,CSS3,JavaScript,PHP and Bootstrap Navigation.</li>
          <li>Edusa is Educational Theme for Affiliate Marketing with blog,404 custom template,Search function,<br>custom post type,widgets & sidebar.</li>
          <li>Build My Custom Plugin for creating Custom Post Type and taxonomies <a href="https://github.com/SafaaAbdou/e-learning" target="_blank">(check full website files)</a>.</li>
        </ul>
        <h5>Skills :<span> WordPress,PHP,HTML5,CSS3</span></h5>
        <h5>Screens</h5>
        <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
       <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/edusao.png" class="d-block w-100" alt="website-image">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/eduasat.png" class="d-block w-100" alt="website-image">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/edusath.png" class="d-block w-100" alt="website-image">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/edusaf.png" class="d-block w-100" alt="website-image">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/edusafi.png" class="d-block w-100" alt="website-image">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/edusaar.png" class="d-block w-100" alt="website-image">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/edusaart.png" class="d-block w-100" alt="website-image">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/theme.png" class="d-block w-100" alt="website-image">
    </div>
  </div>


  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        
      </div>
  
       </div>
      </div>
   
   </div>
   <!--end modal-->
   
   </div>
   <!--end edusa-->

   <!--start beauty landing-->
   <div class="work-row" style="background: url(<?php bloginfo('template_directory'); ?>/assets/images/beauty-home.png;); background-position: center;
    background-repeat: no-repeat;background-size:cover;">
    
   <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
    Details
   </button>

    <!-- Scrollable modal -->
      <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel4" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-scrollable ">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel4">Beauty Landing Page(AR & EN) <a href="https://safaaabdou.github.io/BeautyLanding/index.html" target="_blank"> (Visit Website and Theme Link)</a></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Description</h5>
        <ul>
          <li>Convert Figma Design to responsive Theme (arabic and english using HTML5,CSS3,JavaScript).</li>
          <li>Beauty Landing Page <a href="https://github.com/SafaaAbdou/BeautyLanding" target="_blank">(check full website files)</a>.</li>
         
        </ul>
        <h5>Skills :<span> HTML5,CSS3,JavaScript</span></h5>
        <h5>Screens</h5>
        <div id="carouselExampleControls4" class="carousel slide" data-bs-ride="carousel">
       <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/BeautyLanding-en.png" class="d-block w-100" alt="website-image">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/BeautyLanding-ar.png" class="d-block w-100" alt="website-image">
    </div>
    
  </div>


  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        
      </div>
  
       </div>
      </div>
   
   </div>
   <!--end modal-->
   
   </div>
   <!--end beauty landing-->

   <!--start tourism landing page-->
   <div class="work-row" style="background: url(<?php bloginfo('template_directory'); ?>/assets/images/tourism-home.jpg;); background-position: center;
    background-repeat: no-repeat;background-size:cover;">
    
   <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop5">
    Details
   </button>

    <!-- Scrollable modal -->
      <div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel5" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-scrollable ">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel5">Tourism Landing Page(AR & EN) <a href="https://tourism-in-alula.com/" target="_blank"> (Visit Website)</a></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Description</h5>
        <ul>
          <li>Design and build Tourism Landing Page using Elementor (arabic and english)</li>
          <li>Add Content and Connect Website with Social Media , GA & GSC.</li>
         
        </ul>
        <h5>Skills :<span> Wordpress,Elementor,PHP</span></h5>
        <h5>Screens</h5>
        <div id="carouselExampleControls5" class="carousel slide" data-bs-ride="carousel">
       <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/tourism-ar.jpeg" class="d-block w-100" alt="website-image">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/tourism-en.png" class="d-block w-100" alt="website-image">
    </div>
    
  </div>


  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        
      </div>
  
       </div>
      </div>
   
   </div>
   <!--end modal-->
   
   </div>
   
   <!--end tourism landing page-->

   
   <!--start course landing page-->

   <div class="work-row" style="background: url(<?php bloginfo('template_directory'); ?>/assets/images/qasralthakera-home.png;); background-position: center;
    background-repeat: no-repeat;background-size:cover;">

    
   <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop6">
    Details
   </button>

    <!-- Scrollable modal -->
      <div class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel6" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-scrollable ">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel6">Two Landing Pages for Memory Course <a href="https://qasralthakera.com/" target="_blank"> (Visit Website)</a></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Description</h5>
        <ul>
          <li>Design and build Two Landing Pages for Online Course using Elementor</li>
          <li>Create Content and Connect Website with MailChimp , GA & GSC.</li>
          <li>Upload Course and Add its link to Website.</li>
         
         
        </ul>
        <h5>Skills :<span> Wordpress,Elementor,PHP,JavaScript</span></h5>
        <h5>Screens</h5>
        <div id="carouselExampleControls6" class="carousel slide" data-bs-ride="carousel">
       <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/qasralthakera-home.png" class="d-block w-100" alt="website-image">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/qasralthakera-course-details.png" class="d-block w-100" alt="website-image">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/qasralthakera-perfo.png" class="d-block w-100" alt="website-image">
    </div>
    
  </div>


  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls6" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls6" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        
      </div>
  
       </div>
      </div>
   
   </div>
   <!--end modal-->
   
   </div>
   
   <!--end course landing page-->

   <!--Start portfolio page-->
   <div class="work-row" style="background: url(<?php bloginfo('template_directory'); ?>/assets/images/portfolio-home.png;); background-position: center;
    background-repeat: no-repeat;background-size:cover;" >

    
   <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop7">
    Details
   </button>

    <!-- Scrollable modal -->
      <div class="modal fade" id="staticBackdrop7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel7" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-scrollable ">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel7">Portfolio Wordpress Theme  <a href="https://safaaabdou.github.io/saportfolio/" target="_blank"> (Visit Website)</a></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Description</h5>
        <ul>
          <li>Design and build wordpress theme from scratch.</li>
  
          <li>Make it responsive using HTML5,CSS3,JavaScript & Bootstrap.</li>
         
         
        </ul>
        <h5>Skills :<span> Wordpress,HTML5,CSS3,JavaScript,Bootstrap</span></h5>
        <h5>Screens</h5>
        <div id="carouselExampleControls7" class="carousel slide" data-bs-ride="carousel">
       <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/sa-portfolio-home.png" class="d-block w-100" alt="website-image">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/sa-portfolio-workde.png" class="d-block w-100" alt="website-image">
    </div>
     <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/portfolio-theme.jpg" class="d-block w-100" alt="website-image">
    </div>
   
  </div>


  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls7" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls7" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        
      </div>
  
       </div>
      </div>
   
   </div>
   <!--end modal-->
   
   </div>
   <!--end portfolio page-->
   
   <!--Start fatora page-->
   <div class="work-row" style="background: url(<?php bloginfo('template_directory'); ?>/assets/images/fatora.jpg;); background-position: center;
    background-repeat: no-repeat;background-size:cover;" >

    
   <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop8">
    Details
   </button>

    <!-- Scrollable modal -->
      <div class="modal fade" id="staticBackdrop8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel8" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-scrollable ">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel8">Fatora.io  <a href="https://fatora.io/en/" target="_blank"> (Visit Website)</a></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Description</h5>
        <ul>
          <li>Improve Site Performance to 95% (technical SEO ).</li>
  
          <li>Improve webiste ranking and increase organic traffic (it ranks for more than 2k keywords on the first page).</li>
          <li>Create Site Audit,Handle robot.txt,schema and site map,create monthly content strategy.</li>
          <li>Analyze and edit published content to find opportunities to rank,manage GA & GSC.</li>
         
         
        </ul>
        <h5>Skills :<span> SEO,Technical SEO,Keyword Ranking ,on-page SEO</span></h5>
        <h5>Screens</h5>
        <div id="carouselExampleControls8" class="carousel slide" data-bs-ride="carousel">
       <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/fatora-rank.jpg" class="d-block w-100" alt="website-image">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/achievmentfat.jpg" class="d-block w-100" alt="website-image">
    </div>
   
  </div>


  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls8" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls8" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        
      </div>
  
       </div>
      </div>
   
   </div>
   <!--end modal-->
   </div> 
   <!--End fatora page-->

   
   <!--Start gallery page-->
   <div class="work-row" style="background: url(<?php bloginfo('template_directory'); ?>/assets/images/gallery.jpg;); background-position: center;
    background-repeat: no-repeat;background-size:cover;" >

    
   <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop9">
    Details
   </button>

    <!-- Scrollable modal -->
      <div class="modal fade" id="staticBackdrop9" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel9" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-scrollable ">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel9">Gallery Seven <a href="https://gallery-seven.com" target="_blank"> (Visit Website)</a></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Description</h5>
        <ul>
          <li>Responsible for managing websites for our clients (sabina bahrain ,thai mart bahrain,igas,....).</li>
  
          <li>Improve website performance to rank better on Search Engine.</li>
          <li>Check website architecture and navigation ,build internal links ,add products and edit content.</li>
          <li>Manage GA & GSC ,technical SEO process,on-page & backlinks.</li>
         
         
        </ul>
        <h5>Skills :<span> SEO,Technical SEO,backlinks,on-page SEO</span></h5>
        <h5>Screens</h5>
        <div id="carouselExampleControls9" class="carousel slide" data-bs-ride="carousel">
       <div class="carousel-inner">
       <div class="carousel-item active">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/sabina-bahrain.jpg" class="d-block w-100" alt="website-image">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/thaimartbahrain.jpg" class="d-block w-100" alt="website-image">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/igassa.jpg" class="d-block w-100" alt="website-image">
    </div>
   
  </div>


  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls9" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls9" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        
      </div>
  
       </div>
      </div>
   
   </div>
   <!--end modal-->
   </div> 
   <!--End gallery page-->


</div>
        </div> 

<!-- end work section -->


<!-- start testimonials section -->

<div class="reviews" id="reviews">
<div class="container">
    <h2>Reviews</h2>
    <span>What My Clients Say</span>

</div>
<div class="reviews-div">


   <div id="carouselExampleControlsrev" class="carousel slide" data-bs-ride="carousel">
   <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleControlsrev" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleControlsrev" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleControlsrev" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
       <div class="carousel-inner">
    <div class="carousel-item active">
      
   <div class="review-row">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/screeno-review.png" class="d-block w-100" alt="review-image">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/screent-review.png" class="d-block w-100" alt="review-image">
      
    </div>
      </div>

    <div class="carousel-item">
    <div class="review-row">
    <img src="<?php bloginfo('template_directory'); ?>/assets/images/screenth-review.png" class="d-block w-100" alt="review-image">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/screenfou-review.png" class="d-block w-100" alt="review-image">
    </div>
    </div>

    <div class="carousel-item">
    <div class="review-row">
    <img src="<?php bloginfo('template_directory'); ?>/assets/images/screenfiv-review.png" class="d-block w-100" alt="review-image">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/screensi-review.png" class="d-block w-100" alt="review-image">
    </div>
    </div>
   
    
  </div>


  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsrev" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsrev" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        
   
   </div>
</div>

    
<!-- end testimonials section -->


<!-- start why hire me section -->

<div class="hire-me" id="hire-me">
<div class="hire-left">
    <h2>Why Me?</h2>
    <span>Skills I have </span>

</div>
<div class="hire-right">
   <div class="hire-div">
   <i class="fa-solid fa-check"></i>
   <div>
   <h5>Creativity and innovation </h5>
   <p>Come up with new ideas and solutions,with Broad Technical SEO knowledge<br>
    I am able to build website that rank higher. </p>
   </div>
   </div>

   <div class="hire-div">
   <i class="fa-solid fa-check"></i>
   <div>
   <h5>Effective Communication </h5>
   <p>Effective online communication with my team to finish work successfully .</p>

   </div>
   </div>

   <div class="hire-div">
   <i class="fa-solid fa-check"></i>
   <div>
   <h5>Time Managment</h5>
   <p>Organize my tasks and work efficently to achieve my goals.</p>

   </div>
   </div>

   
</div>
<button class="hire-me-btn MoveUpDown" onclick="mailTo('https://mail.google.com/mail/?view=cm&fs=1&to=safaaabdou2020@gmail.com');">Hire Me </button>
</div>

<!-- end why hire me section -->

<!--bach to top btn-->

<button onclick="back_to_top()" id="back-to-top" ><i class="fa-regular fa-hand-point-up"></i></button>
       


<?php get_footer();?>