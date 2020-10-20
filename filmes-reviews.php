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

    }

}
Filmes_reviews::getInstance();