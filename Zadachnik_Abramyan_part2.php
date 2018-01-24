<?php

/**
 * @author Valera
 * @copyright 2017
 */

function Integer1()
{
    $L=343;
    $S1=$L/100;
    $S2=(int)($L/100);
    echo $L." mm=".$S2." sm "." L=".$S1."<br>";
}
Integer1();
function Integer2()
{
    $M=3243;
    $M1=(int)($M/1000);
    print($M." kg=".$M1." tones<br>");
}
Integer2();
function Integer3()
{
    $B=6434;
    $KB=1024;
    $A=(int)($B/$KB);
    print($A." kBytes<br>");
}
Integer3();
function Integer4()
{
    $A=193;
    $B=19;
    $O=(int)($A/$B);
    print(" Всего ".$O." отрезков<br>");
}
Integer4();
function Integer5()
{
    $A=193;
    $B=19;
    $O=$A%$B;
    print(" Остаток ".$O." единиц<br>");
}
Integer5();
function Integer6()
{
    $X=rand(10,99);    
    $L=(int)($X/10);
    $P=$X%10;
    print("------Integer6()------<br>");
    print($X." consist of ".$L." & ".$P."<br>");
    print("------**********------<br>");
}
Integer6();
function Integer7()
{
    $X=67;    
    $L=(int)($X/10);
    $P=$X%10;
    //print($X." consist of ".$L." & ".$P."<br>");
    $S=$L+$P;
    $R=$L-$P;
    print("Summa: ".$S." Raznost: ".$R."<br>");
}
Integer7();
function Integer8()
{
    $X=67;
    $L=(int)($X/10);
    $P=$X%10;
    print($X."<br>"); 
    print($P.$L."<br>");   
}    
Integer8();
function Integer9()
{
    $X=687;
    $Y=(int)($X/100);
    print("------Integer9()------<br>");
    print($X." has ".$Y." сотен.<br>");
    print("------**********------<br>");   
}
Integer9();
function Integer10()
{
    $X=687;
    $Z=$X%10;
    $Y=(int)(($X%100)/10);
    print($Z."<br>"); 
    print($Y."<br>"); 
}
Integer10();
function Integer11()
{
    $A=rand(100,999);
    $X=(int)($A/100);
    $Y=(int)(($A%100)/10);
    $Z=$A%10;;
    $S=$X+$Y+$Z;
    $P=$X*$Y*$Z;
    print("------Integer11()------<br>");
    print($A."<br>");
    print($X."<br>"); 
    print($Y."<br>");
    print($Z."<br>"); 
    print($S."<br>");
    print($P."<br>");
    print("------**********------<br>");    
}
Integer11();
function Integer12()
{
    $A=rand(100,999);
    $X=(int)($A/100);
    $Y=(int)(($A%100)/10);
    $Z=$A%10;;
    $S=$X+$Y+$Z;
    $P=$X*$Y*$Z;
    print($A."<br>");
    print($X."<br>"); 
    print($Y."<br>");
    print($Z."<br>"); 
    print($Z.$Y.$X."<br>");  
}
Integer12();
function integer13()
{
    $A=687;
    $X=(int)($A/100);
    $Y=(int)(($A%100)/10);
    $Z=$A%10;;
    $S=$X+$Y+$Z;
    $P=$X*$Y*$Z;
    print($A."<br>");
    print($X."<br>"); 
    print($Y."<br>");
    print($Z."<br>"); 
    print($Y.$Z.$X."<br>");    
}
integer13();
function Integer14()
{
    $A=687;
    $X=(int)($A/100);
    $Y=(int)(($A%100)/10);
    $Z=$A%10;;
    $S=$X+$Y+$Z;
    $P=$X*$Y*$Z;
    print($A."<br>");
    print($X."<br>"); 
    print($Y."<br>");
    print($Z."<br>"); 
    print($Z.$X.$Y."<br>");    
}
Integer14();
function Integer15()
{
    $A=213;
    $X=(int)($A/100);
    $Y=(int)(($A%100)/10);
    $Z=$A%10;
    print($A." ".$X." ".$Y." ".$Z."<br>");
    print($Y.$X.$Z."<br>");
}
Integer15();
function Integer16()
{
    $A=123;
    $X=(int)($A/100);
    $Y=(int)(($A%100)/10);
    $Z=$A%10;
    print($A." ".$X." ".$Y." ".$Z."<br>");
    print("было: ".$A." стало: ".$X.$Z.$Y."<br>");

}
Integer16();
?>
