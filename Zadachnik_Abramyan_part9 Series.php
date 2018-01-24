<?php

/**
 * @author Valera
 * @copyright 2017
 */

function Series1()
{
    $N = 10;
    $a = array();
    for($i=0;$i<$N;$i++)
    {
        $a[$i]=3*lcg_value();
        print($a[$i]." ");
    }
    $s=0;
    for($i=0;$i<$N;$i++)
    {
        $s+=$a[$i];
    }
    
    print("<br>");
    print("S=".$s."<br>");
}
Series1();
function Series2()
{
    print("***********Series2()*****************<br>");
    $N=10;
    $a=array();
    $p=1;
    for($i=0;$i<$N;$i++)
    {
        $a[$i]=lcg_value();
        print($a[$i]." ");
    }
    for($i=0;$i<$N;$i++)
    {
        $p*=$a[$i];
    }
    print("<br>");
    print("P=".$p."<br>");
}
Series2();
function Series3()
{
    $N=10;
    $a=array();
    print("********Series3()**************<br>");
    $S=0;
    $j=0;
    for($i=1;$i<$N;$i++)
    {
        $a[$i]=lcg_value();
        print($a[$i]." ");
    }
    for($i=1;$i<$N;$i++)
    {
        $S+=$a[$i];
        $j++;
    }
    $S2=$S/$j;
    print("<br>");
    print("S=".$S." S2=".$S2."<br>");    
}
Series3();
function Series4()
{
    $N=rand(7,11);
    $S=0;
    $P=1;
    print("***************Series4()*****************<br>");
    for($i=0;$i<$N;$i++)
    {
        $a=rand(1,9);
        print($a." ");
        $S+=$a;
        $P*=$a;
    }
    print("<br>");
    print("S=".$S." P=".$P."<br>");    
}
Series4();
function Series4a()
{
    print("***************Series4a()********************<br>");
    $N=rand(19,39);
    $S=0;
    $P=1;
    $a=array();
    print("Series4a()<br>");
    print("N=".$N."<br>");
    for($i=0;$i<$N;$i++)
    {
        $a[$i]=lcg_value();
        print($a[$i]." ");
    }
    for($i=0;$i<$N;$i++)
    {
        $S+=$a[$i];
    }
    for($i=0;$i<$N;$i++)
    {
        $P*=$a[$i];
    }
    print("<br>");
    print("S=".$S." P=".$P."<br>"); 
}
Series4a();
function Series5()
{
    print("********Series5()*********");
    $n=rand(19,39);
    print("n=".$n."<br>");
    $a=array();
    for($i=0;$i<$n;$i++)
    {
        $a[$i]=2.3*lcg_value();
        print($a[$i]." ");
    }
    //$b=$a;
    print("<br>");
    print(" Выведем массив b:<br>");
    for($i=0;$i<$n;$i++)
    {
        $b[$i]=$a[$i];
        print($a[$i]." ");
    }
    print("<br>");
    print(" А теперь только целые части элементов массива: <br>");
    for($i=0;$i<$n;$i++)
    {
        $a[$i]=(int)$a[$i];
        print($a[$i]." ");    
    }
    print("<br>");
    print(" А теперь ищем сумму целых частей элементов массива: <br>");
    $S=0;
    for($i=0;$i<$n;$i++)
    {
        $S+=$a[$i];
    }
    print("S=".$S."<br>");
}
Series5();
function Series6()
{
    print("********Series6()*********");
    $n=rand(19,39);
    print("n=".$n."<br>");
    $a=array();
    for($i=0;$i<$n;$i++)
    {
        $a[$i]=2.3*lcg_value();
        print($a[$i]." ");
    }
    print("<br>");
    print(" Массив b:<br>");
    $b=$a;
    for($i=0;$i<$n;$i++)
    {
        print($b[$i]." ");  
    }
    print("<br>");
    print(" А теперь только целые части элементов массива: <br>");
    for($i=0;$i<$n;$i++)
    {
        $a[$i]=(int)$a[$i];
        print($a[$i]." ");  
    }
    print("<br>");
    print(" Еще раз массив a:<br>");
    for($i=0;$i<$n;$i++)
    {
        print($a[$i]." ");  
    }
    print("<br>");
    print(" А теперь только дробные части элементов массива: <br>");
    for($i=0;$i<$n;$i++)
    {        
        $a[$i]=$b[$i]-$a[$i];
        print($a[$i]." ");    
    }
    print("<br>");
    print(" А теперь ищем произведение дробных частей элементов массива: <br>");
    $P=1;
    for($i=0;$i<$n;$i++)
    {
        $P*=$a[$i];
    }
    print("P=".$P."<br>");
}
Series6();
function Series7()
{
    print("******** Series7()********<br>");
    $n=rand(19,29);
    $a=array();
    for($i=0;$i<$n;$i++)
    {
        $a[$i]=4.3*lcg_value();
        print($a[$i]." ");
    }
    $S1=0;
    for($i=0;$i<$n;$i++)
    {
        $S1+=$a[$i];
    }
    print(" Сумма всех элементов массива S1=".$S1."<br>");
    print("<br>");
    print(" Округляем элементы массива: <br>");
    for($i=0;$i<$n;$i++)
    {
        $a[$i]=round($a[$i]);
        print($a[$i]." ");
    }
    $S2=0;
    /*do
    {
        $i++;
        $S+=$a[$i];
        if($i>=$n) break;
    }
    while(true);
    **/
    for($i=0;$i<$n;$i++)
    {
        $S2+=$a[$i];
    }
    print(" Сумма целых частей массива S2=".$S2."<br>");
    print("<br>");
}
Series7();
function Series8()
{
    print("******** Series8()********<br>");
    $n=rand(19,21);
    $a=array();
    for($i=0;$i<$n;$i++)
    {
        $a[$i]=rand(1,13);
        print($a[$i]." ");        
    }
    print(" А теперь только четные элементы: <br>");
    $count=0;
    for($i=0;$i<$n;$i++)
    {
        //if($a[$i]%2!=0) continue;
        if($a[$i]%2==0)
        {
            print($a[$i]." ");
            $count++;
        }        
    }
    print(" Всего четных элементов: ".$count."<br>");
}
Series8();
function Series9()
{
    print("******** Series9()********<br>");
    $n=rand(19,21);
    $a=array();
    for($i=0;$i<$n;$i++)
    {
        $a[$i]=rand(1,13);
        print($a[$i]." ");        
    }
    print(" А теперь только четные элементы: <br>");
    $count=0;
    for($i=0;$i<$n;$i++)
    {
        if($a[$i]%2!=0)
        {
            print("a[".$i."]=".$a[$i]." ");
            $count++;
        }        
    }
    print(" Всего нечетных элементов: ".$count."<br>");
}
Series9();
function Series10()
{
    print("******** Series10()********<br>");
    $n=rand(19,23);
    $a=array();
    for($i=0;$i<$n;$i++)
    {
        $a[$i]=rand(-17,1);
        print($a[$i]." ");        
    }
    print(" А теперь только положительные числа: <br>");
    $count=0;
    for($i=0;$i<$n;$i++)
    {
        if($a[$i]>0)
        {
            print("a[".$i."]=".$a[$i]." ");
            $count++;
        }                
    }
    $count>0 ? print(" TRUE: Всего положительных чисел: ".$count."<br>") : print("FALSE<br>");    
}
Series10();
function Series11()
{
    print("******** Series11()********<br>");
    $n=rand(19,23);
    $k=-16;
    $a=array();
    for($i=0;$i<$n;$i++)
    {
        $a[$i]=rand(-17,11);
        print($a[$i]." ");        
    }
    print("<br>");
    print(" А теперь только <".$k."<br>");
    $count=0;
    for($i=0;$i<$n;$i++)
    {
        if($a[$i]<$k)
        {
            print("a[".$i."]=".$a[$i]." ");
            $count++;
        }                
    }
    $count>0 ? print(" TRUE: есть числа <".$k."<br>") : print("FALSE<br>");    
}
Series11();
function Series12()
{
    print("********** Series12() ********<br>");
    $n=rand(19,29);
    $a=array();
    for($i=0;$i<$n;$i++)
    {
        $a[$i]=rand(-19,9);
        print($a[$i]." ");
        if($a[$i]==0) break;
    }
    print("<br>");
    print(" Всего чисел в наборе: ".$i."<br>");
}
Series12();
function Series13()
{
    $a=array();
    print("**********Series13****************<br>");
    $N=0;
    do
    {
        $a[$N]=rand(-10,10);
        print($a[$N]." ");   
    }
    while($a[$N++]!=0);
    $N--;
    $S=0;
    for($i=0;$i<$N;$i++)
    {
        if($a[$i]>0 && $a[$i]%2==0)
        $S+=$a[$i];
    }
    print("<br>");
    print(" Сумма всех положительных четных чисел: S=".$S."<br>");
}
Series13();
function Series14()
{
    print("************ Series14() ************<br>");
    $a=array();
    $n=0;
    $k=-7;
    $i=0;
    do
    {
        $a[$n]=rand(-10,10);
        print($a[$n]." ");
        if($a[$n]<$k) 
        {
           $i++;
           $b[$n]=$a[$n]; 
        }
        
    }
    while($a[$n++]!=0);
    print(" Всего чисел<".$k.": ".$i."<br>");
    print_r($b);
    print("<br>");
}
Series14();
function Series15()
{
    $K=15;
    print("*************Series15()***************<br>");
    print("K=".$K."<br>");
    $a=array();
    $i=0;
    do
    {
        $a[$i]=rand(0,19);
        print("a[".$i."]=".$a[$i]." ");        
    }
    while($a[$i++]!=0); 
    $i--;
    print(" всего чисел в массиве: i=".$i."<br>");
    for($j=0;$j<$i;$j++)
    {
        if($a[$j]>$K)
        {
            print("a[".$j."]=".$a[$j].">".$K."<br>");
            return;
        }
    }
    print("0<br>");            
}
Series15();
function Series16()
{
    print(" ********* Series16() **********<br>");
    $K=15;
    print("K=".$K."<br>");
    $arr=array();
    $i=0;
    do
    {
        $arr[$i]=rand(0,19);
        print("arr[".$i."]=".$arr[$i]." ");
    }
    while($arr[$i++]!=0);
    $i--;
    print("<br>");
    for($j=$i;$j>0;$j--)
    {
        if($arr[$j]>$K)
        {
            print("arr[".$j."]=".$arr[$j].">".$K."<br>");
            return;
        }
    }
    print("0<br>");
}
Series16();
function Series17()
{
    print(" ********* Series17() **********<br>");
    $B=7.3*lcg_value();
    print("B=".$B."<br>");
    $N=20;
    $arr=array();
    $i=0;
    print(" Непосортированный масси arr<br>");
    do
    {
        $arr[$i]=rand(0,20);
        print("arr[".$i."]=".$arr[$i]." ");
    } 
    while($arr[$i++]!=0);
    $r=$i--;
    print("<br>");
    /*
    for($i=0;$i<$r;$i++)
    {
        for($j=$r;$j>$i;$j--)
        {
            if($arr[$j]<$arr[$$j-1])
            {
                $temp=$arr[$j];
                $arr[$j]=$arr[$j-1];
                $arr[$j-1]=$temp;
            }
        }
    }
    **/
    /*
    $i=0;
    do
    {
        $i++;
        print("arr[".$i."]=".$arr[$i]." ");
    }
    while($i<=$r);
    **/
    sort($arr);
    print(" Посортированный масси arr<br>");
    print_r($arr);
    $i=0;
    $b=array();
    $c=array();
    /**
    do    
    {
        $i++;
        if($arr[$i]>$B)
        {
            for($j=$i;$j<$r;$j++)
            {
                $c[$j-1]=$B;
                $c[$j]=$arr[$j];
            }            
        }
    }
    while($i<$r);
    print_r($c);
    **/
    for($i=0;$i<$r;$i++)
    {
        if($arr[$i]<$B) 
        {
            $b[$i]=$arr[$i];
            $save=$i;
        } 
        if($arr[$i]>$B) $c[$i]=$arr[$i];               
    }
    print("save=".$save."<br>");
    $save++;
    $b[$save]=$B;
    for($i=0;$i<=$save;$i++)
    {
        $d[$i]=$b[$i];
    }
    $count=count($c);
    print("count(c)=".$count."<br>");
    $save++;
    for($i=$save;$i<=$count;$i++)
    {
           $d[$i]=$c[$i-1]; 
    }
    print("save++=".$save."<br>");
    /*
    for($i=0;$i<$save;$i++)
    {
        $d[$i]=$b[$i];
    }
    **/
    print("<br>");
    print("Array b:<br>");
    print_r($b);
    print("<br>");
    print("Array c:<br>");
    print_r($c);
    print("<br>");
    print("Array d:<br>");
    print_r($d);
    print("<br>");   
}
Series17();
function SortBuble()
{
$array = array(1, 0, 6, 9, 4, 5, 2, 3, 8, 7); // исходный массив 
// перебираем массив
for ($j = 0; $j < count($array) - 1; $j++){
    for ($i = 0; $i < count($array) - $j - 1; $i++){
        // если текущий элемент больше следующего
        if ($array[$i] > $array[$i + 1]){
            // меняем местами элементы
            $tmp_var = $array[$i + 1];
            $array[$i + 1] = $array[$i];
            $array[$i] = $tmp_var;
        }
    }
} 
// вывод результата
var_dump($array);
}

function Series18()
{
    print(" ********* Series18() **********<br>");
    $arr=array();
    $i=0;
    do
    {
        $arr[$i]=rand(0,19);
        print("arr[".$i."]=".$arr[$i]." ");
    }
    while($arr[$i++]!=0);
    print("<br>");
    print(" после сортировки <br>");
    sort($arr);
    print_r($arr);
    print("<br>");
    print(" бес одинаковых элементов <br>");
    $b=array();
    print("count(arr)=".count($arr)."<br>");
    for($i=0,$j=0;$i<count($arr);$i++,$j++)
    {
        if($arr[$i]!=$arr[$i+1]) $b[$i]=$arr[$j];
    }    
    print_r($b);
}
//Series18();
function Series19()
{
    print(" ********* Series19() **********<br>");
    $N=20;
    print("N=".$N."<br>");
    $arr=array();
    for($i=0;$i<$N;$i++)
    {
        $arr[$i]=rand(0,20);
    }
    print_r($arr);
    print("<br>");
    $j=0;
    for($i=0;$i<$N-1;$i++)
    {
        if($arr[$i]>$arr[$i+1])
        {
            print("arr[".$i++."]=".$arr[$i++]." ");
            //$b[$i]=$arr[$i];
            $j++;
        }
    }
    //print_r($b);
    print("j=".$j."<br>");
}
Series19();
function Series20()
{
    print(" ********* Series20() **********<br>");
}
Series20();

function Series21()
{
    $N=3;
    $a=array();
    print("**************Series21()***************<br>");
    for($i=0;$i<$N;$i++)
    {
        $a[$i]=lcg_value();
        print("a[".$i."]=".$a[$i]." ");       
    }
    for($i=0;$i<$N-1;$i++)
    {
        if($a[$i]>=$a[$i+1])
        {
            print("false<br>");
            return;    
        }
        
    }
    print("<br>");
    print("true<br>");
}
Series21();
?>