<?Php
namespace core;
class Request
{
  public static function uri()
  {
    return explode ('/',
    trim(
          parse_url(
            $_SERVER['REQUEST_URI'],component:PHP_URL_PATH) ,characters:'/'
            )
    );

  }
  public static function method()
  {
    return strtolower($_SERVER['REQUEST_METHOD']);
  }
}

//return parse_url( $_SERVER['REQUEST_URI'],component:PHP_URL_PATH);// delete fatoma
// return trim(parse_url( $_SERVER['REQUEST_URI'],
// component:PHP_URL_PATH),characters:"/");delete (" /")