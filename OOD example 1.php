<?php

/**
 * @author Valera
 * @copyright 2017
 */
#
class baby
{
    public $BoobsSize;
    public $Name;
    private $age;
    
    public function HappyBirthday()
    {
        $this->age++;
        if($this->age>21) print("mne 21");
    }
    public function __construct()
    {
        $this->BoobsSize = 4;
        $this->Name = "Anzhela Petrovna";
        $this->age = 46;
    }
}
print("Constructor example<br>");
print("<br>");
$Nastya = new baby();

$Nastya->BoobsSize = 2;
$Nastya->Name="suka";

$Nastya->HappyBirthday();
//$Nastya->age нельзя!! эйдж - приватное поле    

$A = new baby();

echo "<pre>";
print_r($Nastya);
echo "</pre>";
#
print("Nasledovanie example class avtomat>SomogonniyAparat & CoffeeMachine<br>");
print("<br>");
abstract class avtomat
{
    abstract function GetDrink();
    private $name;
    public function GetName()
    {
        return $name;
    }
}

class SamogonniyApparat extends avtomat
{
    public function GetDrink()
    {
        print("SAMOHON<br>");
    }
}

class CoffeeMachine extends avtomat
{
    public function GetDrink()
    {
        print("odin kofe i odin bulochka<br>");
    }
}

$sam = new SamogonniyApparat();
$sam->GetDrink();

$cof = new CoffeeMachine();
$cof->GetDrink();
print("<br>");

print("class Orc<br>");
print("<br>");
class Orc
{
    public $name;
    public $age;
    
    public static $count = 0;
    
    public function __construct()
    {
        Orc::$count++;
    }    
}

$orc1 = new Orc();
$orc2 = new Orc();
$orc3 = new Orc();
$orc4 = new Orc();

print(Orc::$count." orkov<br>");

function NormalLife()
{
    $x = 10;
    $y = 15;
    print($x." ".$y."<br>");
    $y=$x;
    print($x." ".$y."<br>");
    $y=12;
    print($x." ".$y."<br>");
}
NormalLife();

class WTF
{
    public $num;
}
function CrazyLifeWithOOP()
{
    print("what a shit?<br>");
    $x = new WTF();
    $y = new WTF();
    $x->num = 10;
    $y->num = 15;
    print($x->num." ".$y->num."<br>");
    $y=$x;//y=10
    print($x->num." ".$y->num."<br>");
    $y->num=12;
    print($x->num." ".$y->num." shit<br>");
}
CrazyLifeWithOOP();
/**
echo "<pre>";
print_r($A);
echo "</pre>";
*/

?>