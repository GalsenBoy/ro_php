<?php
    
class Book
{
    private $title;
    private $autor;
    private $price;

    public function __construct($title,$autor,$price){
        $this->title = $title;
        $this->autor = $autor;
        $this->price = $price;
    }

    public function __toString(){
        return $this->title . " a été écrit par " . $this->autor . ". Le livre vaut " . $this->price . "€." ;
    }

}
