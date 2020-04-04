<?php

/**
 * @author Valera
 * @copyright 2017
 */
//

/**
 * Теперь функция вместо того, чтобы просто выводить результат, возвращает
 * его с помощью return
 * @return float|int
 */
function randomm()
{
    static $x = 133;
    $p = 3156353;
    $x = ($x * $x + 3) % $p;
    //print($x." ");
    return abs($x / $p);
}

/**
 * @param $a
 * @param $b
 * @return int
 */
function random2($a, $b)
{
    return (int) ($a + randomm() * ($b - $a));
}

/*for($i=0; $i<100; $i++)
    print(random2(10,100)."<br>");
*/

/**
 * @param $x
 */
function f1($x)
{
    $x += 2;  // changed parameter
    print($x."<br>");
}

/**
 *
 */
function f2()
{
    $x = 4;
    f1($x); //nothing changed x 
    print($x."<br>");   // but not argument    
    $x++;
    $z = print($x."<br>");
    print("dddddd ".$z."<br>");
}

f2();
print(" ********** Summa a+b ********<br>");
/**
 * @param $a
 * @param $b
 * @return mixed
 */
function sum($a, $b)
{
    return $a + $b;
}

print(sum(5, 11)."<br>");
print(" ********** ������ a ********<br>");
/**
 * @param $a
 * @return int
 */
function _abs($a)
{
    return $a > 0 ? $a : -$a;
}

$n = rand(-3, 2);
print("n=".$n."<br>");
print("abs(n)="._abs($n)."<br>");
print(" ********** Sign(x) ********<br>");
/**
 * @param $x
 * @return int
 */
function sign($x)
{
    if ($x < 0) {
        return -1;
    }
    if ($x == 0) {
        return 0;
    }
    return 1;// �� ����� �� if �� else
}

$x = rand(-10, 10);
print("x=".$x." sign(x)=".sign($x)."<br>");
/**
 * @param $x
 * @return int
 */
function Sign1($x)
{
    if ($x < 0) {
        $y = -1;
    } elseif ($x == 0) {
        $y = 0;
    } else {
        $y = 1;
    }
    return $y;
}

/**
 *
 */
function Proc16()
{
    print(" ********** Proc16() *******<br>");
    $a = rand(-3, 2);
    $b = rand(-7, 3);
    $y = Sign1($a) + Sign1($b);
    print("a=".$a." b=".$b."<br>");
    print("Sign(a)=".Sign1($a)." Sign(b)=".Sign1($b)." Sign(a)+Sign(b)=".$y."<br>");
}

Proc16();
/**
 * @param $a
 * @param $b
 * @param $c
 * @return int
 */
function RootCount($a, $b, $c)
{
    $D = $b * $b - 4 * $a * $c;
    if ($D < 0) {
        $count = 0;
    } elseif ($D == 0) {
        $count = 1;
    } else {
        $count = 2;
    }
    return $count;
}

/**
 *
 */
function Proc17()
{
    print(" ********** Proc17() *******<br>");
    $a = -2 * lcg_value();
    $b = -1.7 * lcg_value();
    $c = -1.3 * lcg_value();
    print("a=".$a." b=".$b." c=".$c." ���������� ��������� ����� ".RootCount($a, $b, $c)." ������ .<br>");
}

Proc17();
/**
 * @param $R
 * @return float|int
 */
function CircleS($R)
{
    $S = M_PI * $R * $R;
    return $S;
}

/**
 *
 */
function Proc18()
{
    print(" ********* Proc18() **********<br>");
    $R1 = rand(1, 6);
    $R2 = rand(1, 7);
    $R3 = 3.2 * lcg_value();
    print("R1=".$R1." R2=".$R2." R3=".$R3."<br>");
    print("S1=".CircleS($R1)." S2=".CircleS($R2)." S3=".CircleS($R3)."<br>");
}

Proc18();
/**
 * @param $R1
 * @param $R2
 * @return float|int
 */
function RingS($R1, $R2)
{
    $S = M_PI * ($R1 * $R1 - $R2 * $R2);
    return $S;
}

/**
 *
 */
function Proc19()
{
    $R1 = 5 * lcg_value();
    $R2 = 1.3 * lcg_value();
    print("R1=".$R1." R2=".$R2." S ������=".RingS($R1, $R2)."<br>");
}

Proc19();
/**
 * @param $a
 * @param $h
 * @return float|int
 */
function TriangleP($a, $h)
{
    $b = sqrt(($a / 2) * ($a / 2) + $h * $h);
    $P = $a + 2 * $b;
    $P = round($P);
    return $P;
}

/**
 *
 */
function Proc20()
{
    print(" �������� ��������������� ������������. <br>");
    $a = 3.3 * lcg_value();
    $h = 3.7 * lcg_value();
    print("a=".$a." h=".$h." P=".TriangleP($a, $h));
}

Proc20();
/**
 * @param $a
 * @param $b
 * @return int
 */
function SumRange($a, $b)
{
    if ($a > $b) {
        return 0;
    }
    $S = $a;
    do {
        $a++;
        $S += $a;
        if ($a >= $b) {
            break;
        }
    } while (true);
    return $S;
}

/**
 *
 */
function Proc21()
{
    $a = rand(3, 7);
    $b = rand(5, 11);
    print(" from a=".$a." to b=".$b." Summa=".SumRange($a, $b)."<br>");
}

Proc21();
/**
 * @param $a
 * @param $b
 * @param $op
 * @return float|int
 */
function Calc($a, $b, $op)
{
    switch ($op) {
        case 1:
            $res = $a + $b;
            break;
        case 2:
            $res = $a - $b;
            break;
        case 3:
            $res = $a / $b;
            break;
        case 4:
        case 5:
        case 6:
        case 7:
            $res = $a * $b;
            break;
        default:
            print("Error.<br>");
    }
    return $res;
}

/**
 *
 */
function Proc22()
{
    $a = -2.1 * lcg_value();
    $b = 3.7 * lcg_value();
    $op = rand(1, 7);
    print("a=".$a." b=".$b." op=".$op." res=".Calc($a, $b, $op)."<br>");
}

Proc22();
/**
 * @param $x
 * @param $y
 * @return int
 */
function Quater($x, $y)
{
    if ($x > 0 && $y > 0) {
        return 1;
    } elseif ($x < 0 && $y > 0) {
        return 2;
    } elseif ($x < 0 && $y < 0) {
        return 3;
    } elseif ($x > 0 && $y < 0) {
        return 4;
    } else {
        return 0;
    }
}

/**
 *
 */
function Proc23()
{
    $x = rand(-3, 7);
    $y = rand(-7, 5);
    print(" ����� (".$x.",".$y.") ����� � ������������ �������� �".Quater($x, $y)."<br>");
}

Proc23();
/**
 * @param $K
 * @return bool
 */
function Even($K)
{
    $flag = $K % 2 == 0 ? true : false;
    return $flag;

}

/**
 *
 */
function Proc24()
{
    $a = array();
    $n = 9;
    print(" *********** Proc24() *********<br>");
    print(" ������ ������: <br>");
    for ($i = 0; $i < $n; $i++) {
        $a[$i] = rand(0, 20);
        print($a[$i]." ");
    }
    $S = 0;
    print("<br>");
    print(" ������ ������ �� ������ ���������: <br>");
    for ($i = 0; $i < $n; $i++) {
        if (Even($a[$i])) {
            $S += $a[$i];
            print($a[$i]." ");
        }
    }
    print("S=".$S."<br>");
}

Proc24();
/**
 * @return string
 */
function IsSquare()
{
    //print(" ******** IsSquare() ************<br>");
    $K = 80;
    //print("K=".$K."<br>");
    $a = sqrt($K);
    $b = (int) $a;
    $c = $a - $b;
    //print("K=".$K." a=".$a." b=".$b." c=".$c."<br>");
    //$flag= $c==0 ? true : false;
    $flag = $c == 0 ? "true" : "false";
    //print("flag=".$flag."<br>");
    return $flag;
}

//IsSquare();
/**
 *
 */
function Proc25()
{
    print(" *********** Proc25() *********<br>");
    for ($i = 0; $i < 10; $i++) {
        $a[$i] = rand(1, 16);
        print("a[".$i."]=".$a[$i]." ");
    }
    $j = 0;
    print("<br>");
    for ($i = 0; $i < 10; $i++) {
        if (IsSquare($a[$i])) {
            $j++;
            print("a[".$i."]=".$a[$i]." ");
        }
    }
    print(" ����� ".$j." ���������. <br>");
}

Proc25();
/**
 * @param $K
 * @return bool
 */
function IsPower5($K)
{
    /*
    print("�������� �������� �� ����� �������� ����� 5.<br>");
    print("n=".$n."<br>");
    $n=25;
    $n0=$n;
    $j=0;
    while($n%5==0)
    {
        $n=$n/5;
        $j++;        
    }
    print("n=".$n0." j=".$j."<br>");
    $flag= $K%5==0 ? true : false;
    return $flag;
    */

    while ($K > 0) {
        if ($K == 1) {
            return true;
        }
        if ($K % 5 != 0) {
            return false;
        }
        $K /= 5;
    }
    return false;
}

//IsPower5();
/**
 * @return bool
 */
function IsPower()
{
    $K = 25;
    $N = 5;
    print("�������� �������� �� ����� K �������� ����� N.<br>");
    print("K=".$K." N=".$N."<br>");
    while ($K > 0) {
        if ($K % $N == 1) {
            return true;
        }
        if ($K % $N != 0) {
            return false;
        }
        $K /= $N;
        print("K=".$K." N=".$N."<br>");
    }
    print("K=".$K." N=".$N."<br>");
}

IsPower();
/**
 * @return bool
 */
function IsPrime()
{
    $N = 19;
    $i = 1;
    print("�������� �������� �� ����� N ������� �����.<br>");
    print("N=".$N."<br>");
    while ($i < $N) {
        $i++;
        if ($N % $i != 0) {
            print(" ������� �����.<br>");
            return true;// ������� �����
        }

        if ($N % $i == 0) {
            print(" ��������� �����.<br>");
            return false;
        }

        $N /= $i;
        print("N=".$N." i=".$i."<br>");
    }
}

IsPrime();
/**
 *
 */
function DigitCountNumbers()
{
    $a = rand(41234, 30578);
    print("a=".$a."<br>");
    print("******* DigitCountNumbers() *********** <br>");
    while ($a > 0) {
        $d = $a % 10;
        $a = (int) ($a / 10);
        print("a=".$a." ");
        print("d=".$d."<br>");
    }
}

//DigitCountNumbers();
/**
 * @param $a
 */
function DigitCount($a)
{
    //$a=rand(41234,30578);

    //print("******* DigitCount() *********** <br>");
    //print("a=".$a."<br>");
    $save = $a;
    $i = 0;
    while ($a > 0) {
        $d = $a % 10;
        $a = (int) ($a / 10);
        $i++;
        print($d." ");
        //print("a=".$a." ");
        //print("d=".$d."<br>");
    }
    print("����� ���� � ����� ".$save." �����: ".$i."<br>");
}

//DigitCount();

/**
 *
 */
function Series29()
{
    print("******* Series29() *********** <br>");
    $x1 = rand(130, 4467);
    $x2 = rand(197, 29136);
    print("x1=".$x1."<br>");
    print("x2=".$x2."<br>");
    DigitCount($x1);
    DigitCount($x2);
}

Series29();
/**
 * @param $K
 * @param $N
 * @return int
 */
function DigitN0($K, $N)
{
    //$a=rand(41234,30578);
    $a = $K;
    //$N=3;
    $save2 = $a;
    //K-�����, N-����� ����� (��������� ������ ������) 
    print("******* DigitCount() *********** <br>");
    print("a=".$K."<br>");
    $save = $K;
    $i = 0;
    while ($a > 0) {
        $d = $a % 10;
        $a = (int) ($a / 10);
        $i++;
        print($d." ");
        //if($i==$N) $cif=$d;
        //print("a=".$a." ");
        //print("d=".$d."<br>");
    }
    print("����� ���� � ����� ".$save." �����: ".$i."<br>");
    if ($i < $N) {
        return -1;
    }
    print("a=".$a." i=".$i."<br>");
    $i = 0;
    $a = $save2;
    print("a=".$a." i=".$i."<br>");
    while ($a > 0) {
        $d = $a % 10;
        $a = (int) ($a / 10);
        $i++;
        //print($d." ");
        if ($i == $N) {
            $cif = $d;
            break;
        }
        //print("a=".$a." ");
        //print("d=".$d."<br>");
    }
    print("����� ����� ".$i." �����: ".$cif."<br>");
}

/**
 * @param $K
 * @param $N
 * @return int
 */
function DigitN($K, $N)
{
    $a = $K;
    $save2 = $K;
    //K-�����, N-����� ����� (��������� ������ ������) 
    print("******* DigitCount() *********** <br>");
    print("a=".$K."<br>");
    $save = $K;
    $i = 0;
    while ($K > 0) {
        $d = $K % 10;
        $K = (int) ($K / 10);
        $i++;
        print($d." ");
    }
    print("����� ���� � ����� ".$save." �����: ".$i."<br>");
    if ($i < $N) {
        return -1;
    }
    $i = 0;
    $K = $save2;
    while ($K > 0) {
        $d = $K % 10;
        $K = (int) ($K / 10);
        $i++;
        if ($i == $N) {
            $cif = $d;
            break;
        }
    }
    print("����� ����� ".$i." �����: ".$cif."<br>");
}

DigitN(57892, 2);
/**
 * @param $K
 * @return string
 */
function IsPalindrom($K)
{
    print("******* IsPalindrom() *********** <br>");
    print("a=".$K."<br>");
    $save = $K;
    $arr = array();
    $i = 0;
    $j = 0;
    while ($K > 0) {
        $d = $K % 10;
        $K = (int) ($K / 10);
        $i++;
        print($d." ");
        $arr[$j] = $d;
        $j++;
    }
    print("<br>");
    print("������ arr<br>");
    print_r($arr);
    print("<br>");
    $arr2 = array();
    $j = 0;
    print("count(arr)=".count($arr)."<br>");
    for ($i = count($arr) - 1; $i > -1; $i--) {
        $arr2[$j] = $arr[$i];
        $j++;
    }
    print("������ arr � �������� �������<br>");
    print_r($arr2);
    print("<br>");
    $i = $j = 0;
    for ($i = 0; $i < count($arr) - 1; $i++) {
        if ($arr[$i] - $arr2[$i] == 0) {
            $flag = "true";
            continue;
        }
        if ($arr[$i] - $arr2[$i] != 0) {
            $flag = "false";
            break;
        }
    }
    print($flag."<br>");
    return $flag;
}

//IsPalindrom(123321);
/**
 *
 */
function Proc31()// ����� 12 �� ������������ ��� ���������, ������?
{
    print(" ********* Proc31() ***********<br>");
    $arr_random = array(123321, 677, 121, 988, 1947, 12, 23677);
    for ($i = 0; $i < count($arr_random) - 1; $i++) {
        print("array_random[".$i."]=".$arr_random[$i]." ");
    }
    $index = rand(0, count($arr_random) - 1);
    print("�������� ��������� ������� �������: ".$arr_random[$index]."<br>");
    if (IsPalindrom($arr_random[$index]) == "true") {
        print(" ����� ".$arr_random[$index]." ����� ����������� (������ ���������� ������ ������).<br>");
    } else {
        print(" ����� ".$arr_random[$index]." �� ���������. <br>");
    }
}

Proc31();
/**
 * @param $D
 * @return float
 */
function DegToRad(&$D)// ������� � �������
{
    $save = $D;
    $D = $D * 0.017453;
    print($save." grad=".$D." rad<br>");
    return $D;
    //$rad=$D*0.017453;
    //print($D." grad=".$rad." rad<br>");
    //return $rad;
}

/**
 * @param $R
 * @return float
 */
function RadToDeg(&$R)//������� � �������
{
    $save = $R;
    $R *= 57.296;
    print($save." rad=".$R." grad<br>");
    return $R;
    //$grad=$R*57.296;
    //print($R." rad=".$grad." grad<br>");
    //return $grad;
}

/**
 *
 */
function Proc32()
{
    print(" ********* Proc32() ***********<br>");
    $D = rand(0, 360);
    $R = rand(1, 6) * lcg_value();
    print("D=".$D." R=".$R."<br>");
    DegToRad($D);
    RadToDeg($R);
    print("D=".$D." R=".$R."<br>");
    //print("rad=".$rad." grad=".$grad."<br>");
}

Proc32();
/**
 *
 */
function ArrayRand()
{
    print(" ********* Array random ***********<br>");
    $N = 9;
    $arr = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
    for ($i = 0; $i < $N; $i++) {
        print("a[".$i."]=".$arr[$i]." ");
    }
    $index = rand(0, count($arr) - 1);
    echo " �������� ��������� ������� �������: ".$arr[$index]."<br>";
    print(" ����� � ������� f print_r()...<br>");
    print_r($arr);
    print(" ����� � ������� f print_r() & pre/pre<br>");
    print("<br>");
    print("<pre>");
    print_r($arr);
    print("</pre>");
}

ArrayRand();
//**/
/**
 *
 */
function Proc26()
{
    print(" *********** Proc26() *********<br>");
    for ($i = 0; $i < 10; $i++) {
        $a[$i] = rand(1, 16);
        print("a[".$i."]=".$a[$i]." ");
    }
    $j = 0;
    print("<br>");
    for ($i = 0; $i < 10; $i++) {
        if (IsPower5($a[$i])) {
            $j++;
            print("a[".$i."]=".$a[$i]." ");
        }
    }
    print(" ����� ".$j." �������� 5. <br>");
}

Proc26();
/**
 * @param $n
 * @return int
 */
function Fact($n)// ���������
{
    $F = 1;
    $i = 0;
    do {
        $i++;
        $F *= $i;
        print($i." ");
        if ($i >= $n) {
            break;
        }
    } while (true);
    print("<br>");
    return $F;
}

/**
 * @param $n
 * @return int
 */
function Fact2($n)// ������� ���������: ������ ��� ��������
{
    $F = 1;
    $i = 0;
    do {
        $i += 2;
        $F *= $i;
        print($i." ");
        if ($i >= $n) {
            break;
        }

    } while (true);
    print("<br>");
    return $F;
}

/**
 * @param $n
 * @return int
 */
function Fact3($n)
{
    $F = 1;
    $i = -1;
    do {
        $i += 2;
        $F *= $i;
        print($i." ");
        if ($i >= $n) {
            break;
        }

    } while (true);
    print("<br>");
    return $F;
}

/**
 * @param $n
 */
function Fib($n)// ����� ���������
{
    $a = array();
    for ($i = 2; $i < $n; $i++) {
        $a[0] = 1;
        $a[1] = 1;
        $a[$i] = $a[$i - 1] + $a[$i - 2];
    }
    for ($i = 0; $i < $n; $i++) {
        print($a[$i]." ");
    }

}

/**
 * @param $x
 */
function Quaters($x)
{
    for ($i = 10; $i < $x; $i++) {
        $qu = $i * $i;
        print($i." i*i=".$qu."<br>");
    }
}

/**
 * function FibRec($F)
 * {
 * if($F==1) FibRec(1)=1;
 * if($F==2) FibtRec(2)=1;
 * if($F>2) FibRec($F)=FibRec($F-1)+FibRec($F-2);
 * FibRec(5);
 * }
 * FibRec();
 *
 * function FactRec($n)
 * {
 * if($n==0)
 * FactRec($n)=1;
 * if($n>0) FactRec($n)=FactRec($n-1);
 * print($n."!=".FactRec($n)."<br>");
 * return;
 * }
 **/
//

function FactorialRec($n)
{
    if ($n == 0) {
        return 1;
    }
    if ($n > 0) {
        return FactorialRec($n - 1) * $n;
    }
    return true;
}

echo 'Рекурсивный факториал 7!: <br>';
echo '7!='.FactorialRec(7);
echo '<br>';
/**
 * @param $n
 * @return int
 */
function FibRec($n)
{
    if ($n == 1) {
        return 1;
    }
    if ($n == 2) {
        return 1;
    }
    if ($n > 2) {
        return FibRec($n - 1) + FibRec($n - 2);
    }
}

/**
 * @param $counter
 */
function callself($counter)
{
    if ($counter > 0) {
        echo ($counter--)."<br>";
        callself($counter);
    } else {
        return;
    }
}

/**
 *
 */
function ProcRecursia()
{
    print("************ ProcRecursia() *************<br>");
    callself(4);
    $n = 7;
    print($n."!=".FactorialRec($n)."<br>");
    print("FibRec: ".FibRec($n)."<br>");
    print("<br>");
}

ProcRecursia();
/**
 *
 */
function Proc34()
{
    print("<br>");
    $n = rand(7, 11);
    print($n."!=".Fact($n)."<br>");
    print($n."!!=".Fact2($n)."<br>");
    print($n."!!=".Fact3($n)."<br>");
    print(" ��� ���� ���������.".Fib($n)."<br>");
    //$x=20;
    //print(" �������� �����:".Quaters($x)."<br>");
}

Proc34();

/**
 * @param $a
 * @param $b
 */
function falseSwap($a, $b)
{
    print("NNNNNNNNNNNNNNNNNNN<br>");
    print("in false function ".$a." ".$b."<br>");
    $temp = $a;
    $a = $b;
    $b = $temp;
    print($a." ".$b."<br>");
}

/**
 * @param $a
 * @param $b
 */
function realSwap(&$a, &$b)
{
    print("in true function ".$a." ".$b."<br>");
    $temp = $a;
    $a = $b;
    $b = $temp;
    print($a." ".$b."<br>");
}

/**
 *
 */
function SwapDemo()
{
    $a = 4;
    $b = 7;
    falseSwap($a, $b);
    print("outside of function ".$a." ".$b."<br>");
    realSwap($a, $b);
    print("outside of function ".$a." ".$b."<br>");
}

SwapDemo();

/**
 * @param $a
 */
function qqqq($a)
{
    $a[3] = 456;
    print($a[3]);
}

/**
 *
 */
function qqqqqqqq()
{
    $a = array(1, 2, 3, 4, 5, 6);
    qqqq($a);
    print("<br>".$a[3]."<br>");
}

qqqqqqqq();

/**
 * @param $a
 * @param $b
 * @param $c
 */
function outputParams($a, &$b, &$c)  // vernuli 2 otveta
{
    $b = (int) $a;
    $c = $a - $b;
}

/**
 *
 */
function argggh()
{
    //$outCeliy ;
    //$drobniy ;
    $x = 4.37;
    outputParams($x, $outCeliy, $drobniy);
    print($x." ".$outCeliy." ".$drobniy."<br>");
}

argggh();
