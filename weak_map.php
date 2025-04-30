<?php

$obj = new stdClass();

// [
//     $obj => 'foobar'   // not allowed to make an object as key in associative array, So WeakMap solve that. 
// ]

// In the past to do that 

// $store = new SplObjectStorage();

// $store[$obj] = 'foobar';  // we can't use string as key like $store['string'] = 'foobar';


var_dump($store[$obj]); 

 // This approach can restrict garbage collection by keeping reference and that what WeakMap solve



 // Now

$store = new WeakMap();

$store[$obj] = 'foobar';

var_dump($store);

unset($obj);

var_dump($store);

interface Event {}

class SomeEvent implements Event {}

class AnotherEvent implements Event {}

class Dispatcher {

    protected WeakMap $dispatchCount;

    public function _construct()
    {
        $this->dispatchCount = new WeakMap();
    }

    public function dispatch(Event $event)
    {
        if (! isset($this->dispatchCount[$event]))
        {
            $this->dispatchCount[$event] = 0;
        }

        $this->dispatchCount[$event]++;
    }
}

$dispatcher = new Dispatcher();

$event = new SomeEvent();

$dispatcher->dispatch($event);

$anotherEvent = new AnotherEvent();

$dispatcher->dispatch($anotherEvent);

var_dump($dispatcher);