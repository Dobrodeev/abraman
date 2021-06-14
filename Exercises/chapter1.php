<?php
//declare(strict_types=1);
/**
 * @param $a
 * @package exercises
 * @author Dobrodeev V.
 * Производится расчет периметра квадрата со стороной a по формуле P=4a
 * @license
 */
//
/**
 * Дана сторона квадрата a. Найти его периметр P = 4 * a
 * @param $a
 * @return float|int
 */
function begin1($a)
{
    if (!is_numeric($a)) {
        die('$a must be numeric.');
    }
    $P = 4 * $a;
    return $P;
}

echo 'Периметр квадрата: '.begin1(3.5356);

echo '<br>';
/**
 * @param $a
 */
function begin2($a)
{
    $S = 4 * $a;
    echo 'Площадь квадката: '.$S;
}

begin2(5);
echo '<br>';
/**
 * @param $a
 * @param $b
 */
function begin3($a, $b)
{
    $S = $a * $b;
    $P = 2 * ($a + $b);
    echo 'Площадь прямоугольника: '.$S.'<br>';
    echo 'Периметр прямоугольника: '.$P.'<br>';
}

begin3(7, 13);
/**
 * @param $d
 */
function begin4($d)
{
    $L = M_PI * $d;
    echo 'Длинна окружности: '.$L.'<br>';
}

begin4(13.67);
/**
 * Расчитывается обьем куба
 * @param $a
 */
function begin5($a)
{
    $V = $a * $a * $a;
    $S = 6 * $a * $a;
    echo 'Обьем куба: '.$V.'<br>';
    echo 'Площадь поверхности: '.$S.'<br>';
}

begin5(13.32);
/**
 * Расчитывается обьем прямоугольного параллелепипеда
 * по формуле V = a*b*c
 * @param $a
 * @param $b
 * @param $c
 */
function begin6($a, $b, $c)
{
    $V = $a * $b * $c;
    $S = 2 * ($a * $b + $b * $c + $a * $c);
    echo 'Обьем прямоугольного параллелепипеда: '.$V.'<br>';
    echo 'Площадь поверхности: '.$S.'<br>';
}

begin6(2.32, 76.4, 9.12);

/**
 * Вычисление длинны окружности и площади круга по формулам L = 2*pi*R; S= pi * R*R
 * @param $radius
 */
function begin7($radius)
{
    if (!is_int($radius) && !is_float($radius)) {
        die('Передавать можно только число');
    }
    $L = 2 * M_PI * $radius;
    $S = M_PI * $radius * $radius;
    echo 'Длинна окружности: '.$L.'<br>';
    echo 'Площадь круга: '.$S.'<br>';
}

begin7(2.32);
/**
 * Среднее арифметическое двух чисел
 * @param $a
 * @param $b
 * @return float|int
 */
function begin8($a, $b)
{
    if (!is_int($a) && !is_int($b)) {
        die('$a, $b - должны быть целые числа.');
    }
    $middleAryfmetic = ($a + $b) / 2;
    return $middleAryfmetic;
}

echo 'Среднее арифметическое двух чисел: '.begin8(25, 27).'<br>';
/**
 * Среднее геометрическое двух чисел
 * @param $a
 * @param $b
 * @return float
 */
function begin9($a, $b)
{
    if (!is_float($a) && !is_float($b)) {
        die('Должны быть числа.');
    }
    if ($a * $b < 0) {
        die('$a, $b должны быть >0');
    }
    $middleGeometric = sqrt($a * $b);
    return $middleGeometric;
}

echo 'Среднее геометрическое двух чисел: '.begin9(25.4, 27.4).'<br>';
/**
 * Сумма квадратов, разность, произведение, частное двух чисел
 * @param $a
 * @param $b
 */
function begin10($a, $b)
{
    if (!is_numeric($a) && !is_numeric($b)) {
        die('$a, $b должны быть числа.');
    }
    $aSquare = $a * $a;
    $bSquare = $b * $b;
    $Summa = $aSquare + $bSquare;
    $Raznost = $aSquare - $bSquare;
    $Proizvedenie = $aSquare * $bSquare;
    $Chastnoe = $aSquare / $bSquare;
    echo 'Сумма квадратов: Разность квадратов: Произведение квадратов: Частное квадратов: '.$Summa.' '.$Raznost.' '.$Proizvedenie.' '.$Chastnoe.'<br>';
}

begin10(25.4, 27);
/**
 * Сумма, разность, произведение, частное модулей двух чисел $a & $b
 * @param $a
 * @param $b
 * @return string
 */
function begin11($a, $b)
{
    if (!is_numeric($a) && !is_numeric($b)) {
        die('Должны быть только числа (целые, дробные)');
    }
    $Summa = abs($a) + abs($b);
    $R = abs($a) - abs($b);
    $P = abs($a) * abs($b);
    $Ch = abs($a) / abs($b);
    return $Summa.' '.$R.' '.$P.' '.$Ch;
}

echo 'Сумма, разность, произведение, частное модулей двух чисел $a & $b: <br>';
echo begin11(25.5, 27.7);
echo '<br>';
/**
 * @param $a
 * @param $b
 * @return string
 */
function begin12($a, $b)
{
    if (!is_numeric($a) and !is_numeric($b)) {
        die('Должны быть числовые значения сторон прямоугольного треугольника.');
    }
    $c = sqrt($a * $a + $b * $b);
    $Perimetr = $a + $b + $c;
    return $c.' '.$Perimetr.' ';
}

echo begin12(3, 4);
echo '<br>';
/**
 * Даны два круга с общим центром и радиусами R1 и R2 (R1 > R2).
 * Найти площади этих кругов S1 и S2, а также площадь S3 кольца, внешнийрадиус которого равен R1,
 * а внутренний радиус равен R2:
 * S1 = π · (R1)2,
 * S2 = π · (R2)2,
 * S3 = S1 − S2.
 * @param $r1
 * @param $r2
 * @return string
 */
function begin13($r1, $r2)
{
    if (!is_numeric($r1) and !is_numeric($r2)) {
        die('Входные данные - только числа, можна с плавающей точкой.');
    }
    $S1 = M_PI * $r1 * $r1;
    $S2 = M_PI * $r2 * $r2;
    $S3 = $S1 - $S2;
    return 'Площадь кольца: '.$S3;
}

echo begin13(4.23, 2.78);
echo '<br>';
/**
 * Дана длина L окружности. Найти ее радиус R и площадь S круга,
 * ограниченного этой окружностью, учитывая, что L = 2· π · R,
 * S = π · R2
 * @param $L
 * @return string
 */
function begin14($L)
{
    if (!is_numeric($L)) {
        die('L must be numeric.');
    }
    $r = $L / (2 * M_PI);
    $S = M_PI * $r * $r;
    return 'Радиус и площадь круга окружности заданной длинны $L = '.$L.' $r = '.$r.' $S = '.$S;
}

echo begin14(16.67);
echo '<br>';
/**
 * Дана площадь S круга. Найти его диаметр D и длину L окружности,
 * ограничивающей этот круг, учитывая, что L = 2· π · R,
 * S = π · R2.
 * @param $S
 * @return string
 */
function begin15($S)
{
    if (!is_numeric($S)) {
        die('$S must be numeric.');
    }
    $r = sqrt($S / M_PI);
    $d = 2 * $r;
    $L = 2 * M_PI * $r * $r;
    return 'Диаметр и длинна окружности заданной площади $S = '.$S.' $d = '.$d.' $L = '.$L;
}

echo begin15(34.78);
echo '<br>';
/**
 * Найти расстояние между двумя точками с заданными координата-
 * ми x1 и x2 на числовой оси: |x2 −x1|.
 * @param $x1
 * @param $x2
 * @return string
 */
function begin16($x1, $x2)
{
    if (!is_numeric($x1) and !is_numeric($x2)) {
        die('$x1, $x2 must be numecric.');
    }
    return 'Расстояние между точками $x1 & $x2: '.abs($x1 - $x2).' $x1 = '.$x1.' $x2 = '.$x2;
}

print begin16(-34.4, -23.57);
echo '<br>';
/**
 * Даны три точки A, B, C на числовой оси. Найти длины отрезков AC
 * и BC и их сумму
 * @param $A
 * @param $B
 * @param $C
 * @return string
 */
function begin17($A, $B, $C)
{
    if (!is_numeric($A) and !is_numeric($B) and !is_numeric($C)) {
        die('$A, $B, $C must be numeric.');
    }
    $AC = abs($A - $C);
    $BC = abs($B - $C);
    $ACBC = $AC + $BC;
    return 'Line $AC = '.$AC.' $BC = '.$BC.' $AC + $BC = '.$ACBC;
}

print begin17(3.5977, 23.34, 17.594);
echo '<br>';
/**
 * Даны три точки A, B, C на числовой оси. Точка C расположена
 * между точками A и B. Найти произведение длин отрезков AC и BC.
 * @param $A
 * @param $B
 * @param $C
 * @return string
 */
//

/**
 * @param $A
 * @param $B
 * @param $C
 * @return float|int
 */
function begin18($A, $B, $C)
{
    if (!is_numeric($A) and !is_numeric($B) and !is_numeric($C)) {
        die('$A, $B, $C must be numeric');
    }
    // $A < $C < $B
    $AC = abs($A - $C);
    $BC = abs($B - $C);
    $P = $AC * $BC;
//    return 'Произведение длин отрезков $AC * $BC = '.$P;
    return $P;
}

print 'Произведение длин отрезков $AC * $BC = '.begin18(3.232, 7.34, 19.97);
print '<br>';
//print begin18(3.232, 7.34, 19.97);
/**
 * аны координаты двух противоположных вершин прямоугольника:
 * (x1, y1), (x2, y2). Стороны прямоугольника параллельны осям координат.
 * Найти периметр и площадь данного прямоугольника.
 * @param $x1
 * @param $y1
 * @param $x2
 * @param $y2
 * @return float|int
 */
function begin19($x1, $y1, $x2, $y2)
{
    if (!is_numeric($x1) and !is_numeric($y1) and !is_numeric($x2) and !is_numeric($y2)) {
        die('$x1, $y1, $x2, $y2 must be numeric.');
    }
    $AB = abs($y2 - $y1);
    $BC = abs($x2 - $x1);
    $P = 2 * ($AB + $BC);
    $S = $AB * $BC;
    return $S;
}

print 'Площадь прямоугольника $S = '.begin19(3, 2.34, 5.78, 7.12);
print '<br>';
/**
 * Найти расстояние между двумя точками с заданными координатами
 * (x1, y1) и (x2, y2) на плоскости. Расстояние вычисляется по формуле sqrt((x2 −x1)2 + (y2 −y1)2)
 * @param $x1
 * @param $y1
 * @param $x2
 * @param $y2
 * @return float
 */
function begin20($x1, $y1, $x2, $y2)
{
    if (!is_numeric($x1) and !is_numeric($y1) and !is_numeric($x2) and !is_numeric($y2)) {
        die('$x1, $y1, $x2, $y2 must be numeric.');
    }
    $Line = sqrt(($x2 - $x1) * ($x2 - $x1) + ($y2 - $y1) * ($y2 - $y1));
    return $Line;
}

print 'Расстояние между точками ($x1, $y1) & ($x2, $y2) $Line = '.begin20(3, 2.34, 5.78, 7.12);
print '<br>';
/**
 * Даны координаты трех вершин треугольника: (x1, y1), (x2, y2), (x3, y3).
 * Для нахождения площади треугольника со сторонами a, b, c использовать формулу Герона
 * @param $x1
 * @param $y1
 * @param $x2
 * @param $y2
 * @param $x3
 * @param $y3
 * @return float
 */
function begin21($x1, $y1, $x2, $y2, $x3, $y3)
{
    $a = begin20($x1, $y1, $x2, $y2);
    $b = begin20($x1, $y1, $x3, $y3);
    $c = begin20($x2, $y2, $x3, $y3);
    $p = ($a + $b + $c) / 2;
    $S = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
    return $S;
}

print 'Площадь треугольника со сторонами $x1, $y1, $x2, $y2, $x3, $y3 $S = '.begin21(3, 2.34, 5.78, 7.12, 7.23, 2.734);
print '<br>';
/**
 * Поменять местами содержимое переменных A и B и вывести новые значения A и B.
 * @param $a
 * @param $b
 */
function begin22($a, $b)
{
    print '$a = '.$a.' $b = '.$b.'<br>';
    $temp = $a;
    $a = $b;
    $b = $temp;
    print 'Поменяли местами $a, $b <br>';
    print '$a = '.$a.' $b = '.$b.'<br>';
}

begin22(34.3, -43.34);
/**
 * Даны переменные A, B, C. Изменить их значения, переместив содержимое A в B, B — в C, C — в A, и
 * вывести новые значения переменных A,B, C
 * @param $a
 * @param $b
 * @param $c
 */
function begin23($a, $b, $c)
{
    print '$a = '.$a.' $b = '.$b.' $c = '.$c.'<br>';
    // a->b, b->c, c->a
    $temp = $a;
    $a = $c;
    $c = $b;
    $b = $temp;
    print '$a = '.$a.' $b = '.$b.' $c = '.$c.'<br>';
}

begin23(34.3, -43.34, 12.57);
/**
 * Даны переменные A, B, C. Изменить их значения, переместив содержимое A в C, C — в B, B — в A, и
 * вывести новые значения переменных A,B, C.
 * @param $a
 * @param $b
 * @param $c
 */
function begin24($a, $b, $c)
{
    print '$a = '.$a.' $b = '.$b.' $c = '.$c.'<br>';
    // a->c, c->b, b->a
    $temp = $a;
    $a = $b;
    $b = $c;
    $c = $temp;
    print '$a = '.$a.' $b = '.$b.' $c = '.$c.'<br>';
}

begin24(34.3, -43.34, 12.57);
/**
 * Найти значение функции y = 3x6 - 6x2 - 7 при данном значении x.
 * @param $x
 * @return float|int
 */
function begin25($x)
{
    if (!is_numeric($x)) {
        die('$x must be numeric.');
    }
    $y = 4 * pow($x, 6) - 6 * pow($x, 2) - 7;
    return $y;
}

print 'y(x) = '.begin25(-4.24552).'<br>';
/**
 * Найти значение функции y = 4(x¡3)6 ¡ 7(x¡3)3 + 2 при данном значении x.
 * @param $x
 * @return float|int
 */
function begin26($x)
{
    if (!is_numeric($x)) {
        die('$x must be numeric.');
    }
    $y = 4 * pow($x - 3, 6) - 7 * pow($x - 3, 3) + 2;
    return $y;
}

print 'y(x) = '.begin26(-4.24552).'<br>';
/**
 * @param $a
 * @return float|int
 */
function begin27($a)
{
    if (!is_numeric($a)) {
        die('$a must be numeric.');
    }
    $A2 = $a * $a;
    $A4 = $A2 * $A2;
    $A8 = $A4 * $A4;
    return $A8;
}

print '$A^8 = '.begin27(.0343).'<br>';
/**
 * @param $a
 * @return float|int
 */
function begin28($a)
{
    if (!is_numeric($a)) {
        exit('$a must be numeric.');
    }
    $A2 = $a * $a; //2
    $A3 = $A2 * $a;//3
    $A2 = $A2 * $A3;//5
    $A3 = $A2 * $A2;//10
    $A3 = $A3 * $A2;
    return $A3;
}

print '$A^15 = '.begin28(0.123545).'<br>';


/**
 * Перевод градусов в радианы
 * @param $alpha
 * @return float|int
 */
function begin29($alpha)
{
    /*if (!is_numeric($alpha)) {
        exit('$a must be numeric.');
    }*/
    $radian = $alpha * M_PI / 180;
    return $radian;
}

$number = '15.0523';
print 'Degrees to radian: 15 = '.begin29($number).' radians<br>';

/**
 * Радианы в градусы
 * 1 рад = 180/M_PI = 57,295779513 = 57 grad 17' 44,806''
 * @param $alpha
 * @return float|int
 */
function begin30($alpha)
{
    $gradus = $alpha * 180 / M_PI;
    return $gradus;
}

//print '1 radians = '.begin30(1).' gradus<br>';
$n = begin30(1);
printf("%.3f\n", $n);
echo '<br>';
/**
 * 1 миля в час равно 1.609344 километра в час
 * 1 километр в час равно 0.621371 миля в час.
 * @param $miles
 * @return float
 */
function milesToKilometres($miles)
{
    return $miles * 1.609344;
}

/**
 * @param  float  $miles
 * @return float
 */
function milesTokilometresTyped(float $miles)
{
    return $miles * 1.609344;
}

//echo '60 miles = '.milesToKilometres(60).' KPH<br>';
$kilometres = milesToKilometres(60);
printf("60 miles = %.1f", $kilometres);
echo '<br>';
/**
 * @param $Farengeith
 * @return float|int
 */
function begin31($Farengeith)
{
    $Celsium = ($Farengheith - 32) * 5 / 9;
    return $Celsium;
}

$Celsium = begin31(47);
printf("47 grad F = %.1f", $n);
echo '<br>';
/**
 * @param $Cels
 * @return float|int
 */
function begin32($Cels)
{
    $Farengheith = ($Cels + 32) * 9 / 5;
    return $Farengheith;
}

/*$CelsiumVar = 40;
echo '40 grad Celsium = '.begin32($CelsiumVar).' grad F<br>';*/
//echo '40 grad С = '.begin32(40).' grad F <br>';
/*$FarengheitVarrable = begin32(40);
echo '$FarengheitVarrable = '.$FarengheitVarrable.'<br>';*/
$FarengheitVarrable = 40;
echo '$FarengheitVarrable = '.$FarengheitVarrable.'<br>';
begin32($FarengheitVarrable);
echo '$FarengheitVarrable = '.$FarengheitVarrable.'<br>';
/**
 * @param $var
 */
function foo(&$var)
{
    $var++;
}

$a = 5;
foo($a);
// $a здесь равно 6
printf("a =  %d ", $a);
echo '<br>';
/**
 * @param $var
 * @return int
 */
function fooB($var)
{
    return $var++;
}

$b = 5;
fooB($a);
// $a здесь равно 6
printf("b =  %d ", $b);
echo '<br>';
echo '$b = '.fooB($b).'<br>';
$c = fooB($b);
echo '$c = '.fooB($b).'<br>';
/**
 * @param $var
 */
function fooC($var): void
{
    $var++;
}

//Решить линейное уравнение A· x + B = 0, заданное своими коэффи-
//циентами A и B
/**
 * @param $a
 * @param $b
 * @return float|int
 */
function begin38($a, $b)
{
    $x = -$b / $a;
    return $x;
}

//$x = 0;
$a1 = -13;
$b1 = 29;
$x = begin38($a1, $b1);
printf("x = %.3f", $x);
echo '<br>';
//echo '$x = '.$x.'<br>';
//print_r($x);
// -13x + 29 = 0;
//$x = begin38(-13, 29);
//printf("x = %.2f", $x);
//echo '$x = '.begin38(-13, 29).'<br>';
/**
 * корни квадратного уравнения
 * @param $a
 * @param $b
 * @param $c
 * @return float[]|int[]
 */
function begin39($a, $b, $c)
{
    $D = $b * $b - 4 * $a * $c;
    $x1 = -$b - sqrt($D) / (2 * $a);
    $x2 = -$b + sqrt($D) / (2 * $a);
    return [$x1, $x2];
}

$result = begin39(-13, 6, 23);
//printf("x1,2 = %.3f", $result);
/*echo '<pre>';
print_r($result);
echo '</pre>';*/
$x1 = round($result[0], 2);
$x2 = round($result[1], 2);
echo '$x1 = '.$x1.' $x2 = '.$x2.'<br>';

/**
 * решение системы линейных уравнений вида
 * A1· x + B1· y = C1,
 * A2· x + B2· y = C2,
 * @param $a1
 * @param $b1
 * @param $c1
 * @param $a2
 * @param $b2
 * @param $c2
 * @return float[]|int[]
 */
function begin40($a1, $b1, $c1, $a2, $b2, $c2)
{
    $D = $a1 * $b2 - $a2 * $b1;
    $x = ($c1 * $b2 - $c2 * $b1) / $D;
    $y = ($a1 * $c2 - $a2 * $c1) / $D;
    return [$x, $y];
}

$systemEquation = begin40(-3, 23, -19, 4, -57, -109);
printf("x= %.1f", $systemEquation[0]);
echo '<br>';
printf("y= %.1f", $systemEquation[1]);
echo '<br>';
/**
 * Дано расстояние L в сантиметрах. Используя операцию деления
 * нацело, найти количество полных метров в нем (1 метр = 100 см)
 * @param $lsantimetres
 * @return float|int
 */
function integer1($lsantimetres)
{
    return $metres = $lsantimetres / 10;
}

//$some_metres = 230;
//$some_metres = 0;
$some_metres = integer1(230);
//echo $some_metres;
//print_r($some_metres);
echo '230 santimetres = '.$some_metres.' metres<br>';
/**
 * Дана масса M в килограммах. Используя операцию деления нацело,
 * найти количество полных тонн в ней (1 тонна = 1000 кг).
 * @param $kilograms
 * @return float|int
 */
function integer2($kilograms)
{
    $tons = $kilograms / 1000;
    return $tons;
}

/**
 * Дан размер файла в байтах. Используя операцию деления нацело,
 * найти количество полных килобайтов, которые занимает данный файл (1 килобайт = 1024 байта).
 * @param $bytes
 * @return float|int
 */
function integer3($bytes)
{
    $kilobytes = $bytes / 1024;
    return $kilobytes;
}

/**
 * Даны целые положительные числа A и B (A > B). На отрезке длины A размещено максимально
 * возможное количество отрезков длины B (без наложений). Используя операцию деления нацело,
 * найти количество отрезков B, размещенных на отрезке A.
 * @param $a
 * @param $b
 * @return float|int
 */
function integer4($a, $b)
{
    $all = $a / $b;
    return $all;
}

/**
 * @param $data
 */
function create_table($data)
{
    echo '<table>';
//    reset($data);
    $value = current($data);
    while ($value) {
        echo "<tr><td>$value<td><tr>\n";
        $value = next($data);
    }
    echo '</table>';
}

$my_data = ['Первая порция данных  ', 'вторая', 'третья'];
create_table($my_data);
/**
 * @param $data
 * @param  null  $header
 * @param  null  $caption
 */
function create_table2($data, $header = null, $caption = null)
{
    echo '<table border = 1>';
//    reset($data);
    if ($caption) {
        echo "<caption>$caption<caption>";
    }
    if ($header) {
        echo "<tr><th>$header</tr></th>";
    }
    $value = current($data);
    while ($value) {
        echo "<tr><td>$value<td><tr>\n";
        $value = next($data);
    }
    echo '</table>';
}

create_table2($my_data, 'Header', 'Caption');
/**
 * Даны целые положительные числа A и B (A > B). На отрезке длины A размещено максимально возможное количество
 * отрезков длины B (без наложений). Используя операцию взятия остатка от деления нацело, найти длину незанятой
 * части отрезка A.
 * @param $a
 * @param $b
 * @return int[]
 */
function integer5($a, $b)
{
    $some = $a % $b;
    $all = (int) ($a / $b);
    return [$some, $all];
}

$part_result = integer5(17, 3);
echo 'В отрезке А помещается столоко отрезков Б: '.$part_result[1].' штук, '.$part_result[0].' - оставшаяся область<br>';
/**
 * Дано двузначное число. Вывести вначале его левую цифру (десятки), а затем — его правую цифру (единицы).
 * Для нахождения десятков использовать операцию деления нацело, для нахождения единиц — операцию взятия
 * остатка от деления.
 * @param $number
 * @return array|int[]
 */
function integer6($number): array
{
    $left = (int) ($number / 10);
    $right = $number % 10;
    return [$left, $right];
}

echo '<br>';
/**
 * Обычное двузначное число
 */
const SIMPLE_NUMBER = 17;
$number_result = integer6(SIMPLE_NUMBER);
echo "Число SIMPLE_NUMBER состоит из цифр: $number_result[0] & $number_result[1] <br>";
/**
 * Дано двузначное число. Найти сумму и произведение его цифр.
 * @param $result
 * @return array
 */
function integer7($result): array
{
    $amount = $result[0] + $result[1];
    $composition = $result[0] * $result[1];
    return [$amount, $composition];
}

$result_integer7 = integer7($number_result);
echo "Сумма и произведение цифр числа SIMPLE_NUMBER: $result_integer7[0] & $result_integer7[1] <br>";
/**
 * Дано двузначное число. Вывести число, полученное при перестановке цифр исходного числа.
 * @param $result
 * @return int
 */
function integer8($result): int
{
    $left = $result[0];
    $right = $result[1];
    $number = (int) implode([$right, $left]);
    return $number;
}

//echo $number_result;
$result_integer8 = integer8($number_result);
/*print_r($result_integer8);
var_dump($result_integer8);*/
echo " Было 17, а стало: $result_integer8<br>";
//unset($number_result, $result_integer7);
//echo $number_result;
//print_r($number_result);
