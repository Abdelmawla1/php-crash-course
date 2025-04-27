<?php

 class Person
 {

 }

 $obj = new Person();

//  echo get_class($obj); echo $obj::class;  //  they give the same result => Person

 echo $obj::class;  // In the older version you should work with the Class itself Person::class

