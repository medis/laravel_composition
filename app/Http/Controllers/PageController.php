<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Car;
use App\Http\Controllers\Boat;

class PageController extends Controller
{
  protected $car;
  protected $boat;

  public function __construct(Car $car, Boat $boat) {
    $this->car = $car;
    $this->boat = $boat;
  }

  public function index() {
    $this->car->drive('20 miles');
    print '<br/>';
    $this->boat->sail('20 nautical miles');
  }
}
