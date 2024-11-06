<?php
require_once 'Veld.php';

class Spel {
    private Veld $veld;
    private ?int $firstIndex = null;
    private ?int $secondIndex = null;

    public function __construct() {
        $this->veld = new Veld();
    }

    public function getVeld(): Veld {
        return $this->veld;
    }

    public function flipKaart(int $index): void {
        if ($this->firstIndex === null) {
            $this->firstIndex = $index;
            $this->veld->getKaart($index)->reveal();
        } elseif ($this->secondIndex === null) {
            $this->secondIndex = $index;
            $this->veld->getKaart($index)->reveal();
            // RAHH CHECKER
            $this->checkMatch();
        }
    }

    private function checkMatch(): void {
        if ($this->firstIndex !== null && $this->secondIndex !== null) {
            $firstKaart = $this->veld->getKaart($this->firstIndex);
            $secondKaart = $this->veld->getKaart($this->secondIndex);

            if ($firstKaart->getValue() !== $secondKaart->getValue()) {
                // als er geen match is hide de kaarten na reload
                $firstKaart->hide();
                $secondKaart->hide();
            }

            //reset kaarten die geselecteerd zijn
            $this->firstIndex = null;
            $this->secondIndex = null;
        }
    }

    public function resetGame(): void {
        session_destroy();
        header("Location: index.php");
        exit;
    }
}
?>
