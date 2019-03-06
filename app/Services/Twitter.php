<?php

namespace App\Services;



class Twitter

{
     protected $apiKey;

     public function __construct( $apiKey)
     {
        $this-> apiKey =$apiKey;
     }
    
}