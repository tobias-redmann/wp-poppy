<?php
/*
Plugin Name: WP Poppy
Plugin URI: http://www.tricd.de
Description: A brief description of the Plugin.
Version: 1.0
Author: Tobias Redmann
Author URI: http://www.tricd.de
License: MIT
*/


add_action('wp_enqueue_scripts', 'add_poppy_scripts');
add_action('wp_footer', 'add_poppy_footer');


function add_poppy_scripts() {
  
  wp_enqueue_script('jquery-cookie', plugins_url( 'includes/jquery.cookie.js' , __FILE__ )  , array('jquery'), null,false);
  wp_enqueue_script('jquery-simplemodal', plugins_url( 'includes/jquery.simplemodal.1.4.4.min.js' , __FILE__ )  , array('jquery'), null,false);
  
  #wp_enqueue_style('fancybox-styles', plugins_url( 'includes/fancybox/jquery.fancybox-1.3.4.css' , __FILE__ ) );
 
  
}


function add_poppy_footer() {
  ?>
  <script language="javascript">
  
  jQuery(document).ready(function($) {
  
    if (!$.cookie('wordpress-poppy')) {
       
      $.modal('Jetzt Freund werden und über aktuelle Aktionen und Angebote informiert werden.<br/><br/><iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FHandy-Preis%2F358827457559425&amp;width=400&amp;height=218&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color=%23ffffff&amp;header=false&amp;appId=500981549965895" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:400px; height:218px;" allowTransparency="true"></iframe><br/><buttom class="simplemodal-close btn btn-info">Nein Danke</button>',{
      containerCss:{
        backgroundColor:"#fff", 
        borderColor:"#fff", 
        height:300, 
        padding:15, 
        width:460,
        overlay:'hidden'
        },
        overlayCss:{
          
          backgroundColor:"#000"
          
        }
      }); 
      
      $('.simplemodal-wrap').css({overflow:'hidden'});
    
      // set the cookie
      $.cookie('wordpress-poppy', 'gg', { expires: 7 }); 
      
    }
    
    });
  
     
  
  </script>
  <?php
  
}


?>