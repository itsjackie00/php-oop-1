<?php 
class Product 
{
    public string $title;
    public string $cover;
    public float $price;
    public float $rating;

    //costruttore
    public function __construct($title,$cover,$price,$rating){
        $this->title = $title;
        $this->cover = $cover;
        $this->price = $price;
        $this->rating = $rating;
    }

    public function showAll(){
        echo ' ' . 'tutti i film';
    }
}