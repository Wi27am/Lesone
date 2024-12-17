<?php
//array()
$array = array(1,2,3);
//count()
$count = count($array);
//arry_push()
array_push($arry,4);
//array_pop()
$lastElment = array_pop($array);
//araay_shift()
$fristElement = array_shift($array);
//array_unshift()
array_unshift($array,0);
//in_array()
   $exists = in_array(2, $array);
   

 //array_search()
   $key = array_search(2, $array);
   

//sort()
   Sort($array);

 //rsort()
   Rsort($array);
   

//asort()
   Asort($array);

 //ksort()
  
   Ksort($array);

 //array_merge()
   $merged = array_merge($array1, $array2);
   

//array_slice()
   
$slice = array_slice($array, 1, 2); // تبدأ من الفهرس 1 وتعيد 2 عنصر

//array_splice()

Array_splice($array, 2, 1, array(5, 6)); // إزالة عنصر في الفهرس 2 واستبداله بـ 5 و 6

//array_keys()
$keys = array_keys($array);

//array_values()

$values = array_values($array);

//array_flip()
$flipped = array_flip($array);
//array_map()
$squared = array_map(function($n) { return $n * $n; }, $array);

//array_reduce()

$sum = array_reduce($array, function($carry, $item) {
    Return $carry + $item;
}, 0);
//array_filter()
   $evens = array_filter($array, function($n) { return $n % 2 == 0; });

//array_unique()
   $unique = array_unique($array);

//array_rand()

//strlen()
$length = strlen($string1); // 13
// strpos()
$position = strpos($string1, ‘World’); // 7
//substr()
$substring = substr($string1, 0, 5); // “Hello”
//strreplace()

$newString = strreplace(‘World’, ‘PHP’, $string1); // “Hello, PHP!”
//strtoupper()
$upper = strtoupper($string1); // “HELLO, WORLD!”
//strtolower()
$lower = strtolower($string1); // “hello, world!”
//trim()
$trimmed = trim(“   Hello, World!   “); // “Hello, World!”
//explode()
$array = explode(‘,’, $string1); // “Hello”, “ World!”
//implode()   
$joined = implode(‘ ‘, $array); // “Hello  World!”
//str_split()
$chars = strsplit($string1); // [“H”, “e”, “l”, “l”, “o”, “,”, “ “, “W”, “o”, “r”, “l”, “d”, “!”]
//isstring()
If (is_string($string1)) {
 // …
}
//strcontains()
$contains = strcontains($string1, ‘Hello’); // true
//ucfirst()s
   $capitalized = ucfirst(‘hello’); // “Hello”
  //  ucwords()
   
   $wordsCapitalized = ucwords(‘hello world’); // “Hello World”
   
//str_repeat()
  
   $repeated = strrepeat(‘A’, 5); // “AAAAA”
//htmlspecialchars()
   $safeString = htmlspecialchars(‘<b>Hello</b>’); // “&lt;b&gt;Hello&lt;/b&gt;”
   
//strpad()
      $padded = str_pad(‘123’, 5, ‘0’, STR_PAD_LEFT); // “00123”




?>