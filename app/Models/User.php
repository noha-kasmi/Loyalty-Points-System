<?php

class User{

 //atributs 
    private int $id;
    private string $email;
    private string $passwordHash;
    private string $name;
    private int $totalPoints;
    private string $createdAt;

 //construct 
    public function __construct(int $id,string $email,string $passwordHash,string $name,int $totalPoints = 0,string $createdAt = '') {
        $this->id = $id;
        $this->email = $email;
        $this->passwordHash = $passwordHash;
        $this->name = $name;
        $this->totalPoints = $totalPoints;
        $this->createdAt = $createdAt;
    }

 //getters & setters 
    public function getId() {
        return $this->id; 
    }
    public function getEmail() {
        return $this->email; 
    }
    public function getName() { 
        return $this->name; 
    }
    public function getTotalPoints() { 
        return $this->totalPoints; 
    }

    public function setEmail(string $email) { 
        $this->email = $email; 
    }
    public function setName(string $name) { 
        $this->name = $name; 
    }
    public function setTotalPoints(int $points) { 
        $this->totalPoints = $points; 
    }

 // fun dyal had l class mnhom resister / login / logout (requet sql)



}