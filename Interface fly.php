<?php

/**
 * @author Kirill Swiderscky
 * @copyright 2017
 */
interface IFlyable
{
    /**
     * @return mixed
     */
    public function fly();
}

/**
 * Class Animal
 */
class Animal
{
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $age;
}

/**
 * Class Bird
 */
class Bird extends Animal implements IFlyable
{
    /**
     * @return mixed|void
     */
    public function fly()
    {

    }
}

/**
 * Class Technica
 */
class Technica
{
    /**
     * @var
     */
    public $name;
    public $age;
    public $material;
}

/**
 * Class Drandulet
 */
class Drandulet extends Technica
{
    public function fly()
    {

    }
}

/**
 * Class Airplane
 */
class Airplane extends Technica implements IFlyable
{
    public function fly()
    {
        print("Flying.<br>");

    }
}

/**
 * Interface IMoveadle
 */
interface IMoveadle
{
    public function turn_left();

    public function turn_right();
}

?>