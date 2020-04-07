<?php
/**
 * @param $a
 * @package exercises
 * Производится расчет периметра квадрата со стороной a по формуле P=4a
 * @license
 */
function begin1($a)
{
    $P = 4 * $a;
    echo 'Периметр квадрата: '.$P;
}

begin1(5);
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
    if (!is_numeric($a) AND !is_numeric($b)) {
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
    if (!is_numeric($r1) AND !is_numeric($r2)) {
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
    if (!is_numeric($x1) AND !is_numeric($x2)) {
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
    if (!is_numeric($A) AND !is_numeric($B) AND !is_numeric($C)) {
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
    if (!is_numeric($A) AND !is_numeric($B) AND !is_numeric($C)) {
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