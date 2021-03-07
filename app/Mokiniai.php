<?php
namespace MokApp;

class Mokiniai
{
    public $name;
    public $surname;
    public $id;
    public $date;
    public $marks;
    public $average;
    public $count;
    public $class;

    public function __construct($class, $name, $surname, $marks)
    {
        $this->class = $class;
        $this->name = $name;
        $this->surname = $surname;
        $this->marks = $marks;
        $this->id = rand(1, 100);
        $this->date = date("Y/m/d");
        $this->count = 0;
        foreach($this->marks as $mark){
            $this->count += 1;
            $this->average += $mark;
        }
        $this->average = $this->average/$this->count;

    }

    public function showStud()
    {
        return[
            $this->class,
            $this->name,
            $this->surname,
            $this->id,
            $this->date,
            $this->average
        ];
    }
}

