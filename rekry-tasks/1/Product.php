<?php

// TODO: Write a workign Product class

class Product implements ProductContract
{
    private $name = null;
    private $price = null;
    
    public function getPrice(){
        return $this->price;     
	}
    public function getFormattedPrice(){
        $PriceWithCurrency = $this->price; 
        $PriceWithCurrency = number_format($PriceWithCurrency, 2, ',', '');
        
        return $PriceWithCurrency. " €";
	}
    public function getName(){
        return $this->name;     
	}
    public function __construct($name, $price){
       $this->name = $name; 
       $this->price = $price;     
       
		
	}
}