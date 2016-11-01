<?php
/*
Plugin Name: WordPress.org Plugin
Plugin URI:  https://developer.wordpress.org/plugins/the-basics/
Description: Basic WordPress Plugin Header Comment
Version:     20160911
Author:      WordPress.org
Author URI:  https://developer.wordpress.org/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wporg
Domain Path: /languages
*/
function wporg_shortcodes_init()
{
    function wporg_shortcode($atts = [], $content = null)
    {
        // do something to $content
        $content .= <<<EOT
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
EOT;


        // always return
        return $content;
    }
    add_shortcode('wporg', 'wporg_shortcode');
}
add_action('init', 'wporg_shortcodes_init');
wp_register_style('your_css_and_js', plugins_url('css/style.css',__FILE__ ));
wp_enqueue_style('your_css_and_js');
wp_register_script( 'your_css_and_js', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
wp_enqueue_script('your_css_and_js');
wp_register_script( 'your_css_and_js2', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
wp_enqueue_script('your_css_and_js2');
