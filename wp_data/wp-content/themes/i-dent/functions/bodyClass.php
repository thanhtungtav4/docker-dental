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
    if($type === 'page' && is_page('cam-ket-ve-chat-luong')){
      $class = 'p-camket';
    }
    if($type === 'kien-thuc-nha-khoa' && is_single('chon-tru-implant')){
      $class = 'p-dieutri';
    }
    if($type === 'page' && is_page('uu-dai-vang')){
      $class = 'p-promotion';
    }
    return body_class($class);
  }