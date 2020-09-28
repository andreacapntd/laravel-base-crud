<?php

namespace App\Http\Controllers;

use App\PaganteModel;
use Illuminate\Http\Request;

class PaganteController extends Controller
{

  public function index() {

    $paganti = PaganteModel::all();
    return view('paganti', compact('paganti'));

  }

}
