<?php

/**
 * @author Valera
 * @copyright 2017
 */

function randomm()
{
    static $x = 133;
    $p = 3156353;
    $x = ($x*$x + 3) % $p;
    //print($x." ");
    return abs($x / $p);
}

function random2($a, $b)
{
    return (int)($a + randomm()*($b-$a));
}

/*for($i=0; $i<100; $i++)
    print(random2(10,100)."<br>");
*/

function f1($x)
{
    $x += 2;  // changed parameter
    print($x."<br>");
}

function f2()
{
    $x = 4;
    f1($x); //nothing changed x 
    print($x."<br>");   // but not argument    
    $x++;
    $z = print($x."<br>");
    print("dddddd ".$z."<br>"); 
}
//f2();

function sum($a, $b)
{
    return $a+$b;
}
//print(sum(5,11)."<br>");

function _abs($a)
{
    return $a>0 ? $a : -$a;
}
function sign($x)
{
    if($x<0) return -1;
    if($x==0) return 0;
    return 1;// не нужен ни if ни else
}
function Proc16()
{
    $a=-3*lcg_value();
    $b=1.7*lcg_value();
    $S=sign($a)+sign($b);
    print("******** Proc16() *********<br>");
    print("a=".$a." b=".$b." S=".$S."<br>");
}
//Proc16();
function Proc16b()
{
    $x=rand(-10,10);
    if($x<0) $y=-1;
    elseif($x==0) $y=0;
    else $y=1;
    print("Sign(x):<br>");
    print("x=".$x." y=".$y."<br>");
}
//Proc16b();
function Proc16c()
{
    print("*********** Proc16c() switch()**********<br>");
    $x=rand(-10,10);
    switch($x)
    {
        case -10:
        case -9:
        case -8:
        case -7:
        case -6:
        case -5:
        case -4:
        case -3:
        case -2:
        case -1: 
            $y=-1;
            break;
        case 0:
            $y=0;
            break;
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
            $y=1;
            break;
        default: print("Error.<br>");                
    }
    print("Sign(".$x.")=".$y."<br>");
}
//Proc16c();
function Proc16d()
{
    print("*********** Proc16d() x ? y : z**********<br>");
    $x=rand(-10,10);
    $y=$x < 0 ? -1: 1;
    print("x=".$x."<br>");
    print("y=".$y."<br>");
    
    /*$x=-17;
    $x=$x<0 ? -$x : $x;
    print("x=".$x."<br>");
    **/
}
//Proc16d();
function Proc16e()
{
    print("*********** Proc16e() Функция Хевисайда. x ? y : z**********<br>");
    $t=rand(-10,10);
    $nt=$t < 0 ? 0: 1;
    print("t=".$t." n(t)=".$nt."<br>");
    print("t<0: n(t)=0; t>=0: n(t)=1<br>");    
}
//Proc16e();
function Proc34()
{
    print("********* Proc16(): Factorial ********<br>");
    $n=rand(-10,10);
    $F=1;
    $i=0;
    do
    {
        $i++;
        $F*=$i;
        if($i>=$n) 
        {
            $save=$F;
            break;  
        }
        print("i=".$i." Fact=".$F."<br>");
    }
    while(true);
    print($n."!=".$save."<br>");
}
//Proc34();
function Proc34a()
{
    print("********* Proc16a(): Factorial while do********<br>");
    $n=rand(0,10);
    $F=1;
    $i=0;
    while(true)
    {
        $i++;
        $F*=$i;
        if($i>=$n) 
        {
            $save=$F;
            break;  
        }
        print("i=".$i." Fact=".$F."<br>");
    }  
    print($n."!=".$save."<br>");
}    
//Proc34a();
function Proc35x()
{
    print("abs(x)<br>");
    $x=rand(-2,2);
    $y= $x<0 ? -$x : $x;
    print("x=".$x." abs(x)=".$y."<br>");
}
//Proc35x();
function ProcABS($a)
{
    if($a<0) $a=-$a;
    else $a=$a;
    return $a;
}
//print(ProcABS(5)."<br>");
function ProcMath()
{
    print("******* Math ********<br>");
    print(M_PI."<br>");
    print(pi()."<br>");
    $x=M_PI_2;
    $y=M_PI_4;
    $z=exp(1);
    $tay=rand(-3,3);
    $t=abs($tay);
    print($x." ".$y." ".$z." ".$tay." abs(tay)=".$t."<br>");
    $a=3.6;
    $b=round($a);
    print("a=".$a." round(a)=".$b."<br>");
    $arr=array(M_PI, M_E, M_LOG2E, M_LOG10E, M_LN2, M_LN10, M_PI_2, M_PI_4, M_1_PI, M_2_PI, M_SQRTPI, M_SQRT2, M_SQRT3, M_SQRT1_2, M_LNPI, M_EULER);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    $var=" element of array";
    $arr=(array)$var;
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    print(" FF округления: <br>");
    echo abs(-4.5)."<br>";
    echo abs(6)."<br>";
    echo round(4.4)."<br>";
    echo round(3.5)."<br>";
    echo round(3.6)."<br>";
    echo round(3.6, 0)."<br>";
    echo round(1.95583,2)."<br>";
    echo round(5.042,2)."<br>";
    echo round(5.055,2)."<br>";
    print(" Остаток от деления: <br>");
    echo fmod(10,3)."<br>";
    echo fmod(5.7, 1.3)."<br>";
    print(" Сравним fmod и %<br>");
    $x1=fmod(9,2);
    $x2=(9%2);
    print("fmod(10,3)=".$x1."<br>");
    print("10%3=".$x2."<br>"); 
    print(" Логарифмические и степенные ff<br>");
    $x3=pow(2,8);
    $x4=pow(2, 1.3);
    $x4=pow(2, -1);
    $x5=pow(0,0);
    $x6=pow(-1,10);
    $x6=exp(2);
    print("x3=".$x3." x4=".$x4." x5=".$x5." x6=".$x6."<br>");          
}
//ProcMath();
function Summa1($x,$y)
{
    $S=$x+$y;
    print("x+y=".$x."+".$y."=".$S."<br>");
}
//Summa1(1,2);
function Ocrug()
{
    $x1=rand(-5,2);
    $x2=7*lcg_value();
    $x3=rand(-2,7);
    $y1=abs($x1);
    $y2=round($x2);
    $y3=fmod($x1,$x3);
    $y4=$x1%$x3;
    $y6=abs($x3);
    //$y5=hypot($y4,$y6);
    $y5=hypot(3,7);
    print(" ******** ff округления ************<br>");
    print("abs(".$x1.") = ".$y1."<br>");
    print("round(".$x2.") = ".$y2."<br>");
    print("fmod(".$x1.",".$x3.") = ".$y3."<br>");
    print($x1."%".$x3."=".$y4."<br>");
    //print(" третья сторона треугольника ".$y1." ".$y6." будет ".$y5."<br>");
    print(" третья сторона треугольника будет ".$y5."<br>");
}
//Ocrug();
// Кузнецов примеры Глава 7 Функции
function get_sum()
{
    $sum=10+5;
    return $sum;
}
echo get_sum(10,5);
print("<br>");
function get_sum2()
{
    $sum=10+5;
    echo $sum;
}
get_sum2(10,5);
print("<br>");
//Объявляем логическую переменную
$flag=true;
// Если переменная $flag равна TRUE, объявляем функцию
if($flag)
{
    function get_sum3()
    {
        $sum=10+5;
        echo $sum;
    }
}
// Dspsdftv функцию, если переменная $flag равна TRUE  
if($flag) get_sum3();// 15
print("<br>");
function get_sum4($left,$right)
{
    $sum=$left+$right;
    echo $sum;
}
get_sum4(10,5);// 15
print("<br>");

function funct($left,$middle,$right)
{
    echo $left."<br>";
    echo $middle."<br>";
    echo $right."<br>";
}
$i=10;
funct(++$i, $i=$i*2, --$i);

print(" передача аргумента по значению <br>");
function get_sum5($var) // аргумент передается по значению
{
    $var=$var+5;
    return $var;
}
$new_var=20;
echo get_sum5($new_var);
echo "<br>$new_var";
print("<br>");

print(" передача аргумента по ссылке <br>");
function get_sum6(&$var) // аргумент передается по ссылке
{
    $var=$var+5;
    return $var;
}
$new_var=20;
echo get_sum6($new_var);
echo "<br>$new_var";

// Статические переменные
print("<br>");
print("Статические переменные<br>");
function Counter()
{
    $counter=0;
    return ++$counter;
}
echo Counter()."<br>";
/*
function Counter1()
{
    static $counter=0;
    return ++$counter;
}
echo Counter1()."<br>";
**/
// Возврат массива функцией
function format_size($byte)
{
    $kbyte=$byte/1024;
    $mbyte=$kbyte/1024;
    $gbyte=$kbyte/1024;
    return array($byte,$kbyte,$mbyte,$gbyte);

}
list($byte,$kbye,$mbyte,$gbyte)=format_size(38592859);
// Рекурсивные функции
print("Рекурсивные функции<br>");
function callself($counter)
{
    // Если параметр $counter больше, продолжаем рекурсивный спуск
    if($counter>0)
    {
        // Уменьшаем значение параметра $counter и выводим его значение в окно браузера
        echo($counter--)."<br>";
        callself($counter);
    }
    // Если значение параметра меньше или равно 0, прекращаем рекурсивный спуск
    else return;
}
// Вызываем функцию callself()
callself(4);
?>
