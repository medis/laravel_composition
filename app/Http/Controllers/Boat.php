<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Vehicle;

class Boat
{
  protected $vehicle;

  public function __construct(Vehicle $vehicle) {
    $this->vehicle = $vehicle;
  }

  public function sail($distance) {
    $this->vehicle->start($distance);
    $this->vehicle->stop($distance);
  }
}
