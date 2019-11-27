<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Validators\ReservaValidator;

/**
 * Class ReservasController.
 *
 * @package namespace App\Http\Controllers;
 */
class ReservaController extends Controller {

    public function store(Request $request){
          $var = $request->all();
          dd($var);
    }


}
