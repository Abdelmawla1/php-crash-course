<?php

$obj = new stdClass();

// [
//     $obj => 'foobar'   // not allowed to make an object as key in associative array, So WeakMap solve that. 
// ]

// In the past to do that 

$store = new SplObjectStorage();

$store[$obj] = 'foobar';  // we can't use string as key like $store['string'] = 'foobar';


var_dump($store[$obj]); 

 // This approach can restrict garbage collection by keeping reference and that what WeakMap solve
