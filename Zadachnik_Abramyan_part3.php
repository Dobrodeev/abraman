<?php

/**
 * @author Valera
 * @copyright 2017
 */

function Boolean0(){
    $x = 5;
    $y = 7;
    if($x>$y) echo "TRUE";
    else echo "FALSE";
    echo "<br>";
}
Boolean0();
function Boolean1()
{
    $A=7;
    if($A>0)
        print("TRUE");
    else 
        print("False");
    echo "<br>";
}
Boolean1();
function Boolean2()
{
    $A=7;
    if($A%2)
    {
        print("A- нечетное ".$A."<br>");
    }
    else print("A - четное ".$A."<br>");
}
Boolean2();
function Boolean3()
{
    $A=6;
    if($A%2==0)
    {
        print("A- четное ".$A."<br>");
    }
    else print("A - нечетное ".$A."<br>");
}
Boolean3();
function Boolean4()
{
    $A=6;
    $B=3;
    if($A>2 && $B<=3)
    {
        print($A."<2 && ".$B."<=3<br>");
    }
    else 
    print($A." ".$B." No<br>");
}
Boolean4();
function Boolean5()
{
    //A>=0 && B<-2
    $A=6;
    $B=7;
    if($A>=0 && $B<-2)
    print("True: ".$A.">=0 && ".$B." <-2<br>");
    else
    print("False: ".$A.">=0 && ".$B." <-2<br>");
}
Boolean5();
function Boolean6()
{
    $A=7;
    $B=3;
    $C=-16;
    if($A<$B and $B<$C)
        print("TRUE<br>");
    else 
        print("False<br>");
    echo "<br>";
}
Boolean6();
function Boolean7()
{
    //B-middle of A & C: A<B & B<C
    $A=7;
    $B=8;
    $C=5;
    if( ($A<$B && $B<$C) || ($A>$B && $B>$C))
    print("TRUE: ".$A."<".$B."<".$C."<br>");
    else
    print("FALSE: ".$A."<".$B."<".$C."<br>");
}
Boolean7();
function Boolean8()
{
    $A=11;
    $B=9;
    if($A%2 && $B%2)
        print("TRUE");
    else 
        print("False");
    echo "<br>";
}
Boolean8();
function Boolean9()
{
    $A=6;
    $B=8;
    if($A%2 || $B%2)
    print("TRUE: ".$A." this one нечетное<br>");
    else
    print("FALSE: ".$A." ".$B." нету ни одного нечетного<br>");
}
Boolean9();
function Boolean10()
{
    $A=11;
    $B=4;
    if(($A+$B)%2)
        print("TRUE: ".$A." ".$B."<br>");
    else 
        print("False: ".$A." ".$B."<br>");
    echo "<br>";
}
Boolean10();
function Boolean11()
{
    $A=8;
    $B=22;
    if(($A%2)==0 && ($B%2)==0)
        print("TRUE: ".$A." ".$B." оба четные. <br>");
    else
        print("FALSE: ".$A." ".$B." оба нечетные. <br>");
}
Boolean11();
function Boolean12()
{
    $A=7;
    $B=29;
    $C=2;
    if($A>0 && $B>0 && $C>0)
        print("all >0: ".$A." ".$B." ".$C."<br>");
    else
        print("one of this<0: ".$A." ".$B." ".$C."<br>");
}
Boolean12();
function Boolean13()
{
    $A=-7;
    $B=-29;
    $C=-2;
    print("<hr>");
    if($A>0 || $B>0 || $C>0)
        print("one >0: ".$A." ".$B." ".$C."<br>");
    else
        print("no one>0: ".$A." ".$B." ".$C."<br>");
}
Boolean13();
function Boolean14()
{
    $A=-7;
    $B=-29;
    $C=-2;
    print("<hr>");
    if(($A>0 && ($B<0 && $C<0)) || ($B>0 && ($A<0 && $C<0)) || ($C>0 && ($A<0 && $B<0)))
        print("only one >0: ".$A." ".$B." ".$C."<br>");
    else
        print("no one>0: ".$A." ".$B." ".$C."<br>");
}
Boolean14();
function Boolean15()
{
    $A=-7;
    $B=29;
    $C=2;
    print("<hr>");
    if(($A<0 && ($B>0 && $C>0)) || ($B<0 && ($A>0 && $C>0)) || ($C<0 && ($A>0 && $B>0)))
        print("only two >0: ".$A." ".$B." ".$C."<br>");
    else
        print("no two>0: ".$A." ".$B." ".$C."<br>");
}
Boolean15();
function Boolean16()
{
    $A=98;
    print("<hr>");
    if(!($A%2) && $A<100 && $A>9)
        print("TRUE");
    else 
        print("False");
    echo "<br>";
}
Boolean16();
function Boolean17()
{
    $A=981;
    print("<hr>");
    print("A=".$A."<br>");
    if(!($A%2) && $A<1000 && $A>99)
        print("TRUE");
    else 
        print("False");
    echo "<br>";
}
Boolean17();
function Boolean18()
{
    $A=-7;
    $B=29;
    $C=-7;
    print("<hr>");
    if($A==$B || $A==$C || $B==$C)
        print("совпадают: ".$A." ".$B." ".$C."<br>");
    else
        print("нет совпадений: ".$A." ".$B." ".$C."<br>");
}
Boolean18();
function Boolean19()
{
    $A=-7;
    $B=29;
    $C=-29;
    print("<hr>");
    if($A==-$B || $A==-$C || $B==-$C)
        print("есть противоположные: ".$A." ".$B." ".$C."<br>");
    else
        print("нет противоположных: ".$A." ".$B." ".$C."<br>");
}
Boolean19();
function Boolean20()
{
    $X=977;
    $A=(int)($X/100);
    $B=(int)($X/10%10);
    $C=$X%10;
    print("<hr>");
    print($X." ".$A." ".$B." ".$C."<br>");
    if($A!=$B && $B!=$C)
        print("TRUE<br>");
    else
            print("FALSE<br>");
    /*if($A==$B || $A==$C || $B==$C)
        print("совпадают: ".$A." ".$B." ".$C."<br>");
    else
        print("нет совпадений: ".$A." ".$B." ".$C."<br>");
        */
}
Boolean20();
function Boolean21()
{
    $e=433;
    $e1=(int)($e/100);
    $e2=(int)($e%10/10);
    $e3=$e%10;
    print("<hr>");
    print("Boolean21<br>");
    print($e.": ".$e1." ".$e2." ".$e3."<br>");
    if($e1<$e2 && $e2<$e3)
        print("TRUE: e1<e2<e3: ".$e1."<".$e2."<".$e3."<br>");
    else
        print("FALSE:".$e1."<".$e2."<".$e3."<br>");
}
Boolean21();
function Boolean22()
{
    $A=918;
    $x=(int)($A/100);
    $y=(int)($A/10%10);
    $z=$A%10;
    print("<hr>");
    print($A." ".$x." ".$y." ".$z."<br>");
    if(($x>$y && $y>$z) || ($x<$y && $y<$z))
        print("TRUE");
    else 
        print("False");
    echo "<br>";
}
Boolean22();
function Boolean23()
{
    $a=2442;
    $x=(int)($a/1000);
    $y=(int)($a/100%10);
    $z=(int)($a/10%10);
    $t=$a%10;
    print("<hr>");
    print($a.": ".$x." ".$y." ".$z." ".$t."<br>");
    if($x==$t && $y==$z)
        print("TRUE<br>");
    else
        print("FALSE<br>");
}
Boolean23();
function Boolean24()
{
    $a=-3;
    $b=17;
    $c=7;
    $D=$b*$b-4*$a*$c;
    print("<hr>");
    print("a=".$a." b=".$b." c=".$c." D=b^2-4*a*c=".$D."<br>");
    if($D>=0)
        print("TRUE<br>");
    else
        print("FALSE<br>");        
}
Boolean24();
function Boolean25()
{
    $x=rand(0,100);
    $y=rand(-19,57);
    if($x<0 && $y>0)
        print("second quater.<br>");
    else 
        print("No.<br>");
}
Boolean25();
function Boolean26()
{
    $x=6;
    $y=-17;
    if($x>0 && $y<0)
        print("4 quater<br>");
    else
        print("No.<br>");
}
Boolean26();
function Boolean27()
{
    $x=6;
    $y=-4;
    if($x<0 && $y>0)
        print("3 quater<br>");
    else
        print("No<br>");        
}
Boolean27();
function Boolean28()
{
    $x=-4;
    $y=7;
    if(($x>0 && $y>0) || ($x<0 && $y<0))
        print("3 quater");
    else
        print("FALSE");
}
Boolean28();
function Boolean29()
{
    $x1=3;
    $y1=2;
    $x2=17;
    $y2=9;
    $x=5;
    $y=6;
    if($x>$x1 && $x<$x2 && $y>$y1 && $y<$y2)
        print("Inside.<br>");
    else
        print("Outside.<br>");
}
Boolean29();
function Boolean30()
{
    $a=7;
    $b=19;
    $c=23;
    if($a==$b && $b==$c)
        print("TRUE<br>");
    else
        print("FALSE<br>");
}
Boolean30();
function Boolean31()
{
    $a=7;
    $b=19;
    $c=23;
    if($a==$b || $b==$c || $a==$c)
        print("TRUE<br>");
    else
        print("FALSE<br>");
}
Boolean31();
function Boolean32()
{
    $a=6;
    $b=19;
    $c=31;
    if(($a*$a+$b*$b==$c*$c) || ($b*$b+$c*$c=$a*$a) || ($a*$a+$c*$c=$b*$b))
        print("TRUE 90 grad.<br>");
    else
        print("FALSE");
}
Boolean32();
function Boolean33()
{
    $a=17;
    $b=37;
    $c=47;
    if(($a<$b+$c) || ($b<$a+$c) || ($c<$a+$b))
        print("TRUE.<br>");
    else
        print("FALSE.<br>");
}
Boolean33();
function Boolean34()
{
    $x=rand(1,8);
    $y=rand(1,8);
    if(($x+$y)%2)
        print("FALSE: black.<br>");
    else
        print("TRUE: white.<br>");
    print("x=".$x." y=".$y."<br>");
}
Boolean34();
function Boolean35()
{
    $x1=rand(1,8);
    $y1=rand(1,8);
    $x2=rand(1,8);
    $y2=rand(1,8);
    if((($x1+$y1)%2 && ($x2+$y2)%2) || (($x1+$y1)%2==0 && ($x2+$y2)%2==0))
        print("TRUE: one color.<br>");
    else
        print("FALSE: different color.<br>");
    print("x1=".$x1." y1=".$y1."<br>");
    print("x=2".$x2." y2=".$y2."<br>");
    $c1=($x1+$y1)%2;
    $c2=($x2+$y2)%2;
    print("($x1+$y1)%2=".$c1." ($x2+$y2)%2=".$c2."<br>");
}
Boolean35();
function Boolean36()
{
    $x1=rand(1,8);
    $y1=rand(1,8);
    $x2=rand(1,8);
    $y2=rand(1,8);
    if(($x1==$x2) || ($y1==$y2))
        print("TRUE: can.<br>");
    else
        print("FALSE: can't.<br>");
    print("x1=".$x1." y1=".$y1."<br>");
    print("x=2".$x2." y2=".$y2."<br>");
}
Boolean36();
function Boolean37()
{
    $x1=rand(1,8);
    $y1=rand(1,8);
    $x2=rand(1,8);
    $y2=rand(1,8);
    if(($x1==$x2) || ($y1==$y2))
        print("TRUE: can.<br>");
    else
        print("FALSE: can't.<br>");
    print("x1=".$x1." y1=".$y1."<br>");
    print("x=2".$x2." y2=".$y2."<br>");
}

?>