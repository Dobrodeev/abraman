<?php

/**
 * @author Valera
 * @copyright 2017
 */

/* Defining a PHP Function */
         function writeMessage() {
            echo "You are really a nice person, Have a nice time!"."<br>";
         }
         
         /* Calling a PHP Function */
         writeMessage();
function Begin1()
{
    $a=13;
    $P=4*$a;
    echo $P."<br>";
}         
Begin1();
function Begin2()
{
    $a=7;
    $S=$a*$a;
    echo $S."<br>";    
}
Begin2();
function Begin3()
{
    $a=7;
    $b=19;
    $S=$a*$b;
    $P=2*($a+$b);
    echo $S."<br>";
    echo $P."<br>";
}
Begin3();
function Begin4()
{
    $d=7;
    $p=3.14;
    $L=$p*$d;
    echo $L."<br>";
}
Begin4();
function Begin5()
{
    $a=13;
    $V=$a*$a*$a;
    $S=6*$a*$a;
    echo $V."<br>", $S."<br>";
}
Begin5();
function Begin6()
{
    $a=13;
    $b=17;
    $c=19;
    $V=$a*$b*$c;
    $S=2*($a*$b+$b*$c+$a*$c);
    echo $V."<br>", $S."<br>";
}
Begin6();
function Begin7()
{
    $R=17;
    $p=3.14;
    $L=2*$p*$R;
    $S=$p*$R*$R;
    echo $L."<br>", $S."<br>";
}
begin7();
function Begin8()
{
    $a=17;
    $b=19;
    $S=($a+$b)/2;
    echo $S."<br>";
}
Begin8();
function Begin9()
{
    $a=17;
    $b=19;
    $S=sqrt($a*$b);
    echo $S."<br>";
}
Begin9();
function Begin10()
{
    $a=17;
    $b=19;
    $S=$a*$a+$b*$b;
    $R=$a*$a-$b*$b;
    $P=$a*$a*$b*$b;
    $C=($a*$a)/($b*$b);
    echo $S."<br>", $R."<br>", $P."<br>", $C."<br>";
}
Begin10();
function Begin11()
{
    $a=-17;
    $b=19;
    $S=abs($a)+abs($b);
    $R=abs($a)-abs($b);
    $P=abs($a)*abs($b);
    $C=abs($a)/abs($b);
    print("Begin11"."<br>");
    echo $S."<br>", $R."<br>", $P."<br>", $C."<br>";
}
Begin11();
function Begin12()
{
    $a=13;
    $b=21;
    $c=sqrt($a*$a+$b*$b);
    $p=$a+$b+$c;
    echo $c."<br>", $p."<br>";
}
Begin12();
function Begin13()
{
    $r1=17;
    $r2=6;
    $S1=M_PI*$r1*$r1;
    $S2=M_PI*$r2*$r2;
    $S3=$S1-$S2;
    echo $S1."<br>", $S2."<br>", $S3."<br>";
}
Begin13();
function Begin14()
{
    $L=17;
    $R=$L/(2*M_PI);
    $S=M_PI*$R*$R;
    echo $R."<br>", $S."<br>";
}
Begin14();
function Begin15()
{
    $S=17;
    $R=sqrt($S/M_PI);
    $D=2*$R;
    $L=M_PI*$D;
    echo $D."<br>", $L."<br>";
    print("<hr>");
}
Begin15();
function Begin16()
{
    $x1=7;
    $x2=9;
    $l=abs($x1-$x2);
    echo $l."<br>";
}
Begin16();
function Begin17()
{
    $A=3;
    $B=8;
    $C=11;
    $AC=$C-$A;
    $BC=$C-$B;
    $S=$AC+$BC;
    echo $AC."<br>", $BC,"<br>", $S."<br>";
}
Begin17();
function Begin18()
{
    $A=3;
    $C=5;
    $B=11;
    $AC=$C-$A;
    $BC=abs($C-$B);
    $P=$AC*$BC;
    print("P=".$P."<br>");    
}
Begin18();
function Begin19()
{
    $x1=0;
    $y1=0;
    $x2=11;
    $y2=3;
    $AB=$y2-$y1;
    $BC=$x2-$x1;
    $P=2*($AB+$BC);
    $S=$AB*$BC;
    print("P=".$P."<br>");
    print("S=".$S."<br>");
}
Begin19();
function Begin20()
{
    $x1=-3;
    $y1=7;
    $x2=13;
    $y2=-6;
    $d=sqrt(pow(($x2-$x1),2)+pow(($y2-$y1),2));
    print("d=".$d."<br>");
}
Begin20();
function Begin21()
{
    $x1=0;
    $y1=0;
    $x2=3;
    $y2=7;
    $x3=2;
    $y3=13;
    $A=sqrt(pow(($x2-$x1),2)+pow(($y2-$y1),2));
    $B=sqrt(pow(($x3-$x2),2)-pow(($y3-$y2)));
    $C=sqrt(pow(($x1-$x3),2)+pow(($y1-$y3)));
    $p=($A+$B+$C)/2;
    $S=sqrt($p*($p-$A)*($p-$B)*($p-$C));
    print("формула √ерона"."<br>");
    print("S=".$S."<br>");
}
Begin21();
function Begin22()
{
    $A=-7;
    $B=13;
    print("----function xchg----"."<br>");
    print("A=".$A."<br>");
    print("B=".$B."<br>");
    $C=$A;
    $A=$B;
    $B=$C;
    print("A=".$A."<br>");
    print("B=".$B."<br>");    
}
Begin22();
function Begin23()
{
    $A=-13;
    $B=6;
    $C=29;
    print("---***function сдвиг***--- "."<br>");
    echo "A=".$A," B=".$B, " C=".$C."<br>"; 
    $X=$B;
    $B=$A;
    $A=$C;
    $C=$X;
    echo "A=".$A," B=".$B, " C=".$C."<br>";           
}
Begin23();
function Begin24()
{
    $A=-13;
    $B=6;
    $C=29;
    print("---***function перестановки***--- "."<br>");
    echo "A=".$A," B=".$B, " C=".$C."<br>";
    $X=$C;//x=29
    $C=$A;//c=-13
    $Y=$B;//y=6
    $B=$X;//b=29
    $A=$Y;
    echo "A=".$A," B=".$B, " C=".$C."<br>";
}
Begin24();
function Begin25()
{
    $x=-17;
    $y=3*pow($x,6)-6*pow($x,2)-7;
    print("x=".$x."<br>");
    print("y=".$y."<br>");
}
Begin25();
function Begin26()
{
    $x=-7;
    $y=4*pow(($x-3),6)-7*pow(($x-3),3)+2;
    print("x=".$x."<br>");
    print("y=".$y."<br>");
}
Begin26();
function Begin27()
{
    $A=3;
    $A_2=$A*$A;
    $A_4=$A_2*$A_2;
    $A_8=$A_4*$A_4;
    print("A=".$A."<br>");
    print("A^8=".$A_8."<br>");
}
Begin27();
function Begin28()
{
    $A=7;
    $A_2=$A*$A;
    $A_3=$A_2*$A;
    $A_5=$A_2*$A_3;
    $A_10=$A_5*$A_5;
    $A_15=$A_10*$A_5;
    print("A=".$A."<br>");
    print("A^15=".$A_15."<br>");
}
Begin28();
function Begin29()
{
    $a=37;
    $a_rad=$a*M_PI/180;
    print("a=".$a."<br>");
    print("a_rad=".$a_rad."<br>");
}
Begin29();
function Begin30()
{
    $a_rad=0.16475;
    $a=$a_rad*180/M_PI;
    print("a_rad=".$a_rad."<br>");
    print("a=".$a."<br>");
}
Begin30();
function Begin31()
{
    $TF=105;
    //TC = (TF-32)*5/9
    $TC=($TF-32)*5/9;
    print("TF=".$TF."<br>");
    print("TC=".$TC."<br>");    
}
Begin31();
function Begin32()
{
    $TC=25;
    $TF=$TC*9/5+32;
    print("TF=".$TF."<br>");
    print("TC=".$TC."<br>");      
}
Begin32();
function Begin33()
{
    $X=3;
    $A=37;
    $X1=$A/$X;
    $Y=1.5;
    $S=$X1+$Y*$X1;
    print("1 kg=".$X1."<br>");
    print("S=".$S."<br>");
}
Begin33();
function Begin34()
{
    $X=1.7;
    $A=37;
    $Y=1.3;
    $B=26;
    $X1=$A/$X;
    $Y1=$B/$Y;
    $R=$X1/$Y1;
    echo"1 kg chocolate=".$X1." rur,", "1 kg iris=".$Y1." rur,", " chocolate > isris v".$R." raz<br>"; 
}
Begin34();
function Begin38()
{
    //A?x + B = 0
    $A=-7;
    $B=5.7;
    $X=-$B/$A;
    echo "A=".$A, " B=".$B, " X=", $X."<br>";
    
}
Begin38();
function Begin39()
{
    /*A?x2 + B?x + C = 0
    x1; 2 = (?B І pD)/(2?A),
где D Ч дискриминант, равный B2 ? 4?A?C.
*/
    $A=-7;
    $B=3;
    $C=2;
    $D=$B*$B-4*$A*$C;
    $X1=(-$B-sqrt($D))/(2*$A);
    $X2=(-$B+sqrt($D))/(2*$A);
    if ($X1<$X2)
    {
        print("X1=".$X1."<br>");
        print("X2=".$X2."<br>");
    }
    else    
    print("X2=".$X2."<br>");
    print("X1=".$X1."<br>");
}
Begin39();
function Begin40()
{
    $A1=-5;
    $B1=3;
    $C1=-19;
    $A2=7;
    $B2=11;
    $C2=37;
    /*
    x = (C1?B2 ? C2?B1)/D, y = (A1?C2 ? A2?C1)/D
где D = A1?B2 ? A2?B1.
    */
    $D=$A1*$B2-$A2*$B1;
    $X=($C1*$B2-$C2*$B1)/$D;
    $Y=($A1*$C2-$A2*$C1)/$D;    
    print("System of aquations<br>");
    echo $A1."X+".$B1."Y=".$C1."<br>";
    echo $A2."X+".$B2."Y=".$C2."<br>";
    print("D=".$D."<br>"); 
    echo "X=".$X, " Y=".$Y."<br>";
}
Begin40();
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
    
}
Integer3();
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
function Boolean6()
{
    $A=7;
    $B=3;
    $C=-16;
    if($A<$B and $B<$C)
        print("TRUE");
    else 
        print("False");
    echo "<br>";
}
Boolean6();
?>