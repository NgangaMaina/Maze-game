<?php
class MazeFacade {
    private $builder;

    public function __construct(MazeBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function createMaze(){
        $this->builder->buildRoom();
        $this->builder->buildWall();
        $this->builder->buildDoor();
    }
}
?>