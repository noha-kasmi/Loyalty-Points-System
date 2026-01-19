<?php

class points_transactions{

//attributs
    private int $id;
    private int $user_id;
    private string $type; // earned | redeemed | expired
    private int $amount;
    private string $description;
    private int $balance_after;
    private string $createdat;

//construct
    public function __construct(int $id,int $user_id,string $type,int $amount,string $description,int $balance_after,string $createdat) {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->type = $type;
        $this->amount = $amount;
        $this->description = $description;
        $this->balance_after = $balance_after;
        $this->createdat = $createdat;
    }

    //getters 
    public function getId() {
        return $this->id;
    }

    public function getUserId(){
        return $this->user_id;
    }

    public function getType(){
        return $this->type;
    }

    public function getAmount(){
        return $this->amount;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getBalanceAfter(){
        return $this->balance_after;
    }

    public function getCreatedAt(){
        return $this->createdat;
    }

    //setters 
    public function setUserId(int $user_id){
        $this->user_id = $user_id;
    }

    public function setType(string $type){
        $this->type = $type;
    }

    public function setAmount(int $amount){
        $this->amount = $amount;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }

    public function setBalanceAfter(int $balance_after){
        $this->balance_after = $balance_after;
    }

    public function setCreatedAt(string $createdat){
        $this->createdat = $createdat;
    }

    public function calculatePoints(float $amount): int {

    }

    public function addTransaction(int $userId, int $amount, string $type): bool {

    }

    public function getHistory(int $userId): array {

    }
    
}