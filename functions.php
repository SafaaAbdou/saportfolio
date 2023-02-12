
<?php

// Register custom navigation walker 
require_once('wp-bootstrap-navwalker.php');

//add post thumbnail feature for my theme 
add_theme_support('post-thumbnails');

//add title tag feature for my theme 
add_theme_support( 'title-tag');



function add_style(){
    wp_enqueue_style("fontawesome-css", get_template_directory_uri() . "/assets/css/all.min.css",array(),"1.0" , "all");
    wp_enqueue_style("normalize-css", get_template_directory_uri() . "/assets/css/normalize.css",array(),"1.0" , "all");
    wp_enqueue_style("bootstrap-css","https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" ,array(),"1.0" , "all");
   
    wp_enqueue_style( "preconnect", "https://fonts.googleapis.com","1.0" , "all"); 
    wp_enqueue_style( "preconnect", "https://fonts.gstatic.com" ,"1.0" , "all"); 
    wp_enqueue_style( "google-fonts", "https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700&display=swap","1.0" , "all"); 

    wp_enqueue_style("main-css", get_template_directory_uri() . "/assets/css/main.css" ,array() ,"1.0" , "all");



}


function add_scripts(){
    
    wp_enqueue_script("bootstrap-js ","https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js", array(), false, true);
    wp_enqueue_script("main-js ", get_template_directory_uri() . "/assets/js/main.js", array(), false, true);
}



add_action("wp_enqueue_scripts","add_style");


add_action("wp_enqueue_scripts","add_scripts");



function nav_menu(){ //register nav menu into theme 
    register_nav_menus(array(

        "menu" => "Header Menu" ,
        

    ));



}

function display_nav_menu()//display nav menu 
{

    wp_nav_menu(array(

        "theme-location" => "Header Menu",
        "menu_class"     =>  " navbar-nav ms-auto mb-2 mb-lg-0  " ,
        "container"      =>   false,
        "depth"          => 2    ,
        "Walker"         => new WP_Bootstrap_Navwalker(),
    ));
}
add_action("init","nav_menu");


//register side Bar

function main_sidebar(){

    register_sidebar(
        array(

            "name" => __("Main SideBar"),
            "id" => "main-sidebar",
            "description" => __("Main SideBar "),
            "class" => __("main-sideBar"),


        )
    );
}
add_action("widgets_init","main_sidebar");