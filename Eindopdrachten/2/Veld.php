<?php
require_once 'Kaarten.php';

class Veld {
    private array $kaarten = [];
    private int $size = 4;

    public function __construct() {
        $this->initializeBoard();
    }

    private function initializeBoard(): void {
        $values = array_merge(range(1, 8), range(1, 8));
        shuffle($values);
        
        foreach ($values as $value) {
            $this->kaarten[] = new Kaarten($value);
        }
    }

    public function getKaarten(): array {
        return $this->kaarten;
    }

    public function getKaart(int $index): ?Kaarten {
        return $this->kaarten[$index] ?? null;
    }

    public function display(): array {
        $grid = [];
        foreach ($this->kaarten as $kaart) {
            $grid[] = $kaart->isTeZien() ? $kaart->getValue() : '*';
        }
        return $grid;
    }
}
?>
