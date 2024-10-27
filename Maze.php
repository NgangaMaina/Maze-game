<?php
abstract class Maze {
    protected $builder;

    public function __construct(MazeBuilder $builder)
    {
        $this->builder = $builder;
    }
    abstract public function create();
}

interface MazeBuilder {
    public function buildRoom();
    public function buildWall();
    public function buildDoor();
    public function getMaze();
}

class SimpleMazeBuilder implements MazeBuilder {
    private $maze;
    
    public function __construct()
    {
        $this->maze = "Simple Maze";
    }

    public function buildRoom() {
        echo "Building a simple room.\n";
    }
    


    public function buildWall() {
        echo "Building a simple wall\n";
    }

    public function buildDoor() {
        echo "Building a simple door\n";
    }

    public function getMaze() {
        return $this->maze;
    }
}

class ComplexMazeBuilder implements MazeBuilder {
private $maze;

public function __construct()
{
    $this->maze = "Complex Maze";
}
public function buildRoom() {
    echo "Building a complex room.\n";
}           

public function buildWall() {
    echo "Building a complex wall\n";
}   

public function buildDoor() {
    echo "Building a complex door\n";
}

public function getMaze() {
    return $this->maze;
   }
}
?>