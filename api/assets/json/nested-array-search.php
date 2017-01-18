<?php

function arrayRecursiveSearch($needle, $haystack, $path=""){
  if(!is_array($haystack)){
    die("second argument is not array");
  }
  
  global $matches;
  
  foreach($haystack as $key=>$value)
  {
    if(preg_match("/$needle/i", $key)){
	  $matches[] = array($path . "$key/", "KEY: $key");
	}
	
	if(is_array($value)){
	  $path .= "$key/";
	  arrayRecursiveSearch($needle, $value, $path);
	  unset($path);
	}else{
	  if(preg_match("/$needle/i", $value)){
	    $matches[] = array($path . "$key/", "VALUE: $value");
	  }
	}
  }
  
  return $matches;
}

include('year-numbers-array.php');

$arr = array("Asia"=>array('rambutan','duku'),
              "Australia"=>array('pear','kiwi'),
			  "Arab"=>array('kurma'));

print_r(arrayRecursiveSearch(1981,$yearConversion));
// result: Array ( [0] => Array ( [0] => Asia/0/ [1] => VALUE: rambutan ) [1] => Array ( [0] => Australia/ [1] => KEY: Australia ) [2] => Array ( [0] => Arab/ [1] => KEY: Arab ) )
?>