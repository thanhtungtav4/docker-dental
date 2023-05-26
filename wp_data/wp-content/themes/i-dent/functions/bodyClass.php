<?php
  function bodyClass(){
    $type = get_post_type();
    $class = '';
    if($type === 'page' && is_page('lien-he')){
      $class = 'p-contact';
    }
    if($type === 'page' && is_page('doi-ngu-tien-si-bac-si')){
      $class = 'p-doctors';
    }
    if($type === 'page' && is_page('tai-sao-chon-chung-toi')){
      $class = 'p-reason';
    }
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
    if($type === 'page' && is_page('cay-ghep-implant-ident')){
      $class = 'p-service';
    }
    if($type === 'page' && is_page('tin-tuc')){
      $class = 'kien-thuc';
    }
    if($type === 'page' && is_page('uu-dai-vang')){
      $class = 'p-promotion';
    }
    if($type !== 'page' && is_category()){
      $class = 'kien-thuc';
    }
    if($type === 'post' && is_single()){
      $class = 'kien-thuc';
    }
    if($type === 'page' && is_page('gioi-thieu-ve-nha-khoa-i-dent')){
      $class = 'p-about';
    }
    if($type === 'page' && is_page('phac-do-dieu-tri-mau')){
      $class = 'p-dieutri';
    }
    if($type === 'page' && is_page('co-so-vat-chat')){
      $class = 'p-basis';
    }
    if($type === 'page' && is_page('tien-si-bac-si-nguyen-hieu-tung')){
      $class = 'p-doctung';
    }
    if($type === 'page' && is_page('bang-gia-rang-su')){
      $class = 'p-tragop';
    }
    if($type === 'page' && is_page('dan-su-veneer')){
      $class = 'p-veneer';
    }
    if($type === 'page' && is_page('boc-rang-su-tham-my')){
      $class = 'p-tooth-ceramic';
    }
    return body_class($class);
  }



