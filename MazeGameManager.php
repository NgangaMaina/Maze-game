<?php
class MazeGameManager {
    private static $instance = null;
    private $maze;

    public static function getInstance(){
        if(self :: $instance == null){
            self::$instance = new MazeGameManager();
        }
        return self::$instance;
    }

    public function setMaze(Maze $maze){
           $this->maze = $maze;  
    }

    public function getMaze(){
        return $this->maze;
    }
    
}