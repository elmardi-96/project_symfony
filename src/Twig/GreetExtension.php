<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use App\GreetingGenerator;

class GreetExtension extends AbstractExtension
{
      private $greetingGenerator;
      public function __construct(GreetingGenerator $greetingGenerator){
          $this->greetingGenerator = $greetingGenerator;
      }
      public function getFilters(){
          return [
              new TwigFilter('greet',[$this,'greetUser']),
              new TwigFilter('table',[$this,'getArray']),
          ];
      }
      public function greetUser($name){
          $greeting = $this->greetingGenerator->getRandomGreeting();
          return "$greeting $name!";
      }
      public function getArray($name){
        $getArray = $this->greetingGenerator->getArray();
        return "$getArray $name!";
    }



    
}