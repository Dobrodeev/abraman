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