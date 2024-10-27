<?php
interface Observer {
    public function update($message);
}

interface Subject {
    public function addObserver(Observer $observer);
    public function notifyObservers($message);
}

class MazeSubject implements Subject {
    private $observers = [];

    public function addObserver(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function notifyObservers($message) {
        foreach ($this->observers as $observer) {
            $observer->update($message);
        }
    }
}

class PlayerObserver implements Observer {
    public function update($message) {
        echo "Player received message: $message\n";
    }
}
?>