<?php

// Constructor Property Promotion
class User
{
//    protected $name; // you can write string $name instead of $name
//
//    public function __construct($name)
//    {
//        $this->name = $name;
//    }

    // Promotion of constructor property
    public function __construct(protected $name)   // you can write string $name instead of $name
    {
    }

}

class Plan
{
//    protected $name;
//
//    public function __construct($name)
//    {
//        $this->name = $name;
//    }

    // Promotion of constructor property
    public function __construct(protected $name = 'monthly')
    {
    }

}

class SignUp
{
//    protected User $user;
//    protected Plan $plan;
//
//    public function __construct(User $user, Plan $plan)
//    {
//        $this->user = $user;
//        $this->plan = $plan;
//    }

    // Promotion of constructor property
    // And here you can also set defaults like:
    // __construct(protected User $user, protected Plan $plan = new Plan('monthly') )

    // and you can mix like:
    // protected Plan $plan;
    // __construct(protected User $user, Plan $plan)
    //{
    //  $this->plan = $plan;
    //}

    public function __construct(protected User $user, protected Plan $plan)
    {
    }

}

$user = new User('Abdelmawla');
$plan = new Plan('yearly'); // if it's Plan() => 'monthly' else Plan('something else') => 'something else'

$signUp = new SignUp($user, $plan);

var_dump($signUp);

//echo $signUp->user->name; // you can do this if all of them (public User,....) (public $name)<?php

// Constructor Property Promotion
class User
{
//    protected $name; // you can write string $name instead of $name
//
//    public function __construct($name)
//    {
//        $this->name = $name;
//    }

    // Promotion of constructor property
    public function __construct(protected $name)   // you can write string $name instead of $name
    {
    }

}

class Plan
{
//    protected $name;
//
//    public function __construct($name)
//    {
//        $this->name = $name;
//    }

    // Promotion of constructor property
    public function __construct(protected $name = 'monthly')
    {
    }

}

class SignUp
{
//    protected User $user;
//    protected Plan $plan;
//
//    public function __construct(User $user, Plan $plan)
//    {
//        $this->user = $user;
//        $this->plan = $plan;
//    }

    // Promotion of constructor property
    // And here you can also set defaults like:
    // __construct(protected User $user, protected Plan $plan = new Plan('monthly') )

    // and you can mix like:
    // protected Plan $plan;
    // __construct(protected User $user, Plan $plan)
    //{
    //  $this->plan = $plan;
    //}

    public function __construct(protected User $user, protected Plan $plan)
    {
    }

}

$user = new User('Abdelmawla');
$plan = new Plan('yearly'); // if it's Plan() => 'monthly' else Plan('something else') => 'something else'

$signUp = new SignUp($user, $plan);

var_dump($signUp);

//echo $signUp->user->name; // you can do this if all of them (public User,....) (public $name)
