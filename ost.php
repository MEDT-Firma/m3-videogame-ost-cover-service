<?php


class Track
{
    public $uid;
    public $name;
    public $artist;
    public $track_nr;
    public $duration;
    //  name, artist, track number and duration
}

class OST
{
    public $uid;
    public $name;
    public $game_name;
    public $release_year;
    public $track_list;
}

// funktion die alle ost aus einer xml in einen array ausliest