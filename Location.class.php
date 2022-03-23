<?php
/*
   Represents a Location on the earth 
 */
class Location
{
  public $latitude;
  public $longitude;
  public $city_code;

  function__construct($latitude,$longitude,$city_code)
  {
    $this->latitude = $latitude;
    $this->longitude = $longitude;
    $this->city_code = $city_code;
  }


}
?>