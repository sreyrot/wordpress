<?php 
    function featureimg(){
        add_theme_support('post-thumbnails');
        set_post_thumbnail(200,200);
    }

    add_action('after_setup_theme','featureimg');
?>