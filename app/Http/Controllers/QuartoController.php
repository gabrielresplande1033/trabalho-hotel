<?php

namespace App\Http\Controllers;

use App\Models\Quarto;
use App\Repositories\QuartoRepository;
use App\Repositories\HotelRepository;
use App\Models\Hotel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


/**
 * Class QuartosController.
 *
 * @package namespace App\Http\Controllers;
 */
class QuartoController extends Controller {

    /**
     * @var QuartoRepository
     */

    protected $quartoRepository;
    protected $hotelRepository;

    /**
     * HotelController constructor.
     * @param QuartoRepository $quartoRepository
     * @param HotelRepository $hotelRepository
     */


    public function __construct(QuartoRepository $quartoRepository) {
        $this->quartoRepository = $quartoRepository;
    }

    public function index() {
        $quartos = $this->quartoRepository->all();

        return view('admin.quarto.index', compact('quartos'));
    }

    public function paginaHotel($id) {
        $hotel = $this->hotelRepository->find($id);

        $quartos = Quarto::all();

        return view('quarto', compact('hotel','quartos'));
    }

    public function paginaReserva($idHotel, $idQuarto){

        $hotel = Hotel::query()->find($idHotel);

        $quarto = Quarto::query()->find($idQuarto);

        $user = Auth::user();

        return view('reserva', compact('hotel', 'quarto', 'user'));
    }

    public function create()
    {
        $hoteis = Hotel::all();

        return view('admin.quarto.create', compact('hoteis'));
    }

    public function store(Request $request) {

        $data = $request->all();


        if($request->hasFile('image') && $request->file('image')->isValid()){
            $name = $data['nome'];

            $extenstion = $request->image->extension();
            $nameFile = "{$name}.{$extenstion}";

            $data['image'] = $nameFile;

            $upload = $request->image->storeAs('public/quartos', $nameFile);

            if(!$upload){
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao realizar upload da imagem');
            }

        }

        $this->quartoRepository->create($data);

        flash('Quarto inserido com sucesso.')->success();
        return redirect()->back();
    }

    public function show($id) {
        $quarto = $this->quartoRepository->find($id);

        $hoteis = Hotel::all();
        return view('admin.quarto.show', compact('quarto','hoteis'));
    }

    public function update(Request $request, $id) {
        $this->quartoRepository->update($request->all(), $id);

        flash('Hotel atualizado com sucesso.')->success();
        return redirect()->back();
    }

    public function destroy(Request $request) {
        try {
            $removido = $this->quartoRepository->delete($request->id);
            return response()->json($removido);
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

}
