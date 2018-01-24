<?php

/**
 * @author Valera
 * @copyright 2017
 */
function If1()
{
    $a=17;
    if($a>0)
    {
        $a++;
        print("a=".$a."<br>");
    }
    else
        print("a=".$a);
}
If1();
function If2()
{
    $a=9566;
    if($a>0)
        print("a=".++$a."<br>");
    else
    {
        $a=$a-2;
        print("a=".$a."<br>");
    }   
}
If2();
function If3()
{
    $x=rand(-100,100);
    print("random x=".$x."<br>");
    if($x>0)
        $x++;
    elseif($x<0)
        $x-=2;
    else
        $x=10;
    print("x=".$x."<br>");        
}
If3();
function If4()
{
    $a=rand(-10,10);
    $b=rand(-20,20);
    $c=rand(-30,30);
    print("random a=".$a." random b=".$b." random c=".$c."<br>");
    if($a>0 && $b>0 && $c>0)
        print("3 numbers>0.<br>");
    elseif(($a>0 && $b>0 && $c<0) || ($a>0 && $c>0 && $b<0) || ($b>0 && $c>0 && $a<0))
        print("2 numbers>0.<br>");
    elseif(($a>0 && $b<0 && $c<0) || ($b>0 && $a<0 && $a<0) || ($c>0 && $a<0 && $b<0))
        print("1 number>0.<br>");
    else
        print("Zero.<br>");
}
If4();
function If5()
{
    $a=rand(-10,10);
    $b=rand(-20,20);
    $c=rand(-30,30);
    print("random a=".$a." random b=".$b." random c=".$c."<br>");
    if($a>0 && $b>0 && $c>0)
        print("3 numbers>0.<br>");
    elseif(($a>0 && $b>0 && $c<0) || ($a>0 && $c>0 && $b<0) || ($b>0 && $c>0 && $a<0))
        print("2 numbers>0 & 1 number<0.<br>");
    elseif(($a>0 && $b<0 && $c<0) || ($b>0 && $a<0 && $a<0) || ($c>0 && $a<0 && $b<0))
        print("1 number>0 & 2 numbers<0.<br>");
    elseif($a<0 && $b<0 && $c<0)
        print("3 numbers<0.<br>");
    else
        print("zero.<br>");
}
If5();
function If6()
{
    $a=rand(-100,100);
    $b=rand(-100,150);
    print("random a=".$a." random b=".$b."<br>");
    if($a<$b)
        print("a<b: ".$a." < ".$b."<br>");
    elseif($a>$b)
        print("a>b: ".$a." > ".$b."<br>");
    else
        print("a=b: ".$a." = ".$b."<br>");
}
If6();
function If7()
{
    
}
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
If10();
function If11()
{
    $a=rand(-100,100);
    $b=rand(-100,150);
    print("If11()<br>");
    print("rand a=".$a." rand b=".$b."<br>");
    if($a!=$b)
    {
        if($a>$b)
            $b=$a;
        else
            $a=$b;
    }
    else
        $a=$b=0;
    print("a=".$a." b=".$b."<br>");    
}
If11();
function If12()
{
    $a=rand(-100,100);
    $b=rand(-150,50);
    $c=rand(-80,180);
    print("rand a=".$a." rand b=".$b." rand c=".$c."<br>");
    if($a<$b && $a<$c)
        print("min=".$a."<br>");
    elseif($b<$a && $b<$c)
        print("min=".$b."<br>");
    elseif($c<$a && $c<$b)
        print("min=".$c."<br>");
    else print("No min.<br>");
}
If12();
function If13()
{
    $a=rand(-100,100);
    $b=rand(-150,50);
    $c=rand(-80,180);
    print("rand a=".$a." rand b=".$b." rand c=".$c."<br>");
    if(($a<$b && $a>$c) || ($a<$c && $a>$b))
        print("middle: a=".$a."<br>");
    elseif(($b<$a && $b>$c) || ($b<$c && $b>$a))
        print("middle b=".$b."<br>");
    elseif(($c<$a && $c>$b) || ($c<$b && $c>$a))
        print("middle c=".$c."<br>");
    else print("No middle.<br>");
}
If13();
function If14()
{
    $a=rand(-100,100);
    $b=rand(-150,50);
    $c=rand(-80,180);
    print("rand a=".$a." rand b=".$b." rand c=".$c."<br>");
    if($a<$b && $b<$c)
        print("min: a=".$a." max: c=".$c."<br>");
    elseif($b<$a && $a<$c)
        print("min: b=".$b." max: c=".$c."<br>");
    elseif($c<$a && $a<$b)
        print("min: c=".$c." max: b=".$b."<br>");
    elseif($a<$c && $c<$b)
        print("min: a=".$a." max: b=".$b."<br>");
    elseif($c<$b && $b<$a)
        print("min: c=".$c." max: a=".$a."<br>");
    elseif($b<$c && $c<$a)
        print("min: b=".$b." max: a=".$a."<br>");
    else
        print("No min & max.<br>");
}
If14();
function If15()
{
    $a=rand(-100,100);
    $b=rand(-150,50);
    $c=rand(-80,180);
    print("rand a=".$a." rand b=".$b." rand c=".$c."<br>");
    if($a<$b && $a<$c)
        $s=$b+$c;
    elseif($b<$a && $b<$c)
        $s=$a+$c;
    elseif($c<$a && $c<$b)
        $s=$a+$b;
    else
        print("No 2 max.<br>");
    print("s=".$s."<br>");
}
If15();
function If16()
{
    $a=lcg_value();
    $b=lcg_value();
    $c=lcg_value();
    print("rand a=".$a." rand b=".$b." rand c=".$c."<br>");
    if($a<$b && $b<$c)
    {
        $a*=2;
        $b*=2;
        $c*=2;
    }
    else
    {
        $a*=-1;
        $b*=-1;
        $c*=-1;
    }
    print("rand a=".$a." rand b=".$b." rand c=".$c."<br>");
}
If16();
function If17()
{
    $a=lcg_value();
    $b=lcg_value();
    $c=lcg_value();
    print("rand a=".$a." rand b=".$b." rand c=".$c."<br>");
    if(($a<$b && $b<$c) || ($a>$b && $b>$c))
    {
        $a*=2;
        $b*=2;
        $c*=2;
    }
    else
    {
        $a*=-1;
        $b*=-1;
        $c*=-1;
    }
    print("rand a=".$a." rand b=".$b." rand c=".$c."<br>");
}
If17();
function If18()
{
    $a=rand(-100,100);
    $b=rand(-150,50);
    $c=rand(-80,180);
    print("rand a=".$a." rand b=".$b." rand c=".$c."<br>");
    if($a==$b && $a!=$c)
        print("#3: c=".$c."<br>");
    elseif($a==$c && $a!=$b)
        print("#2: b=".$b."<br>");
    elseif($b==$c && $b!=$a)
        print("#1: a=".$a."<br>");
    else
        print("Нет равных.<br>");
}
If18();
function If19()
{
    $a=rand(-100,100);
    $b=rand(-150,50);
    $c=rand(-80,180);
    $d=rand(-90,130);
    print("rand a=".$a." rand b=".$b." rand c=".$c." rand d=".$d."<br>");
    if($a==$b && $b==$c && $a!=$d)
        print("#4: d=".$d."<br>");
    elseif($a==$b && $b==$c && $a!=$c)
        print("#3: c=".$c."<br>");
    elseif($b==$c && $c==$d && $b!=$a)
        print("#1: a=".$a."<br>");
    elseif($d==$a && $a==$c && $d!=$b)
        print("#2: b=".$b."<br>");
    else
        print(" Нет равных: ".$a." ".$b." ".$c." ".$d."<br>");          
}
If19();
function If20()
{
    $a=rand(1,5);
    $b=rand(6,10);
    $c=rand(6,10);
    print("********* If20() ***********<br>");
    print("a=".$a." b=".$b." c=".$c."<br>");
    if(($b-$a)>($c-$a)) print(" точка с ближе к а<br>");
    else print(" точка b ближе к а<br>"); 
}
If20();
function If20a()
{
    $a=rand(1,5);
    $b=rand(6,10);
    $c=rand(6,10);
    print("********* If20a() f(x) = x ? y : z ***********<br>");
    print("a=".$a." b=".$b." c=".$c."<br>");
    ($b-$a)>($c-$a) ? print(" точка с ближе к а<br>") : print(" точка b ближе к а<br>");
}
If20a();
/*function If21()
{
    print("********* If21() f(x) = x ? y : z ***********<br>");
    $x=rand(-4,4);
    $y=rand(-3,3);
    print("x=".$x." y=".$y."<br>");
    print(" точка (".$x.",".$y.")<br>");
    if($x=0 && $y=0) print(" Начало координат 0<br>");
    elseif($x==0 || $y=0) print(" На одной из осей 1<br>");
    elseif($x!=0 && $y!=0) print(" Не лежит на координатных осях 3<br>");
    else print(" Может лежать на коорд. осях <br>");
    
}
If21();
**/
function If21()
{
    print("********* If21() f(x) = x ? y : z ***********<br>");
    $x=rand(-4,4);
    $y=rand(-3,3);
    print("x=".$x." y=".$y."<br>");
    print(" точка (".$x.",".$y.")<br>");
    if($x==0 && $y==0) print(" Начало координат 0<br>");
    elseif($x==0) print(" На одной из осей OX: 1<br>");
    elseif($y==0) print(" На одной из осей OY: 2<br>");
    else print(" Не лежит на коорд. осях <br>");
    
}
If21();
function If22()
{
    print("********* If22() f(x) = x ? y : z ***********<br>");
    $x=rand(-4,4);
    $y=rand(-3,3);
    print("x=".$x." y=".$y."<br>");
    print(" точка (".$x.",".$y.")<br>");
    if($x>0 && $y>0) print("1 quater.<br>");
    elseif($x<0 && $y>0) print("2 quater.<br>");
    elseif($x<0 && $y<0) print("3 quater.<br>");
    elseif($x>0 && $y<0) print("4 quater.<br>");
    else print(" На оси. <br>");
}
If22();
function If23()
{
    print("********* If23() f(x) = x ? y : z ***********<br>");
    $x1=2;
    $y1=3;
    $x2=2;
    $y2=7;
    $x3=5;
    $y3=7;
    print("(x,y): (".$x1.",".$y1.") (".$x2.",".$y2.") (".$x3.",".$y3.")<br>");
    $x4=$x3-$x1;
    $y4=$y3-$y1;
    print("4 вершина: (".$x4.",".$y4.")<br>");
}
If23();
function If27()
{
    print("******** if27() **********<br>");    
    $x=2.6;
    $y=((int)$x)%2;
    print("y=".$y."<br>");
    print("x=".$x."<br>");
    if($x<0)
        print(0);
    elseif(((int)$x)%2==0)
        print(1);
    else 
        print(-1); 
}
function If24()
{
    print("******** if24() **********<br>"); 
    $x=rand(-3,3);
    print("x=".$x."<br>");
    if($x>0) $y=2*sin($x);
    else $y=6-$x;
    print("y=".$y."<br>");
}
If24();
function If24b()
{
    print("******** if24b() **********<br>");
    print("x>0 : y=2*sinx; x<=0: y=6-x.<br>"); 
    $x=rand(-3,3);
    print("x=".$x."<br>");
    $x>0 ? $y=2*sin($x) : $y=6-$x;
    print("y=".$y."<br>");
}
If24b();
function If25b()
{
    print("******** if24b() **********<br>");
    print("x>-2 x<2 : y=2*x; else y=-3x.<br>"); 
    $x=rand(-3,3);
    print("x=".$x."<br>");
    //$x>-2 && $x<2 ? $y=2*$x : $y=-3*$x;
    $y= $x>-2 && $x<2 ? 2*$x : -3*$x; 
    print("y=".$y."<br>");
}
If25b();
function If26b()
{
    print("******** if26b() **********<br>");
    print("x<=0 : y=-x; x>0, x<2: y=x*x; x>=2 : y=4.<br>"); 
    $x=rand(-3,3);
    print("x=".$x."<br>");
    if($x<=0) $y=-$x;
    elseif($x>0 && $x<2) $y=$x*$x;
    else $y=4;
    print("y=".$y."<br>");
}
If26b();

If27();
function If29()
{
    print("******** if29() **********<br>"); 
    $x=rand(-10,10);
    print("x=".$x."<br>");
    if($x<0 && $x%2==0) print(" Отринцательное четное число.<br>");
    elseif($x<0 && $x%2!=0) print(" Отрицательное нечетное число.<br>");
    elseif($x==0) print(" Нулевое чило.<br>");
    elseif($x>0 && $x%2==0) print(" Положительное четное число.<br>");
    elseif($x>0 && $x%2!=0) print(" Положительное нечетное число.<br>");
    else print("Error.<br>");
}
If29();
function If29b()
{
    print("******** if29b() switch() **********<br>"); 
    $x=rand(-5,5);
    print("x=".$x."<br>");
    switch($x)
    {
        case -5: print(" Отрицательное нечетное число.<br>");
        break;
        case -4: print(" Отринцательное четное число.<br>");
        break;
        case -3: print(" Отрицательное нечетное число.<br>");
        break;
        case -2: print(" Отринцательное четное число.<br>");
        break;
        case -1: print(" Отрицательное нечетное число.<br>");
        break; 
        case 0: print(" Нулевое чило.<br>");
        break;
        case 1: print(" Положительное нечетное число.<br>");
        break;
        case 2: print(" Положительное четное число.<br>");
        break;
        case 3: print(" Положительное нечетное число.<br>");
        break;
        case 4: print(" Положительное четное число.<br>");
        break; 
        case 5: print(" Положительное нечетное число.<br>");
        break;
        default: print("Error.<br>");
    }
}
If29b();
function If30()
{
    print("******** if30() switch() **********<br>"); 
    $x=rand(1,999);
    print("x=".$x."<br>");
    if($x<10 && $x%2==0) print(" Четное однозначное.<br>");
    elseif($x<10 && $x%2!=0) print(" Нетное однозначное.<br>");
    elseif($x>=10 && $x<100 && $x%2==0) print(" Четное двузначное.<br>");
    elseif($x>=10 && $x<100 && $x%2!=0) print(" Нетное двузначное.<br>");
    elseif($x>=100 && $x<=999 && $x%2==0) print(" Четное трехзначное.<br>");
    elseif($x>=100 && $x<=999 && $x%2!=0) print(" Нетное трехзначное.<br>");
    else print("Error.<br>");
}
If30();
?>