<?php
interface MovementStrategy {
    public function move();
}

class SimpleMoveStrategy implements MovementStrategy {
    public function move() {
        echo "Moving in a straight line.\n";
    }
}

class ComplexMoveStrategy implements MovementStrategy {
    public function move() {
        echo "Moving in a complex way.\n";
    }
}

class Player {
    private $movementStrategy;

    public function setMovementStrategy(MovementStrategy $strategy) {
        $this->movementStrategy = $strategy;
    }

    public function move() {
        $this->movementStrategy->move();
    }
}
?>
