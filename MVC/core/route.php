<?php

namespace core;

class route
{
  public static array $routes=[];//do i have url or not 
  public static function get($url,$action)
  {
    self::$routes['get'][$url]=$action;
  }

  public static function post($url,$action)
  {
    self::$routes['post'][$url]=$action;
  }

  public static function resolves()
  {
    $uri=Request::uri();
    $method=Request::method();
    $action=self::$routes[$method][implode('/',$uri)]??false;

    if ($action == false) 
    {
      echo 'data not found';
      exit;
    }

    if(is_string($action))
    {
      self::callaction($action);
      exit;
    }
    $action();
}
private static function callaction($action)
    {
      $action=explode('@',$action);
      $controllerclass="app\\controller\\".$action[0];
      $method=$action[1];
      $controllerobject=new $controllerclass();
      $controllerobject->$method();
    }
}