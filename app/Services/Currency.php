<?php

namespace App\Services;

class Currency 
{
    private $id;
    private $name;
    private $price;
    private $img;
    private $daily_change;
    
    public function __construct($id,$name,$price,$img_url,$daily_change_percent) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->img = $img_url;
        $this->daily_change= $daily_change_percent;
    }
    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getImageUrl() {
        return $this->img;
    }
    public function getDailyChangePercent() {
        return $this->daily_change;
    }
}