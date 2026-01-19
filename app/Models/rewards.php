<?php

class rewards {
    private int $id;
    private string $name;
    private int $points_required;
    private string $description;
    private int $stock;

    public function __construct(int $id,string $name,int $points_required,string $description,int $stock) {
        $this->id = $id;
        $this->name = $name;
        $this->points_required = $points_required;
        $this->description = $description;
        $this->stock = $stock;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getPointsRequired(){
        return $this->points_required;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getStock(){
        return $this->stock;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function setPointsRequired(int $points_required){
        $this->points_required = $points_required;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }

    public function setStock(int $stock){
        $this->stock = $stock;
    }

    public function getAll() {

    }

    public function getById(int $id) {

    }

    public function isAvailable(int $id) {

    }

    public function decrementStock(int $id) {

    }
}


?>