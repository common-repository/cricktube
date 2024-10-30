<?php
/*
Plugin Name: Youtube Videos tagged Cricket
Plugin URI: http://advertisablearena.com
Description: You tube Most watch videos last week
Version: 1.0
Author: abhijit Gaikwad
Author URI: http://advertisablearena.com
*/

function sampleCricktube() 
{
  echo '<iframe src ="http://advertisablearena.com/youtube/cricket/youtube_most_watched_videos_cricket.htm" width="180" height="200" frameBorder="0"> <p>Your browser does not support iframes.</p></iframe>';

}

function widget_myCrickTube($args) {
  extract($args);
  echo $before_widget;
  echo $before_title;?>Youtube Videos tagged Cricket<?php echo $after_title;
  sampleCricktube();
  echo $after_widget;
}

function myCricktube_init()
{
  register_sidebar_widget(__('Youtube Videos tagged Cricket'), 'widget_myCrickTube');     
}
add_action("plugins_loaded", "myCricktube_init");


 
?>