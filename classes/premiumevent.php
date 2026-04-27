<?php
require_once "Event.php";

class PremiumEvent extends Event {

    private $price;

    public function __construct($title, $city, $date, $maxParticipants, $price) {
        parent::__construct($title, $city, $date, $maxParticipants);
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }


    public function display() {
        return parent::display() . " | Premium: $" . $this->price;
    }
}
?>
