<?php

/**
* Symfony 1.2.8
* converts the given PHP boolean to the corresponding javascript boolean.
* booleans need to be true or false (php would print 1 or nothing).
*
* @param bool (typically from option array)
* @return string javascript boolean equivalent
*/
if (!function_exists('boolean_for_javascript')){
    function boolean_for_javascript($bool)
      {
        if (is_bool($bool))
        {
          return ($bool===true ? 'true' : 'false');
        }
        return $bool;
      }
}


if (!function_exists('json_encode'))
{
  /**
   * http://www.php.net/manual/en/function.json-encode.php#82904
   */
  function json_encode($a=false)
  {
    if (is_null($a)) return 'null';
    if ($a === false) return 'false';
    if ($a === true) return 'true';
    if (is_scalar($a))
    {
      if (is_float($a))
      {
        // Always use "." for floats.
        return floatval(str_replace(",", ".", strval($a)));
      }

      if (is_string($a))
      {
        static $jsonReplaces = array(array("\\", "/", "\n", "\t", "\r", "\b", "\f", '"'), array('\\\\', '\\/', '\\n', '\\t', '\\r', '\\b', '\\f', '\"'));
        return '"' . str_replace($jsonReplaces[0], $jsonReplaces[1], $a) . '"';
      }
      else
        return $a;
    }
    $isList = true;
    for ($i = 0, reset($a); $i < count($a); $i++, next($a))
    {
      if (key($a) !== $i)
      {
        $isList = false;
        break;
      }
    }
    $result = array();
    if ($isList)
    {
      foreach ($a as $v) $result[] = json_encode($v);
      return '[' . join(',', $result) . ']';
    }
    else
    {
      foreach ($a as $k => $v) $result[] = json_encode($k).':'.json_encode($v);
      return '{' . join(',', $result) . '}';
    }
  }
}




