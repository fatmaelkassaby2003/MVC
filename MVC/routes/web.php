<?php
 // the actual routes are stored with me.
  use core\route;

  route::get(url:'about',action:'Homepagecontroller');

  route::get('contact' ,function()
  {
      echo 'hello route';
  }  );