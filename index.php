<?php
require_once 'C:\xampp\htdocs\Maze Game\Maze-game\Maze.php';
require_once 'C:\xampp\htdocs\Maze Game\Maze-game\Player.php';
require_once 'C:\xampp\htdocs\Maze Game\Maze-game\Observer.php';
require_once 'C:\xampp\htdocs\Maze Game\Maze-game\MazeGameManager.php';
require_once 'C:\xampp\htdocs\Maze Game\Maze-game\MazeFcade.php';

//Initialize the game manager (Singleton)
$gameManager = MazeGameManager::getInstance();

//Create the maze using the facade &Bridge Patterns
 $mazeBuilder = new SimpleMazeBuilder(); //Or ComplexMazeBuilder
 $MazeFacade = new MazeFacade($mazeBuilder);
 $MazeFacade->createMaze();

 $maze = $mazeBuilder->getMaze();
 $gameManager->setMaze($maze);



 //The Player sets Movement Strategy (Strategy Pattern)
 $player = new Player();
 $player->setMovementStrategy(new SimpleMoveStrategy());

 //The Player is added as an observer (Observer Pattern)
 $mazeSubject = new MazeSubject();
 $playerObserver = new PlayerObserver();
 $mazeSubject->addObserver($playerObserver);

 //Notify players of an event
 $mazeSubject->notifyObservers ("A wall has collapsed");

 echo "Maze created: " . $gameManager->getMaze() . "\n";

?>