<?php
class Kaarten {

// functies om het allemaal gw te laten doen
    private int $value;
    private bool $isTeZien = false;

    public function __construct(int $value) {
        $this->value = $value;
    }

    public function getValue(): int {
        return $this->value;
    }

    public function isTeZien(): bool {
        return $this->isTeZien;
    }

    public function flip(): void {
        $this->isTeZien = !$this->isTeZien;
    }

    public function reveal(): void {
        $this->isTeZien = true;
    }

    public function hide(): void {
        $this->isTeZien = false;
    }
}
?>
