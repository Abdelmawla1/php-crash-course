<?php

class Invoice
{
    // private $description;
    // private $total;
    // private $date;
    // private $isPaid;

    // public function __construct($description, $total, $date, $isPaid)
    // {
    //     $this->description = $description;
    //     $this->total = $total;
    //     $this->date = $date;
    //     $this->isPaid = $isPaid;
    // }

    // or

    public function __construct(private $description, private $total, private $date, private $isPaid)
    {
    }
}

$invoice = new Invoice(
    description: 'Customer installation',
    total: 10000,
    date: new DateTime(),           // the order doesn't matter you can start with description,isPaid or total
    isPaid: true
);

var_dump($invoice);
