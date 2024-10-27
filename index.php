<?php
require_once 'Maze.php';
require_once 'Player.php';
require_once 'Observer.php';
require_once 'MazeGameManager.php';
require_once 'MazeFacade.php';

//Initialize the game manager (Singleton)
$gameManager = MazeGameManager::getInstance();

//Create the maze using the facade &Bridge Patterns
 $mazeBuilder = new SimpleMazeBuilder(); //Or ComplexMazeBuilder
 $MazeFacade = new MazeFacade($mazeBuilder);
 $MazeFacade->createMaze();
 $gameManager->setMaze($maze->getMaze());



 //The Player sets Movement Strategy (Strategy Pattern)
 $player = new Player();
 $player->setMovementStrategy(new SimpleMoveStrategy());

 //The Player is added as an observer (Observer Pattern)
 $mazeSubject = new MazeSubject();
 $playerObserver = new PlayerObserver();
 $maze->addObserver($playerObserver);

 //Notify players of an event
 $maze->notifyObserver ("A wall has collapsed");

 echo "Maze created: " . $gameManager->getMaze() . "\n";

?>