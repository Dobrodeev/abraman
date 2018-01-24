<?php

/**
 * @author Valera
 * @copyright 2017
 */

function Stroca1()
{
    $C="C";
    $C2="acsdc fgrgc gdgdggd вавм.";
    printf($C."<br>");
    printf(ord($C)."<br>");
    printf(strlen($C2)."<br>");
    $N=rand(32,126);
    printf("N=".$N."<br>");
    printf(chr($N)."<br>");
    $C3="g";
    $num = ord($C3);
    printf("C3=".$C3."<br>");
    printf(chr($num+1)."<br>");
    $N2=rand(1,26);
    
    for($i = 1; $i<=26; $i++)
        print(chr(ord("A")-1+$i));
}
Stroca1();
function Stroca2()
{
    print("<br>");
    print("******** Stroca2() ************<br>");
    $N=rand(32,126);
    printf("Nrand=".$N."<br>");
    $a=chr($N);
    print("a=".$a."<br>");
}
Stroca2();
function Stroca3()
{
    print("******** Stroca3() ************<br>");
    $N=ord("C");
    $N1=chr(--$N);
    $N++;
    $N0=chr($N);
    $N2=chr(++$N);
    printf("N=".$N."<br>");
    printf("N1=".$N1." N=".$N0." N2=".$N2."<br>");
}
Stroca3();
function Stroca4()
{
    print("******** Stroca4() ************<br>");
    $N=rand(1,26);
    printf("N=".$N."<br>");
    for($i=0;$i<=$N;$i++)
    {
        print(chr(ord("A")-1+$i));
    }
    print("<br>");
}
Stroca4();
function Stroca5()
{
    print("******** Stroca5() ************<br>");
    $N=rand(1,26);
    printf("N=".$N."<br>");
    for($i=0;$i<=$N;$i++)
    {
        print(chr(ord("z")-1-$i));
    }
    print("<br>");
}
Stroca5();
function Stroca6()
{
    print("******** Stroca6() ************<br>");
    $var=rand(1,3);
    switch($var)
    {
        case 1: $symbol="C";
        break;
        case 2: $symbol="С";
        break;
        case 3: $symbol=7;
        break;
        default: print("Error.<br>");
    }
    print("var=".$var." symbol=".$symbol."<br>");
    print("ord()=".ord($symbol)."<br>");
    if(ord($symbol)>=48 && ord($symbol)<=57)
        print("Symbol is digit");
    elseif(ord($symbol)>=65 && ord($symbol)<=122)
        print("Symbol is lat.<br>");
    elseif(ord($symbol)>=128 && ord($symbol)<=207)
        print("Symbol is rus.<br>");
    else print("Symbol is something else.<br>");
    print("<br>");
}
Stroca6();
function Stroca7()
{
    print("******** Stroca7() ************<br>");
    $str="Саакашвили выступал на митинге перед радой";
    //print($str."<br>");
    $size=strlen($str)-1;
    print($size."<br>");
    print($str[0]."<br>");
    print($str[$size]."<br>");
}
Stroca7();
function Stroca8()
{
    print("******** Stroca8() ************<br>");
    $n=rand(4,13);
    $symbol="C";
    for($i=0;$i<$n;$i++)
    {
        print($symbol."<br>");
    }
}
Stroca8();
function Stroca9()
{
    print("******** Stroca9() ************<br>");
    $n=12;
    $c1='t';
    $c2='r';
    for($i=0;$i<$n/2;$i++)
    {
        print($c1.$c2);
    }
    print("<br>");
}
Stroca9();
function Stroca10()
{
    print("******** Stroca10() ************<br>");
    $str="Саакашвили выступал на митинге перед радой.";
    print($str."<br>");
    for($i=strlen($str)-1;$i>=0;$i--)
    {
        print($str[$i]);
    }
    print("<br>");
    print(strrev($str)."<br>");
}
Stroca10();
function Stroca11()
{
    
    print("******** Stroca11() ************<br>");
    $str="Саакашвили выступал на митинге перед радой.";
    $flag=" ";
    print($str."<br>");
    print($flag."<br>");
    
    //print($str[0]);
    
    for($i=0;$i<strlen($str);$i++)
    {
        print(" ".$str[$i]);
    }
    print("<br>");
}
Stroca11();
function Stroca12()
{
    print("******** Stroca12() ************<br>");
    $n=rand(3,7);
    print("n=".$n."<br>");
    $str="Саакашвили выступал на митинге перед радой.";
    $flag="*";
    print($str."<br>");    
    $stars = "";
    for($i=0;$i<$n;$i++)
    {
        $stars.=$flag;
    }
    for($i=0;$i<strlen($str);$i++)
    {
        print($stars.$str[$i]);
    }
    print("<br>");
}
Stroca12();
function Stroca13()
{
    print("******** Stroca13() ************<br>");
    $str="Саакашвили 13 выступал на митинге перед 1-й радой.";
    print($str."<br>");
    $counter=0;
    for($i=0;$i<strlen($str);$i++)
    {
        if(ctype_digit($str[$i]))
        {
            $counter++;
        }
    }
    print(" Всего ".$counter." цифр в строке.<br>");
}
Stroca13();
function Stroca14()
{
    print("******** Stroca14() ************<br>");
    $str="Саакашвили 13 выступал на митинге перед 1-й радой. Helloween Hey Lord!";//Megadeth Holy Wars.
    print($str."<br>");// [97,122] a,b,c,...,z
    $counter=0;//[65,90] A,B,C,...,Z
    for($i=0;$i<strlen($str);$i++)//[128,159] А,Б,В,...,Я ***MS-DOS
    {
        if(ord($str[$i])>=65 && ord($str[$i])<=90)//[224,255] а,б,в,...,я ***MS-Windows
        {
            $counter++;//[160,175] а,б,в,...,п ***MS-DOS
        }
    }
    print(" Всего ".$counter." прописных латинских букв в строке.<br>");//[192,223] А,Б,В,...,Я ***MS-Windows
}
Stroca14();
function Stroca15()
{
    print("******** Stroca15() ************<br>");
    $str="Саакашвили 13 выступал на митинге перед 1-й радой. Helloween Hey Lord!";//Megadeth Holy Wars.
    print($str."<br>");// [97,122] a,b,c,...,z
    $counter=0;//[65,90] A,B,C,...,Z
    for($i=0;$i<strlen($str);$i++)//[128,159] А,Б,В,...,Я ***MS-DOS
    {
        if((ord($str[$i])>=97 && ord($str[$i])<=122) || (ord($str[$i])>=224 && ord($str[$i])<=255))//[224,255] а,б,в,...,я ***MS-Windows
        {
            $counter++;//[160,175] а,б,в,...,п ***MS-DOS
        }
    }
    print(" Всего ".$counter." строчных латинских и русских букв в строке.<br>");//[192,223] А,Б,В,...,Я ***MS-Windows
    print(" Всего символов в строке: ".strlen($str)."<br>");
}
Stroca15();
function Stroca16()
{
    print("******** Stroca16() ************<br>");
    $str="Megadeth Holy Wars. Helloween Hey Lord!";
    print($str."<br>");
    print(strtolower($str)."<br>");
}
Stroca16();
function Stroca17()
{
    print("******** Stroca17() ************<br>");
    $str="Megadeth Holy Wars. Helloween Hey Lord!";
    print($str."<br>");
    print(strtoupper($str)."<br>");
}
Stroca17();
    function strtolower_utf8($string){ 
  $convert_to = array( 
    "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", 
    "v", "w", "x", "y", "z", "a", "a", "a", "a", "a", "a", "?", "c", "e", "e", "e", "e", "i", "i", "i", "i", 
    "?", "n", "o", "o", "o", "o", "o", "o", "u", "u", "u", "u", "y", "а", "б", "в", "г", "д", "е", "ё", "ж", 
    "з", "и", "й", "к", "л", "м", "н", "о", "п", "р", "с", "т", "у", "ф", "х", "ц", "ч", "ш", "щ", "ъ", "ы", 
    "ь", "э", "ю", "я" 
  ); 
  $convert_from = array( 
    "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", 
    "V", "W", "X", "Y", "Z", "A", "A", "A", "A", "A", "A", "?", "C", "E", "E", "E", "E", "I", "I", "I", "I", 
    "?", "N", "O", "O", "O", "O", "O", "O", "U", "U", "U", "U", "Y", "А", "Б", "В", "Г", "Д", "Е", "Ё", "Ж", 
    "З", "И", "Й", "К", "Л", "М", "Н", "О", "П", "Р", "С", "Т", "У", "Ф", "Х", "Ц", "Ч", "Ш", "Щ", "Ъ", "Ъ", 
    "Ь", "Э", "Ю", "Я" 
  ); 

  return str_replace($convert_from, $convert_to, $string); 
}

function strtoupper_utf8($string){ 
  $convert_to = array( 
    "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", 
    "v", "w", "x", "y", "z", "a", "a", "a", "a", "a", "a", "?", "c", "e", "e", "e", "e", "i", "i", "i", "i", 
    "?", "n", "o", "o", "o", "o", "o", "o", "u", "u", "u", "u", "y", "а", "б", "в", "г", "д", "е", "ё", "ж", 
    "з", "и", "й", "к", "л", "м", "н", "о", "п", "р", "с", "т", "у", "ф", "х", "ц", "ч", "ш", "щ", "ъ", "ы", 
    "ь", "э", "ю", "я" 
  ); 
  $convert_from = array( 
    "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", 
    "V", "W", "X", "Y", "Z", "A", "A", "A", "A", "A", "A", "?", "C", "E", "E", "E", "E", "I", "I", "I", "I", 
    "?", "N", "O", "O", "O", "O", "O", "O", "U", "U", "U", "U", "Y", "А", "Б", "В", "Г", "Д", "Е", "Ё", "Ж", 
    "З", "И", "Й", "К", "Л", "М", "Н", "О", "П", "Р", "С", "Т", "У", "Ф", "Х", "Ц", "Ч", "Ш", "Щ", "Ъ", "Ъ", 
    "Ь", "Э", "Ю", "Я" 
  ); 

  return str_replace($convert_to,$convert_from, $string); 
}
function Stroca18()
{
    print("******** Stroca18() ************<br>");
    $str="Саакашвили 13 выступал на митинге перед 1-й радой. Megadeth Holy Wars. Helloween Hey Lord!";
    print($str."<br>");
    print(ctype_upper($str)."<br>");

    //print(strtolower($str)."<br>");
    $strings = array('AKLWC139', 'LMNSDO', 'akwSKWsm');
    echo "<pre>";
    print_r($strings);
    echo "</pre>";
    for($i=0;$i<strlen($str);$i++)
    {
        if(ctype_upper($str[$i]))
        {
            print(strtolower_utf8($str[$i]));
        }
        else
            print(strtoupper_utf8($str[$i]));
    }
    print("<br>");
    foreach ($strings as $testcase) {
    
    /**if (ctype_upper($testcase)) 
     {
            
            echo "The string $testcase consists of all uppercase letters.\n";
     }
        else 
     {
        echo "The string $testcase does not consist of all uppercase letters.\n";
     }
     print("<br>");
         */
    }
}
Stroca18();
function Stroca19()
{
    print("******** Stroca19() ************<br>");
    $n=7*lcg_value();
    $str="$n";
    print($str."<br>");
    if(ctype_digit($str))
        print("1 (int)<br>");
    else print("2 (float)<br>");
    $strings = array('1820.20', '10002', 'wsl!12');
    foreach ($strings as $testcase) 
    {
        if (ctype_digit($testcase)) 
        {
            echo "Строка $testcase состоит только из цифр.\n";
        } 
        else 
        {
            echo "Строка $testcase не состоит только из цифр.\n";
        }
}
print("<br>");
}
Stroca19();
class forString
{
    public function forS()
    {
        print('MyClass class has initialized !');
        print("<br>");
    }    
}
$obj=new forString();
$obj->forS();
class forString2
{
    public $name;
    public function forName()
    {
        print("Hello All, I am ".$this->name."<br>");
    }
}
$obj=new forString2;
$obj->name="Someone";
$obj->forName();
class FactorialCounter
{
    public $n;
    public function factorial($x)
    {
        $fac=1;
        for($i=$x;$i>0;$i--)
        {
            $fac*=$i;
        }
        print($x."!=".$fac."<br>");
    }
}
$obj=new FactorialCounter;
$obj->factorial(7);
?>