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