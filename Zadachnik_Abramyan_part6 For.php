<?php

/**
 * @author Valera
 * @copyright 2017
 */
function For1()
{
    $k=rand(5,17);
    $n=rand(5,19);
    print("rand k=".$k." rand n=".$n."<br>");
    for($i=1;$i<$n;$i++)
    {
        print("k=".$k." ");
    }
    print("<br>");
}
For1();
function For2()
{
    $a=rand(1,4);
    $b=rand(5,17);
    print("a=".$a." b=".$b."<br>");
    for($i=$a;$i<=$b;$i++)
    {
        print($i." ");
    }
    $c=$b-$a+1;
    print(" all numbers: ".$c."<br>");
}
For2();
function For3()
{
    $a=rand(1,4);
    $b=rand(5,17);
    print("a=".$a." b=".$b."<br>");
    for($i=$b;$i>$a;$i--)
    {
        print($i." ");
    }
    $c=$b-$a;
    print(" all numbers: ".$c."<br>");
}
For3();
function For4()
{
    $x=7*lcg_value();
    print("1 kg: ".$x."<br>");
    for($i=1;$i<=10;$i++)
    {
        $y=$x*$i;
        print($i." kg sweets: ".$y."<br>");
    }
}
For4();
function For5()
{
    $x=7*lcg_value();
    print("1 kg: ".$x."<br>");
    for($i=1;$i<=10;$i++)
    {
        $y=$x/$i;
        print(1/$i." kg sweets: ".$y."<br>");
    }
}
For5();
function For6()
{
    $x=7*lcg_value();
    print("1 kg: ".$x."<br>");
    for($i=1;$i<=10;$i++)
    {
        $y1=$x*$i;
        $y2=$x/$i;
        $y3=$y1+$y2;
        print($i." kg sweets: ".$y3."<br>");
    }
}
For6();
function For7()
{
    $a=rand(1,4);
    $b=rand(5,17);
    print("a=".$a." b=".$b."<br>");
    $S=0;
    for($i=$a;$i<=$b;$i++)
    {
        $S+=$i;
        print($i." ");
    }
    print(" Summa: ".$S."<br>");
}
For7();
function For8()
{
    $a=rand(1,4);
    $b=rand(5,17);
    $P=1;
    print("a=".$a." b=".$b."<br>");
    $S=0;
    for($i=$a;$i<=$b;$i++)
    {
        $P*=$i;
        print($i." ");
    }
    print(" Proizvedenie: ".$P."<br>");
}
For8();
function For9()
{
    $a=rand(1,4);
    $b=rand(5,9);
    print("a=".$a." b=".$b."<br>");
    $S=0;
    $P=1;
    for($i=$a;$i<=$b;$i++)
    {
        $P=$i*$i;
        $S+=$P;
        print($i." ");
    }
    print(" Summa cvadratov: ".$S."<br>");
}
For9();

function For10()
{
    $n=19;
    $S=0;
    print(" Гармонический ряд...<br>");
    print("n=".$n."<br>");
    for($i=1;$i<=$n;$i++)
    {
        $S+=1/$i;// s = s + 1/i
        print("i=".$i." "."S=".$S."<br>");
    }    
}
For10();
function For11()
{
    $n=rand(16,78);
    print(" Сумма ряда n^2+(n+1)^2+(n+2)^2+(n+3)^2+...<br>");
    print("n=".$n."<br>");
    $S=0;
    for($i=1;$i<=$n;$i++)
    {
        $S+=$i*$i;
        print("i=".$i." ".$S."<br>");
    }
    print("S=".$S."<br>");
}
For11();
function For12()
{
    $n=rand(6,18);
    print(" Бесконечное произведение 1.1*1.2*1.3*...<br>");
    print("n=".$n."<br>");
    $S=1;
    $P=1;
    for($i=1;$i<=$n;$i++)
    {
        $S+=0.1;
        $P*=$S;
        print("i=".$i." S=".$S." P=".$P."<br>");
    }
    print("P=".$P."<br>");
}
For12();
function For13()
{
    $n=rand(6,18);
    print(" Знакопеременный ряд 1.1-1.2+1.3-...<br>");
    print("n=".$n."<br>");
    $S=1;
    $P=0;
    $j=-1;
    for($i=1;$i<=$n;$i++)
    {
        $S+=0.1;
        $j*=-1;
        $P=$S*$j;
        print("i=".$i." S=".$S." P=".$P."<br>");
    }
    print("P=".$P."<br>");
}
For13();
function For14()
{
    $n=rand(6,18);
    print(" Квадрат числа N: 1+3+5+...+(2*N-1)<br>");
    print("n=".$n."<br>");
    $S=1;
    $P=0;
    for($i=1;$i<$n;$i++)
    {
        $S+=2;
        //$j=pow(-1,$i);
        $P+=$S;
        print("i=".$i." S=".$S." P=".$P."<br>");
    }
    print("P=".$P."<br>");
}
For14();
function For15()
{
    $a=rand(2,7);
    $n=rand(3,7);    
    print(" Степени числа A^N=A*A*A*...*A<br>");
    print("a=".$a." n=".$n."<br>");
    $S=1;
    $P=1;
    for($i=1;$i<=$n;$i++)
    {
        //$S+=0.1;
        //$j=pow(-1,$i);
        $P*=$a;
        print("i=".$i." S=".$S." P=".$P."<br>");
    }
    print("P=".$P."<br>");
}
For15();
function For16()
{
    $a=lcg_value();
    $n=rand(3,7);    
    print(" Целые степени числа A^N=A*A*A*...*A<br>");
    print("a=".$a." n=".$n."<br>");
    $S=1;
    $P=1;
    for($i=1;$i<=$n;$i++)
    {
        //$S+=0.1;
        //$j=pow(-1,$i);
        $P*=$a;
        print("i=".$i." S=".$S." P=".$P."<br>");
    }
    print("P=".$P."<br>");
}
For16();
function For17()
{
    //$a=lcg_value();
    $a=rand(2,7);
    $n=rand(3,7);    
    print(" Сумма ряда 1+A+A^2+A^3+A^4+...+A^N<br>");
    print("a=".$a." n=".$n."<br>");
    $S=0;
    $P=1;
    for($i=1;$i<=$n;$i++)
    {
        //$S+=0.1;
        //$j=pow(-1,$i);
        $P*=$a;
        $S+=$P;
        print("i=".$i." S=".$S." P=".$P."<br>");
    }
    print("P=".$P."<br>");
}
For17();
function For19()
{
    //$a=lcg_value();
    $n=rand(3,7);    
    print(" Факториал N: N!=1*2*3*...*N<br>");
    //print("a=".$a." n=".$n."<br>");
    print("n=".$n."<br>");
    $S=1;
    $P=1;
    for($i=1;$i<=$n;$i++)
    {
        //$S+=0.1;
        //$j=pow(-1,$i);
        $P*=$i;
        print("i=".$i." P=".$P."<br>");
    }
    print($n."!=".$P."<br>");
}
For19();

$a = 4444444444444446666.2;
$b=$a;
$c=$a + 5.0 - $b;
print("c=".$c."<br>");  
print("a=".$a."<br>");
print("***** array example ************<br>");
    $array = array( "gdfgdfg", "asda", "1qqq", "rweer", "erfsdw");
         
         foreach( $array as $stupid_word ) {
            echo "Value is $stupid_word <br />";
         }
print("***** for example ************<br>");         
for($i=0; ;$i++)
{
    print($i." ");
    if($i==7)
        break;
}
print("<br>");
for($i=0; $i<12 ;$i++)
{
    if($i%3==0)
        continue;
    //else
    print($i." ");
}


?>