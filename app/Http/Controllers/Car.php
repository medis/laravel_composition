<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Vehicle;

class Car
{
  protected $vehicle;

  public function __construct(Vehicle $vehicle) {
    $this->vehicle = $vehicle;
  }

  public function drive($distance) {
    $this->vehicle->start($distance);
    $this->vehicle->stop($distance);
  }
}
