<?php

class Bank{
    private $balance;
    public function Deposit($amount){
        $this->balance+=$amount;
    }
    public function Withdraw($amount){
        if($this->balance>$amount){
            $this->balance-=$amount;
        }else{
            throw new Exception("you dont have such money!");
        }
    }
    public function ShowBalance(){
        return $this->balance;
    }
}
$ali=new Bank();
$ali->Deposit(1500);
echo $ali->ShowBalance();
echo "<br>";
$ali->Withdraw(1000);
echo $ali->ShowBalance();
$ali->Withdraw(1600);

