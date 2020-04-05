<?php

/**
 * получаем случайный индекс массива
 * подходит только для индексных массивов, индексы которых начинаются с 0
 * @param  array  $associateArray
 * @return mixed
 */
function generatorRandomArrays(array $associateArray)
{
    $index = mt_rand(0, count($associateArray) - 1);
    return $associateArray[$index];
}

/**
 * обертка для функции print_r()
 * @param  array  $associateArray
 */
function writeArray(array $associateArray)
{
    echo '<pre>';
    print_r($associateArray);
    echo '</pre>';
}

/**
 * Создаем индексный массив из целых чисел заданного размера
 * @param $size
 * @return array
 */
function generatorIntArray($size)
{
    $associateArray = [];
    if (!is_int($size) || $size < 0) {
        die('Размер массива можна указать только целім числом, которое >0');
    }
    for ($i = 0; $i < $size; $i++) {
        $associateArray[] = $i;
    }
    return $associateArray;
}

$associateArray1 = array(1991, 1989, 1970);
$notArray = 1941;
$alphabetArray = array(
    'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
    'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
    'U', 'V', 'W', 'X', 'Y', 'Z'
);
$naturalNumbersArray = generatorIntArray(26);
$associateArray = array_combine($alphabetArray, $naturalNumbersArray);
writeArray($associateArray);
//writeArray($array1);
//writeArray($alphabetArray);

//writeArray($naturalNumbersArray);
//$someoneArray = generatorIntArray(10);
//writeArray(generatorIntArray(10));

//writeArray($notArray);
//echo 'Случайній єлемент массива: '.generatorRandomArrays($array1);

$start0 = microtime(true);
foreach (array_reverse($associateArray, true) as $item => $value) {
    echo $item.'=>'.$value.' ';
}
echo '<br>';
$finish0 = microtime(true);
$delta0 = $finish0 - $start0;
echo $delta0.' сек.<br>';
/*$start = microtime(true);

$array = array();

for ($i = 0; $i < 1000000; $i++) {
    $array[] = rand(0, 1000000);
}

$finish = microtime(true);

$delta = $finish - $start;

echo $delta . ' сек.';*/
$start = microtime(true);
for (end($associateArray); ($key = key($associateArray)) !== null; prev($associateArray)) {
    print($key." : ".current($associateArray)."\n");
}
$finish = microtime(true);
$delta = $finish - $start;
echo '<br>';
echo $delta.' сек.<br>';
//writeArray($associateArray);
/** Pyramida
 * 2345
 * 2345
 * 345
 * 45
 * 5
 */

function pyramidaOfNumbers()
{
    for ($i = 0; $i < 9; $i++) {
        for ($j = 0; $j < 9; $j++) {
            echo $j.' ';
        }
    }
}


/** Pyramida
 * 2345
 * 2345
 * 345
 * 45
 * 5
 */
function pyramidaDown()
{
    $a = 3;
    $b = 6;

    for ($j = 0; $j < $a; $j++) {
        for ($i = $a; $i <= $b; $i++) {
            echo $i;
        }
        echo '<br/>';
    }

    for ($j = $a + 1; $j <= $b; $j++) {
        for ($i = $a; $i <= $b; $i++) {
            if ($i < $j) {
                echo '0';
            } else {
                echo $i;
            }
        }

        echo '<br/>';
    }
}

/** S = 1 + x^2/2! + x^4/4! + ...+ x^n/n!
 * n<N, x<R
 * n & x задаются через адресную строку методом GET
 *
 *
 */
//

/**
 * sin x = x - x^3/3! + x^5/5! - ...
 * cos x = 1 - x^2/2! + x^4/4! - x^6/6! + ...
 * e^x = 1 + x/1! + x^2/2! + x^3/3! + ...
 * то есть расчитать cos (87.44) с точностью до 4-го члена ряда
 * @param $x
 * @param $n
 */
function exponenta($x, $n)
{
    $i = 1;
    $exponenta = 1;
    while ($i <= $n) {
        $exponenta += pow($x, 2 * $i) / (recFactorial(2 * $i));
        $i++;
    }
    /*
     * exp = 1 + x^2/2! + x^4/4! + ...
     * */
    echo 'exp('.$x.')='.$exponenta.'<br>';
    echo ' при n='.$n.'<br>';
}

/** Более оптимальный просчет суммы ряда */
function summaRiada()
{
    $x = 5.3;
    $n = 20;
    $sum = 1;
    $fact = 1;
    for ($i = 2; $i <= 2 * $n; $i += 2) {
        for ($j = ($i - 1); $j <= $i; $j++) {
            $fact *= $j;
        }
        $sum += pow($x, $i) / ($fact);
    }
    echo $sum;
}


/**
 * Формируем матрицу натуральных чисел  размерностью 9 * 9
 * 1  2  3  4   5 6  7  8  9
 * 10 11 12 13 14 14 16 17 18
 * 19 20 21 22 23 24
 * 28
 * 37
 * Затем транспонируем матрицу, то есть столбики делаем строками
 */
function cvadrarickNumbers()
{
    // Заполнение матрицы
    $associateArray = [];
    echo '<table>';
    for ($i = 0; $i < 9; $i++) {
        echo '<tr>';
        for ($j = 0; $j < 9; $j++) {
            echo '<td>'.$associateArray[$i][$j] = (9 * $i + $j + 1).'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    // Преобразование матрицы
    for ($i = 0; $i < 9; $i++) {
        for ($j = 0; $j < 9; $j++) {
            if ($j > $i) {
                $temp = $associateArray[$i][$j];
                $associateArray[$i][$j] = $associateArray[$j][$i];
                $associateArray[$j][$i] = $temp;
            }
        }
    }
    // Вывод матрицы после преобразования
    echo '<hr>';
    echo '<table>';
    for ($i = 0; $i < 9; $i++) {
        echo '<tr>';
        for ($j = 0; $j < 9; $j++) {
            echo '<td>'.$associateArray[$i][$j].'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

cvadrarickNumbers();
// $a[$i][$j]=$a[$j][$i]

/**
 * Вывод диагоналей матрицы, все остальное заполняется нулями. Точку пересечения диагоналей делаем нулем.
 * @param $N
 */
function diagonalMatrica($N)
{
    // $N - размер квадрата
    $N = 15;
    for ($i = 0; $i < $N; $i++) {
        for ($j = 0; $j < $N; $j++) {
//        if (($i == $j || $j == $N - 1 -$i) && !($i == $j && $j == $N - 1 -$i))
            if ($i == $j ^ $j == $N - 1 - $i) {
                echo 'X-';
            } else {
                echo '0-';
            }
        }
        echo '<br>';
    }
}

diagonalMatrica(9);
/**
 * Рекурсивный расчет факториала
 * @param $n
 * @return float|int
 */
function recFactorial($n)
{
    if (!is_int($n) || $n < 0) {
        die('Нужно только целое число >0');
    }
    if ($n < 0) {
        return 0;
    }
    if ($n == 0) {
        return 1;
    }
    return $n * recFactorial($n - 1);
}

/**
 * Расчет факториала с помощью цикла for
 * @param $n
 * @return float|int
 */
function factorial($n)
{
    if (!is_int($n) || $n < 0) {
        die('Нужно только натуральное число');
    }
    if ($n < 0) {
        return 0;
    }
    if ($n == 0) {
        return 1;
    }
    $f = 1;
    for ($i = 1; $i <= $n; $i++) {
        $f = $f * $i;
    }
    return $f;
}

$factorial = 10;
echo 'Фактториал 5!='.factorial(3).'<br>';
echo 'Рекурсивный факториал: '.$factorial.'!='.recFactorial($factorial).'<br>';