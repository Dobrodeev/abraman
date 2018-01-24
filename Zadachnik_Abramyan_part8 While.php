<?php

/**
 * @author Valera
 * @copyright 2017
 */
function While1()
{
    $a=rand(56,78);
    $b=rand(11,19);
    print("a=".$a." b=".$b."<br>");
    do
    {
        $a-=$b;   
    }
    while($a>=$b);
    print("a=".$a."<br>");
}
While1();
function While2()
{
    $a=rand(56,78);
    $b=rand(11,19);
    $i=0;
    print("a=".$a." b=".$b."<br>");
    do
    {
        $a-=$b;
        $i++;    
    }
    while($a>=$b);
    print("a=".$a." Количество b in a: ".$i."<br>");
}
While2();
function While3()
{
    $n=rand(67,89);
    $k=rand(13,17);
    $l=$n;
    print("n=".$n." k=".$k."<br>");
    $i=0;
    do
    {
        $n-=$k;
        $i++;
    }
    while($n>=$k);
    print($l." / ".$k." = ".$i."<br>");
    print($l." % ".$k." = ".$n."<br>");
}
While3();
function While4()
{
    $n=6561;
    print("Проверка является ли число степенью числа 3.<br>");
    print("n=".$n."<br>");
    while($n%3==0)
    {
        $n=$n/3;
    }
    if($n==1)
    print("TRUE"."<br>");
    else print("FALSE"."<br>");
}
While4();
function While5()
{
    print("*********While5()*************<br>");
    $n=4096;
    $l=$n;
    $i=0;
	print("n=".$n."<br>");
    do
    {
        $n/=2;
        $i++;
    }
    while($n>=1);
    print(" 2^".$i." = ".$l."<br>");
}
While5();
function While6()
{
    //$n=lcg_value();
    print("*********While6()*************<br>");
    $n=rand(7,13);
    $n1=$n;
    print("n=".$n."<br>");
    $rez=1;
    while($n>0)
    {
        $rez*=$n;
        $n-=2;
    }
    print($n1."!!=".$rez."<br>");
}
While6();
function While7()
{
	//$n=rand(77,98);
    print("*********While7()*************<br>");
    $n=100;
	/*$i=0;
    $k=1;
    $cv=1;
	print("n=".$n."<br>");
	do
	{
		$i++;
        //$cv++;
        $cv=$i*$i;
        print("i=".$i." cv=".$cv."<br>");                     
        if($cv>$n)
        {
            $save=$i;
            break;
        }        
	}
	while(TRUE);*/
    $k=0;
    while(($k+1)*($k+1)<$n)  $k++;
    print(" Число K=".$k." в квадрате>".$n."<br>");
	//print($cv." > ".$n."<br>");
    //print($i."^2=".$cv.">".$n."<br>");
   // print(" Число K=".$save." в квадрате>".$n."<br>");
}
While7();
function While8()
{
	//K^2<=N
    //$n=rand(77,99);
    print("*********While8()*************<br>");
    $n=81;
	$i=0;
    $k=1;
	print("n=".$n."<br>");
	do
	{
		$i++;
		$k=$i*$i;
		if($k>$n)
        {
            $save=--$i;        
            break;
        }		
	}
	while(TRUE);
	//print($k."<=".$n."<br>");
    print($save."^2<=".$n."<br>");
}
While8();
function While9()
{
	//3^k>n, min K-?
    //$n=rand(98,132);
    print("*********While9()*************<br>");
    $n=27;
	$r=3;
	$i=0;
    $step=1;
	print("n=".$n."<br>");
	do
	{
		$i++;
        $step*=$r;
        if($step>$n)
        {
            $save=$i;
            break;
        }
	}
	while(TRUE);
    print("step=".$step."<br/>");
	print("3^".$save.">".$n."<br/>");
}
While9();
function While10()
{
	//3^k<n, min K-?
    //$n=rand(98,132);
    print("*********While10()*************<br>");
    $n=81;
	$r=3;
	$i=0;
    $step=1;
	print("n=".$n."<br>");
	do
	{
		$i++;
        $step*=$r;
        if($step>=$n)
        {
            $save=--$i;
            break;
        }
	}
	while(TRUE);
    print("step=".$step."<br>");
	print("3^".$save."<".$n."<br/>");
}
While10();
function While11()
{
    //1+2+3+...+K>=S
    $n=rand(13,29);
    print("*****Example While11()*************<br>");
    //$n=15;
    print("max N=".$n."<br>");
    $S=0;
    $i=0;
    do
    {
        $i++;
        $S+=$i;
        if($S>=$n)
        {            
            $save=--$i;
            break;
        } 
        print($i." S=".$S."<br>");  
    }
    while(TRUE);
    print("S=".$S." i=".$i." save=".$save."<br>");
    print($S.">=".$n." на шаге №".$save."<br>");    
}
While11();
function While12()
{
    //S<=n, k-?
    $n=rand(9,23);
    print("********Example While12**************<br>");
    //$n=21;
    $S=0;
    $i=0;
    print("max N=".$n."<br>");
    do
    {
        $i++;
        $S+=$i;
        //if($S<=$n) continue;
        if($S>$n) 
        {            
            $S-=$i;
            $save=--$i;
            break;
        }
        print($i." S=".$S."<br>");
        
        //print("k=".$i." S=".$S."<br>");
    }
    while(TRUE);
    print("K=".$save."<br>");
    print($S."<=".$n." на шаге №".$save."<br>");    
}
While12();
function While13()
{
    print("*****Example While13()*********<br>");
    
    $A=3;
    print("A=".$A."<br>");
    $S=0;
    $i=0;
    do
    {
        $i++;
        $S+=1/$i;
        if($S>=$A) break;
        print($i." S=".$S."<br>");
    }
    while(true);    
}
While13();
function While14()
{
    print("*****Example While14()*********<br>");
    
    $A=3;
    print("A=".$A."<br>");
    $S=0;
    $i=0;
    do
    {
        $i++;
        $S+=1/$i;
        if($S>=$A) break;
        print($i." S=".$S."<br>");
    }
    while(true);    
}
While14();
function While15()
{
    print("*****Example While15()*********<br>");
    
    $start=1000;
    $finish=2100;
    $procent=0.2;
    print("start=".$start." procent=".$procent."% finish=".$finish."<br>");
    $i=0;
    $S1=0;
    $S2=$start;
    do
    {
        $i++;
        $S1=$start*$procent;
        $S2+=$S1;
        $start=$S2;        
        if($S2>=$finish) 
        {
            print("month №".$i.": +".$S1."%=".$S2."<br>");
            break;
        }
        
        print("month №".$i.": +".$S1."%=".$S2."<br>");
    }
    while(true);
    print("Summa > finish: ".$S2." > ".$finish."<br>");    
}
While15();
function While16()
{
    print("*****Example While16()*********<br>");
    
    $start=10;
    $finish=200;
    $procent=0.01*rand(20,49);
    print("start=".$start." км procent=".$procent."% finish=".$finish."<br>");
    $i=0;
    $S1=0;
    $S2=$start;
    do
    {
        $i++;
        $S1=$start*$procent;
        $S2+=$S1;
        $start=$S2;        
        if($S2>$finish) 
        {
            print("на день №".$i.": +".$S1."%=".$S2." км<br>");
            break;
        }
        
        print("на день №".$i.": +".$S1."%=".$S2." км<br>");
    }
    while(true);
    print("Пробег > finish: ".$S2." км> ".$finish." км<br>");    
}
While16();
function While17()
{
    $a=rand(100,999999999);
    print("*********** While17() вывод всех цифр числа слева направо*********<br>");
    print("a=".$a."<br>");
    while($a>0)
    {
        $d=$a%10;
        $a = (int)($a/10);
        print("a=".$a." ");
        print("d=".$d."<br>");
    }
    print("<br>");
}
While17();
function RandA()
{
    $a=rand(100,999999999);
    print("a=".$a."<br>");
    $arr=array();
    $i=0;
    do
    {
        $d=$a%10;
        $a=(int)($a/10);
        print($d." ");
        $i++;
        $arr[$i]=$d;        
    }
    while($a>0);
    print("<br>");
    print_r($arr);
    print("i=".$i."<br>");
    $k=$i;
    $S=0;
    do
    {
        $S+=$arr[$i];
        $i--;
    }
    while($i>0);
    print(" Сумма всех элементов массива S=".$S." количество всех элементов мвссива (количестов цифр числа a) k=".$k."<br>");
    print("<br>");
    $n=0;
    $l=1;
    print("i=".$i."<br>");
    do
    {
        $n+=$arr[$k]*$l;
        print($arr[$k]." ");
        print($n."<br>");
        $l=$l*10;
        $k--;     
    }
    while($k>0);
    print(" число a переписанное наоборот n=".$n."<br>");
}
RandA();
function While20()
{
    $a=rand(100,999999999);
    print("*********** While20() проверка входит ли цифра 2 в наше число *********<br>");
    print("a=".$a."<br>");
    do
    {
        $d=$a%10;
        $a=(int)($a/10);
        //print($d." ");
        if($d==2) 
        {
            print("true<br>");
            break;
        }        
        if($d!=2)
        {
            print("false<br>");
            break;
        }
        
    }
    while($a>0);
    //$flag==true ? print("true.<br>") : print("false<br>");
}
While20();
function While21()
{
    //$a=rand(100,999999999);
    $a=244888;
    print("*********** While21() проверка имеются ли в записи числа нечетные цифры *********<br>");
    print("a=".$a."<br>");
    do
    {
        $d=$a%10;
        $a=(int)($a/10);
        if($d%2!=0)
        {
            print("true<br>");
            break;
        }
        if($d%2==0)
        {
            print("false<br>");
            break;
        } 
    }
    while($a>0);
    //if($flag==false) print("false<br>");
}
While21();
function While22()
{
    //$a=rand(1,100);
    $a=99;
    $save=$a;
    $i=1;   
    print(" *************Example While22(): проверка простого числа*************<br>");
    do
    {
        $i++;
        if($a%$i!=0) 
        {
            print($save."-простое число.<br>");
            break;  
        }
        if($a%$i==0)
        {
            print($save."-непростое число.<br>");
            break; 
        }
    }
    while($i<$save);
}
While22();
function While23a()
{
    print(" ********* While23() Алгоритм Евклида a-b *********** <br>");
    $a=30;
    $b=18;
    print("a=".$a." b=".$b."<br>");
    while($a!=$b)
    {
        if($a>$b)
        $a=$a-$b;
        else
        $b=$b-$a;
    }
    print("a=".$a." b=".$b."<br>");
}
While23a();
function gcd($a,$b)
{
    while($a != $b)
    {
        if($a > $b) 
            $a = $a - $b;
        else
            $b = $b - $a;
    }                
    print ($a);
}
gcd(30,18);
function While24()
{
    print(" ********** While24() проверка является ли данное число числом Фибоначчи ************<br>");
    $a=234;
    $arr=array();
    $arr[0]=1;
    $arr[1]=1;
    $n=15;
    print("a=".$a."<br>");
    for($i=2;$i<$n;$i++)
    {
        $arr[$i]=$arr[$i-2]+$arr[$i-1];
    }
    for($i=0;$i<$n;$i++)
    {
        print("arr[".$i."]=".$arr[$i]." ");
    }
    for($i=0;$i<$n;$i++)
    {
        if($arr[$i]==$a)
        {
            print("true<br>");
            break;
        }
        //else print("false<br>");
        /*
        if($arr[$i]!=$a)
        {
            print("false<br>");
            break;
            //$flag="false";
        }
        **/
    }
    //print($flag."<br>");
    print("<br>");
    print(" ********** While25() первое число число Фибоначчи > N ************<br>");
    $N=90;
    print("N=".$N."<br>");
    $i=0;
    do
    {
        $i++;
        if($arr[$i]>$N)
        {
            print("N>Fib".$arr[$i].">".$N."<br>");
            break;
        }
    }
    while($i<15);
    print(" ********** While26() предыдущее и следующее число Фибоначчи ************<br>");
    $N=377;
    $i=0;
    print("N=".$N."<br>");
    do
    {
        $i++;
        if($arr[$i]>=$N)
        {
            print($arr[$i-1]." ".$arr[$i+1]);
            break;
        }
    }
    while($i<$n);
    print(" ********** While27() порядковый номер числа Фибоначчи ************<br>");
    $N=377;
    print("N=".$N."<br>");
    $i=0;
    do
    {
        $i++;
        if($arr[$i]==$N)
        {
            print(" порядковый номер числа Фибоначчи K=".++$i."<br>");
            break;
        }
    }
    while($i<15);
}
While24();    