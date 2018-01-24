<?php

/**
 * @author Valera
 * @copyright 2017
 */
interface IFlyable
{
    public function fly();    
}

class Animal
{
    public $name;
    public $age;
}
class Bird extends Animal implements IFlyable
{
    public function fly()
    {
        
    }
}
class Technica 
{
    public $name;
    public $age;
    public $material;    
}
class Drandulet extends Technica
{
    public function fly()
    {
        
    }
}
class Airplane extends Technica implements IFlyable
{
    public function fly()
    {
        print("Flying.<br>");
        
    }
}

interface руль
{
    public function turn_left();
    public function turn_right();
} 
 
?>