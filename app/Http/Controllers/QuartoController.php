<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\QuartoCreateRequest;
use App\Http\Requests\QuartoUpdateRequest;
use App\Repositories\QuartoRepository;
use App\Validators\QuartoValidator;

/**
 * Class QuartosController.
 *
 * @package namespace App\Http\Controllers;
 */
class QuartosController extends Controller
{
    /**
     * @var QuartoRepository
     */
    protected $repository;

    /**
     * @var QuartoValidator
     */
    protected $validator;

    /**
     * QuartosController constructor.
     *
     * @param QuartoRepository $repository
     * @param QuartoValidator $validator
     */
    public function __construct(QuartoRepository $repository, QuartoValidator $validator)
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
        $quartos = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $quartos,
            ]);
        }

        return view('quartos.index', compact('quartos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  QuartoCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(QuartoCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $quarto = $this->repository->create($request->all());

            $response = [
                'message' => 'Quarto created.',
                'data'    => $quarto->toArray(),
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
        $quarto = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $quarto,
            ]);
        }

        return view('quartos.show', compact('quarto'));
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
        $quarto = $this->repository->find($id);

        return view('quartos.edit', compact('quarto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  QuartoUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(QuartoUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $quarto = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Quarto updated.',
                'data'    => $quarto->toArray(),
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
                'message' => 'Quarto deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Quarto deleted.');
    }
}
