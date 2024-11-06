<?php
class Belasting {
    // waarde belasting
    private function waardeBelasting($waarde) {
        if ($waarde < 100000) {
            return 600;
        } else if ($waarde >= 100000 && $waarde <= 200000) {
            return 2000;
        } else if ($waarde > 200000) {
            return 6000;
        }
        return 0;
    }

    // kamer belasting
    private function kamerBelasting($kamers) {
        if ($kamers == 1) {
            return 100;
        } else if ($kamers == 2) {
            return 200;
        } else if ($kamers >= 3) {
            return 300;
        }
        return 0;
    }

    // plaats belasting
    private function plaatsBelasting($stad) {
        switch ($stad) {
            case "Groningen":
            case "Amsterdam":
            case "Rotterdam":
                return 1000;
            default:
                return 0;
        }
    }

    // bereken belasting
    public function berekenBelasting(Huis $huis) {
        $belasting = 0;
        $belasting += $this->waardeBelasting($huis->getWaarde());
        $belasting += $this->kamerBelasting($huis->getKamers());
        $belasting += $this->plaatsBelasting($huis->getStad());

        return $belasting;
    }
}
?>
