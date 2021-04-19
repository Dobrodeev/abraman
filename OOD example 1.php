<?php

/**
 * @author Kirill Swiderscky
 * @copyright 2017
 */

#

/**
 * Class baby
 */
class baby
{
    /**
     * @var int
     */
    public $BoobsSize;
    /**
     * @var string
     */
    public $Name;
    /**
     * @var int
     */
    private $age;

    /**
     * baby constructor.
     */
    public function __construct()
    {
        $this->BoobsSize = 4;
        $this->Name = "Anzhela Petrovna";
        $this->age = 46;
    }

    /**
     *
     */
    public function HappyBirthday()
    {
        $this->age++;
        if ($this->age > 21) {
            print("mne 21");
        }
    }


}

print("Constructor example<br>");
print("<br>");
$Nastya = new baby();

$Nastya->BoobsSize = 2;
$Nastya->Name = "suka";

$Nastya->HappyBirthday();
//$Nastya->age ������!! ���� - ��������� ����    

$A = new baby();

echo "<pre>";
print_r($Nastya);
echo "</pre>";
#
print("Nasledovanie example class avtomat>SomogonniyAparat & CoffeeMachine<br>");
print("<br>");

/**
 * Class avtomat
 */
abstract class avtomat
{
    /**
     * @return mixed
     */
    abstract function GetDrink();

    /**
     * @var
     */
    private $name;

    /**
     * @return mixed
     */
    public function GetName()
    {
        return $name;
    }
}

/**
 * Class SamogonniyApparat
 */
class SamogonniyApparat extends avtomat
{
    /**
     * @return mixed|void
     */
    public function GetDrink()
    {
        print("SAMOHON<br>");
    }
}

/**
 * Class CoffeeMachine
 */
class CoffeeMachine extends avtomat
{
    /**
     * @return mixed|void
     */
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
    $y = $x;
    print($x." ".$y."<br>");
    $y = 12;
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
    $y = $x;//y=10
    print($x->num." ".$y->num."<br>");
    $y->num = 12;
    print($x->num." ".$y->num." shit<br>");
}

CrazyLifeWithOOP();
/**
 * echo "<pre>";
 * print_r($A);
 * echo "</pre>";
 */

?>