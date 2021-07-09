<?php 
class Product {
    private $artists;
    private $title;
    private $year;
    private $genres;
    private $tracks;
    private $price;

    //constructor
    function __construct($artists, $title, $price) {
        $this->artists = $artists;
        $this->title = $title;
        $this->price = $price;
    }

    //setters
    public function setArtist($artists) {
        if(is_array($artists)){
            $this->artists = array_merge($this->artists, $artists);           
        }else {
            $this->artists[] = $artists;
        }
    }

    public function setTitle($title) {        
        $this->title = $title;
    }

    public function setYear($year) {        
        $this->year = $year;
    }
    
    public function setGenre($genres) {
        if(is_array($genres)){
            $this->genres = array_merge($this->genres, $genres);           
        }else {
            $this->genres[] = $genres;
        }
    }
    
    public function setTracks($tracks) {
        if(is_array($tracks)){
            $this->tracks = array_merge($this->tracks, $tracks);           
        }else {
            $this->tracks[] = $tracks;
        }
    }
    
    public function setPrice($price) {        
        $this->price = $price;
    }

    //getters
    public function getArtist() {
        return $this->artists;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getYear() {
        return $this->year;
    }

    public function getGenre() {
        return $this->genres;
    }

    public function getTracklist() {
        return $this->tracks;
    }

    public function getPrice() {
        return $this->price;
    }
}