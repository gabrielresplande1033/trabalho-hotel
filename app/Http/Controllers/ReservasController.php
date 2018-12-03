<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ReservaCreateRequest;
use App\Http\Requests\ReservaUpdateRequest;
use App\Repositories\ReservaRepository;
use App\Validators\ReservaValidator;

/**
 * Class ReservasController.
 *
 * @package namespace App\Http\Controllers;
 */
class ReservasController extends Controller
{
    /**
     * @var ReservaRepository
     */
    protected $repository;

    /**
     * @var ReservaValidator
     */
    protected $validator;

    /**
     * ReservasController constructor.
     *
     * @param ReservaRepository $repository
     * @param ReservaValidator $validator
     */
    public function __construct(ReservaRepository $repository, ReservaValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $reservas = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $reservas,
            ]);
        }

        return view('reservas.index', compact('reservas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ReservaCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(ReservaCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $reserva = $this->repository->create($request->all());

            $response = [
                'message' => 'Reserva created.',
                'data'    => $reserva->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reserva = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $reserva,
            ]);
        }

        return view('reservas.show', compact('reserva'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reserva = $this->repository->find($id);

        return view('reservas.edit', compact('reserva'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ReservaUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(ReservaUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $reserva = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Reserva updated.',
                'data'    => $reserva->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Reserva deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Reserva deleted.');
    }
}
