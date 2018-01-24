<?php

/**
 * @author Valera
 * @copyright 2017
 */

function If10()
{
    $a=78;
    $b=53;
    print("<hr>");
    if($a!=$b)
    {
        $a=$b=$a+$b;
        print($a." ".$b."<br>");
    }
    else
    {
        $a=$b=0;
        print($a." + ".$b." = ".$a);
    }
}
//If10();
function Case1()
{
    $x=rand(1,7);
    print("rand x=".$x."<br>");
    switch($x)
    {
        case 1: print("Monday<br>"); break;
        case 2: print("Tuesday<br>"); break;
        case 3: print("Wednesday<br>"); break;
        case 4: print("Thursday<br>"); break;
        case 5: print("Friday<br>"); break;
        case 6: print("Saturday<br>"); break;
        case 7: print("Sunday<br>"); break;
        default : print("X");
    }
}
Case1();
function Case2()
{
    $K=rand(-10,10);
    print("rand K=".$K."<br>");
    switch($K)
    {
        case 1: print("Bad.<br>");
        break;
        case 2: print("Not bad.<br>");
        break;
        case 3: print("Normal.<br>");
        break;
        case 4: print("Good.<br>");
        break;
        case 5: print("Exelent.<br>");
        break;
        default : print("Error.<br>");       
    }
}
Case2();
function Case3()
{
    $x=rand(1,12);
    print("Month: ".$x."<br>");
    switch($x)
    {
        case 12:
        case 1: 
        case 2: print("Winter.<br>");
        break;
        case 3: 
        case 4:
        case 5: print("Spring.<br>");
        break;
        case 6: 
        case 7:
        case 8: print("Summer.<br>");
        break;
        case 9:
        case 10:
        case 11: print("Autumn.<br>");
        break;
        default: print("Error.<br>");
    }
}
Case3();
function Case4()
{
    $x=rand(1,12);
    print("Month: ".$x."<br>");
    switch($x)
    {
        case 1: print("January: 31<br>");
        break;
        case 2: print("February: 28<br>");
        break;
        case 3: print("March: 31<br>");
        break;
        case 4: print("April: 30<br>");
        break; 
        case 5: print("May: 31<br>");
        break;
        case 6: print("June: 30<br>");
        break;
        case 7: print("July: 31");
        break; 
        case 8: print("August: 31");
        break;
        case 9: print("September: 30<br>");
        break;
        case 10: print("October: 31");
        break;
        case 11: print("November: 30");
        break;
        case 12: print("December: 31<br>");
        break;
        default: print("Error.<br>");
    }
}
Case4();
function Case5()
{
    $N=rand(1,4);
    $A=lcg_value();
    $B=lcg_value();
    switch($N)
    {
        case 1: $C=$A+$B;
        break;
        case 2: $C=$A-$B;
        break;
        case 3: $C=$A*$B;
        break;
        case 4: $C=$A/$B;
        break;
        default: print("Error.<br>");
    }
    print("N=".$N." A=".$A." B=".$B."<br>");
    print("C=".$C."<br>");
}
Case5();
function Case6()
{
    $y=lcg_value();
    $x=rand(1,5);
    switch($x)
    {
        case 1: $l=$y/10;
        print("dm<br>");
        break;
        case 2: $l=$y*1000;
        print("km<br>");
        break;
        case 3: $l=$y;
        print("m<br>");
        break;
        case 4: $l=$y/1000;
        print("mm<br>");
        break;
        case 5: $l=$y/100;
        print("sm");
        break;
        default: print("Error.<br>");
    }
    print("y=".$y." variant: ".$x."<br>");
    print("l=".$l." m<br>");    
}
Case6();
function Case7()
{
    $y=lcg_value();
    $x=rand(1,5);
    switch($x)
    {
        case 1: $m=$y;
        print("kg<br>");
        break;
        case 2: $m=$y/1000000;
        print("mg<br>");
        break;
        case 3: $m=$y/1000;
        print("g<br>");
        break;
        case 4: $m=$y*1000;
        print("t<br>");
        break;
        case 5: $m=$y*100;
        print("c<br>");
        break;
        default: print("Error.<br>");        
    }
    print("y=".$y." variant: ".$x."<br>");
    print("m=".$m." kg<br>");  
}
Case7();
function Case8()
{
    $D=rand(1,31);
    $M=rand(1,12);
    switch($D)
    {
        
    }
}
Case8();
function Case9()
{
    
}
Case9();
function Case10()
{
    $C=rand(1,4);
    $N=rand(-1,1);
    switch($C)
    {
        case 1: $x="North";
        break;
        case 2: $x="West";
        break;
        case 3: $x="South";
        break;
        case 4: $x="East";
        break;
        default: $x="Error.<br>";        
    }
    switch($N)
    {
        case 0: $y="go go go<br>";
        break;
        case 1: $y="to left<br>";
        break;
        case -1: $y="to right";
        break;        
        default: $y="Error.<br>"; 
    }
    print("rand C=".$C." rand N=".$N."<br>");
    print(" направление движени€: ".$x." ".$y."<br>");
}
Case10();
function Case11()
{
    $C=rand(1,4);
    $N=rand(-1,1);
    switch($C)
    {
        case 1: $x="North";
        break;
        case 2: $x="West";
        break;
        case 3: $x="South";
        break;
        case 4: $x="East";
        break;
        default: $x="Error.<br>";        
    }
    switch($N)
    {
        case 0: $y=" na 180<br>";
        break;
        case 1: $y="to left<br>";
        break;
        case -1: $y="to right";
        break;        
        default: $y="Error.<br>"; 
    }
    print("rand C=".$C." rand N=".$N."<br>");
    print(" Ќачальное положение: ".$x." ".$y."<br>");
}
//Case11();
function Case12()
{
    $n=rand(1,4);
    $m=lcg_value();
    switch($n)
    {
        case 1: 
        $R=$m;
        $D=2*$R;
        $L=2*M_PI*$R;
        $S=M_PI*$R*$R;
        print("R=".$R."<br>");
        break;
        case 2: 
        $D=$m;
        $R=$D/2;
        $L=2*M_PI*$R;
        $S=M_PI*$R*$R;
        print("D=".$D."<br>");
        break;
        case 3: 
        $L=$m;
        $R=$L/(2*M_PI);
        $D=2*$R;
        $S=M_PI*$R*$R;
        print("L=".$L."<br>");
        break;
        case 4: 
        $S=$m;
        $R=sqrt($S/M_PI);
        $D=2*$R;
        $L=2*M_PI*$R;
        print("S=".$S."<br>");
        break;
        default: print("Error.<br>");
    }
    print("rand n=".$n." rand m=".$m."<br>");
    print("R=".$R." D=".$D." L=".$L." S=".$S."<br>");    
}
Case12();
function Case13()
{
    $n=rand(1,4);
    $m=8.7*lcg_value();
    switch($n)
    {
        case 1:
        $a=$m;
        $c=$a*M_SQRT2;
        $h=$c/2;
        $S=$c*$h/2;
        break;
        case 2:
        $c=$m;
        $a=$c*M_SQRT1_2;
        $h=$c/2;
        $S=$c*$h/2;
        break;
        case 3:
        $h=$m;
        $c=2*$h;
        $S=$c*$h/2;
        $a=$c*M_SQRT1_2;
        break;
        case 4:
        $S=$m;
        $c=2*sqrt($S);
        $h=$c/2;
        $a=$c*M_SQRT1_2;
        break;
        default: print("Error.<br>");
    }
    print("rand n=".$n." rand m=".$m."<br>");
    print("a=".$a." c=".$c." h=".$h." S=".$S."<br>");
}
Case13();
function Case14()
{
    $n=rand(1,4);
	$m=6.7*lcg_value();
	switch($n)
	{
		case 1:
		$a=$m;
		$R1=$a*M_SQRT3/6;
		$R2=2*$R1;
		$S=$a*$a*M_SQRT3/4;
		break;
		case 2:
		$R1=$m;
		$R2=2*$R1;
		$a=$R1*6/M_SQRT3;
		$S=$a*$a*M_SQRT3/4;
		break;
		case 3:
		$R2=$m;
		$R1=$R2/2;
		$a=$R1*6/M_SQRT3;
		$S=$a*$a*M_SQRT3/4;
		break;
		case 4:
		$S=$m;
		$a=2*sqrt($S)/sqrt(sqrt(3));
		$R1=$a*M_SQRT3/6;
		$R2=2*$R1;
		break;
		default: print("Error.<br>");
	}
	print("rand n=".$n." rand m=".$m."<br>");
    print("a=".$a." R1=".$R1." R2=".$R2." S=".$S."<br>");
}
Case14();
function Case15()
{
	$n=rand(6,14);
	$m=rand(1,4);
	switch($n)
	{
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
		case 6:
		case 7:
		case 8:
		case 9:
		case 10:
		break;
		case 11:
		$n="J";		
		break;
		case 12:
		$n="Queen";
		break;
		case 13:
		$n="King";
		break;
		case 14:
		$n="A";
		break;
		default: print("Error.<br>");
	}
	switch($m)
	{
		case 1:
		$mast="Pika";
		break;
		case 2:
		$mast="Trefa";
		break;
		case 3:
		$mast="Bubna";
		break;
		case 4:
		$mast="Cherva";
		break;
		default: print("Error.<br>");
	}
	print("rand n=".$n." rand m=".$m."<br>");
    print("Card: ".$n." ".$mast."<br>");
}
case15();
function Case16()
{
	$n=rand(20,69);
	$a=(int)($n/10);
	$b=$n%10;
	switch($a)
	{
		case 2:
		$m=" двадцать";
		break;
		case 3:
		$m=" тридцать";
		break;
		case 4:
		$m=" сорок";
		break;
		case 5:
		$m=" пятдесят";
		break;
		case 6:
		$m=" шестдесят";
		break;
		default: print("Error.<br>");
	}
	switch($b)
	{
		case 1:
		$l=" один год";
		break;
		case 2:
		$l=" два года";
		break;
		case 3:
		$l=" три года";
		break;
		case 4:
		$l=" четыре года";
		break;
		case 5:
		$l=" пять лет";
		break;
		case 6:
		$l=" шесть лет";
		break;
		case 7:
		$l=" семь лет";
		break;
		case 8:
		$l=" восем лет";
		break;
		case 9:
		$l=" девять лет";
		break;
		default: print("Error.<br>");
	}
	print("Age: ".$n." ".$m." ".$l."<br>");
}
Case16();
function Case17()
{
	$n=rand(10,40);
	$a=(int)($n/10);
	$b=$n%10;
	switch($n)
	{
		case 1:
		$x=" одно";
		break;
		case 2:
		$x=" два";
		break;
		case 3:
		$x=" три";
		break;
		case 4:
		$x=" четыре";
		break;
		case 5:
		$x=" пять";
		break;
		case 6:
		$x=" шесть";
		break;
		case 7:
		$x=" семь";
		break;
		case 8:
		$x=" восемь";
		break;
		case 9:
		$x=" девять";
		break;
		case 1:
		$x=" десять";
		break;
		
		case 10:
		$x=" десять";
		case 11:
		$x=" одинадцать";
		case 12:
		$x=" двенадцать";
		case 13:
		$x=" тридцать";
		case 14:
		$x=" четырнадцать";
		case 15:
		$x=" пятнадцать";
		case 16:
		$x=" шестнадцать";
		case 17:
		$x=" семнадцать";
		case 18:
		$x=" восемнадцать";
		case 19:
		$x=" девятнадцать";
		$k=" восемнадцать учебных заданий";
		/*
		18 учебных заданий
		23 учебных задания
		31 тридцать одно учебное задание
		**/
		break;
		case 20:
		$k=" двадцать";
		break;
		case 30:
		$k=" тридцать";
		break;
		case 40:
		$k=" сорок";
		break;
		default: print("Error.<br>");
	}
}
Case17();
function Case18()
{
		$n=rand(100,999);
		$a=(int)($n/100);
		$b=(int)($n/10);
		$c=$n/100;

}
Case18();
function Case19()
{
	
}
Case19();
function Case20()
{
	$D=rand(1,31);
	$M=rand(1,12);
}
Case20();
?>
