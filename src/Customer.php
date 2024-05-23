<?php

namespace ProgrammerKekinian\Belajar;

class Customer
{
  public function __construct(private string $name)
  {
  }

  public function sayHello(string $name = "guest"): string
  {
    return "Hello $name, My name is $this->name";
  }


}


?>