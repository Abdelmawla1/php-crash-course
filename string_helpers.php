<?php

// str_starts_with Method

$id = 'inv_asdfsaslds';

// $result = stripos($id, 'inv_') === 0; // old way

$result = str_starts_with($id, 'inv_');  // new way

var_dump($result);

// str_ends_with Method

$id = 'asdfsaslds_inv';

// $result = stripos(strrev($id),strrev('_inv')) === 0; // old way

// var_dump(preg_match('/_inv$/',$id));  // another old way

$result = str_ends_with($id, '_inv');  // new way

var_dump($result);

// str_contains

$url = 'https://example.com?foo=bar';

// $result = stripos($url, '?') !== false;   // old way

// var_dump(parse_url($url)['query']); // another old way

$result = str_contains($url, '?');

var_dump($result);
