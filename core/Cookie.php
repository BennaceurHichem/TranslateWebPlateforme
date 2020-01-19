<?php
namespace Core;

class Cookie {

  public static function set($name, $value, $expiry) {
      //set the cookie on the root domain and add expiry to the real time x
      //setCookie est predefinie sous php
    if(setCookie($name, $value, time()+$expiry, '/')) {
      return true;
    }
    return false;
  }

  public static function delete($name) {

      //cookie deletion 
    self::set($name, '', time() -1);
  }

  public static function get($name) {
    return $_COOKIE[$name];
  }

  public static function exists($name) {
    return isset($_COOKIE[$name]);
  }
}
