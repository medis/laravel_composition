<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CompositionTest extends TestCase
{

  protected $car;
  protected $boat;

  public function setup() {
    parent::setUp();
    $vehicle = new \App\Http\Controllers\Vehicle();
    $this->car = new \App\Http\Controllers\Car($vehicle);
    $this->boat = new \App\Http\Controllers\Boat($vehicle);
  }

  public function testComposition() {
    $this->expectOutputString('Start travelling 5 miles<br/>Stop travelling 5 miles<br/>');
    $this->car->drive('5 miles');

    $this->expectOutputString('Start travelling 5 miles<br/>Stop travelling 5 miles<br/>Start travelling 1 nautical miles<br/>Stop travelling 1 nautical miles<br/>');
    $this->boat->sail('1 nautical miles');
  }
}
