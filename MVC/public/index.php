<?php
  require_once"../vendor/autoload.php";
  require_once"../routes/web.php";
    use core\Request;
    use core\route;

    route::resolves();
    echo'hello';
    // echo '<br>';
    //echo Request::method();
    // echo '<br>';
    // echo '<pre>';
    // print_r(route::$routes);
    // echo '</pre>';