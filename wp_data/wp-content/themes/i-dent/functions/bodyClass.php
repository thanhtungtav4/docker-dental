<?php
  function bodyClass(){
    $type = get_post_type();
    $class = '';
    if($type === 'page' && is_front_page()){
      $class = 'homepage';
    }
    if($type === 'page' && is_page('trong-rang-nguyen-ham-all-on-6-all-on-4')){
      $class = 'p-all-in';
    }
    return body_class($class);
  }