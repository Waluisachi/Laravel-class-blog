<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller {
  public function index($name) {
    echo $name;
    echo " is one sick dude.";
  }
}
