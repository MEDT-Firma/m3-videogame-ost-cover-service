<?php


class Track
{
    public $uid;
    public $name;
    public $artist;
    public $track_nr;
    public $duration;

    public function __construct($uid, $name, $artist, $track_nr, $duration)
    {
        $this->uid = $uid;
        $this->name = $name;
        $this->artist = $artist;
        $this->track_nr = $track_nr;
        $this->duration = $duration;
    }
    //  name, artist, track number and duration
}

class OST
{
    public $uid;
    public $name;
    public $game_name;
    public $release_year;
    public $track_list;

    public function __construct($uid, $name, $game_name, $release_year, $track_list)
    {
        $this->uid = $uid;
        $this->name = $name;
        $this->game_name = $game_name;
        $this->release_year = $release_year;
        $this->track_list = $track_list;
    }
}

// funktion die alle ost aus einer xml in einen array ausliest

