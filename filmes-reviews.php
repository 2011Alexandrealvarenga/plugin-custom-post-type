<?php 
/*
Plugin Name: filmes review
Plugin URI: http://exemplo.com
Description: plugin para review filmes
Version: 1.0
Author: alexandre
Author URI:  http://boraviver.info
Text Domain: filmes-reviews
License: GPL2
*/
class Filmes_reviews {
  private static $instance;

  public static function getInstance(){
    if (self::$instance == NULL){
        self::$instance = new self();
      }
      return self::$instance;
    }
    private function __construct(){
      add_action('init', array($this,'register_post_type'));
    }
    function register_post_type(){
      register_post_type('filmes_reviews',array(
        'labels'      => array(
          'name'          => 'Filmes Reviews',
          'singular_name' => 'Filme Review',
        ),

        'description'     =>'Post para cadastro de reviews',
        'supports'        =>array(
          'title','editor','excerpt','author','thumbnail','custom-fields',
        ),
        'public'          =>  TRUE,
        'menu_position'   =>  4
      ));
    }

}
Filmes_reviews::getInstance();