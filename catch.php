<?php

/**
 * @author Valera
 * @copyright 2017
 */

function demo()
{
    for($i=-4; $i<=4; $i++)
    {
        try{
            if($i==0)
            {
                throw new Exception('Деление на ноль.');
            }
            $name = "qqqq";
            if($name == "Kolia")
            {
                throw new Exception('он мне не нравится!!!!');
            }
            print(24/$i."<br>");
        }
        catch(Exception $e){
            print($e->GetMessage()."bububu<br>");
        } 
    }
    
}
demo();

print("<br><br>");

function demo2()
{
    try{
        
        for($i=-4; $i<=4; $i++)
           {
            if($i==0)
                throw new Exception('Деление на ноль.');
            print(24/$i."<br>");
        
         
         }
    }
    catch(Exception $e){
            print("bububu<br>");
    }
}
demo2();
	
?>
   