<?php

/**
 * @author Valera
 * @copyright 2017
 */

class bankDeposit
{
    private $amountOfMoney;
    public function GetAmountOfMoney()
    {
        return $this->amountOfMoney;
    }
    private $name;
    private $id;
    public function GetID(){
        return $this->id;
    }
    
    public function CanAddMoney($addedMoney)
    {
        return $addedMoney>0;
    }
    public function AddMoney($addedMoney)
    {
        if($addedMoney>0)
        {
            $this->amountOfMoney += $addedMoney;
            return true;
        }
        else
        {
            //bla bla
            return fasle;
        }
    }
    public function CanSniatMoney($minusMoney)
    {
        if($minusMoney<0)
            return false;
            
        if($minusMoney>$this->amountOfMoney)
            return false;
        
        //everything OK
        return true;
    }
    public function SniatMoney($minusMoney)
    {
        if($minusMoney<0)
            return false;
            
        if($minusMoney>$this->amountOfMoney)
            return false;
        
        //everything OK
        $this->amountOfMoney -= $minusMoney;
        return true;
    }
    
    public function __construct($startCash, $name, $id)
    {
        $this->amountOfMoney = $startCash;
        $this->name = $name;
        $this->id = $id;
    }
}

class Transaction
{   
    private $id;
    private $sender;
    private $reciever;
    private $sendedMoney;
    private $status;
    private $time;
    
    public function __construct($id, &$sender, &$reciever, $sendedMoney)
    {
        $this->id = $id;
        $this->sender = $sender;
        $this->reciever = $reciever;
        $this->sendedMoney = $sendedMoney;
        
        $time = time();
        if(!$sender->CanSniatMoney($sendedMoney))
        {
            $this->status = false;
            return;
        }
        if(!$reciever->CanAddMoney($sendedMoney))
        {
            $this->status = false;
            return;
        }
        
        $sender->SniatMoney($sendedMoney);
        $reciever->AddMoney($sendedMoney);
        
    }
    public function Show()
    {
        print( "trans".$this->id."<br>");
        print(" ".$this->sender->GetID()."<br>") ;
        print(" ".$this->reciever->GetID()."<br>") ;
        print(" ".$this->sendedMoney."<br>") ;
        print(" ".$this->status."<br>") ;
        print(" ".$this->time."<br>") ;
    }
}

class Bank
{
    //private $accounts;
    public $accounts;
    private $transactions; //array of trans
    private $count;
    
    private $numberOfClients;
    public function GetNumberOfClients()
    {
        return $this->numberOfClients;
    }
    
    public function DoSending($numberOfSending, $numberOfReciever, $amountOfMoney)
    {
        $sender = $this->accounts[$numberOfSending];
        $reciever = $this->accounts[$numberOfReciever];
        $this->transactions[$this->count] = new Transaction($this->count, $sender, $reciever, $amountOfMoney);
        $this->count++;
    }    
    
    public function __construct(){
        $this->count=0;
        
        $this->numberOfClients = rand(5, 12);
        
        for($i=0; $i<$this->numberOfClients; $i++)
        {
            $name = "hakdjhasd".$this->numberOfClients;
            $money = rand(1000, 1500000);
            $this->accounts[$i] = new bankDeposit($money, $name, $i);
        }
    }
    
    public function ShowTrans($i)
    {
            print("<br>");
            $this->transactions[$i]->Show();
            print("<br>");
     
    }
}

function main(){
    print("hello<br>");
    $Privat = new Bank();
    
    $rounds = rand(20, 200);
    
    for($i=0; $i<$rounds; $i++)
    {
        $N = $Privat->GetNumberOfClients();
        $ind1 = rand(0, $N-1);
        $ind2 = rand(0, $N-2);
        if($ind2>=$ind1) $ind2++;
        
        $money = rand(100, 10000);
        
        $Privat->DoSending($ind1, $ind2, $money);
        
        $Privat->ShowTrans($i);    
        
        //for debug    
        foreach($Privat->accounts as $ac)
        {
            print($ac->GetAmountOfMoney()." ");
        }
        print("<br>");
    }
     
    
}
main();
?>