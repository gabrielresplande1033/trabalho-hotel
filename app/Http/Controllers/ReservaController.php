<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Validators\ReservaValidator;
use App\Repositories\ReservaRepository;
use App\Models\Reserva;



/**
 * Class ReservasController.
 *
 * @package namespace App\Http\Controllers;
 */
class ReservaController extends Controller {

    /**
     * @var ReservaRepository
     */

    protected $reservaRepository;

    /**
     * ReservaController constructor.
     * @param ReservaRepository $reservaRepository
     */

    public function index() {
        $reservas = Reserva::all();

        return view('admin.reserva.index', compact('reservas'));
    }

    public function store(Request $request){

        $reserva = new Reserva();

        $reserva->create($request->all());

        flash('Reserva efetuada com sucesso.
        Verifique seu email.
        ')->success();
        return redirect()->back();

    }


}
