<?php

namespace App\Http\Controllers;

class Vehicle
{
  public function start($distance) {
    printf('Start travelling %s<br/>', $distance);
  }

  public function stop($distance) {
    printf('Stop travelling %s<br/>', $distance);
  }
}
