<?php

class Event {

    private $title;
    private $city;
    private $date;
    private $maxParticipants;

    public function __construct($title, $city, $date = null, $maxParticipants = null) {
        $this->title = $title;
        $this->city = $city;
        $this->date = $date;
        $this->maxParticipants = $maxParticipants;
    }

 
    public function getTitle() {
        return $this->title;
    }

    public function getCity() {
        return $this->city;
    }

    public function getDate() {
        return $this->date;
    }

    public function getMaxParticipants() {
        return $this->maxParticipants;
    }


    public function setTitle($title) {
        $this->title = $title;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setMaxParticipants($maxParticipants) {
        $this->maxParticipants = $maxParticipants;
    }

    public function display() {
        return $this->title . " - " . $this->city;
    }

    public function toArray() {
        return [
            'title' => $this->title,
            'city' => $this->city,
            'date' => $this->date,
            'maxParticipants' => $this->maxParticipants
        ];
    }
}

?>
