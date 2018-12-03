<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\HotelImagemCreateRequest;
use App\Http\Requests\HotelImagemUpdateRequest;
use App\Repositories\HotelImagemRepository;
use App\Validators\HotelImagemValidator;

/**
 * Class HotelImagemsController.
 *
 * @package namespace App\Http\Controllers;
 */
class HotelImagemsController extends Controller
{
    /**
     * @var HotelImagemRepository
     */
    protected $repository;

    /**
     * @var HotelImagemValidator
     */
    protected $validator;

    /**
     * HotelImagemsController constructor.
     *
     * @param HotelImagemRepository $repository
     * @param HotelImagemValidator $validator
     */
    public function __construct(HotelImagemRepository $repository, HotelImagemValidator $validator)
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
        $hotelImagems = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $hotelImagems,
            ]);
        }

        return view('hotelImagems.index', compact('hotelImagems'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  HotelImagemCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(HotelImagemCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $hotelImagem = $this->repository->create($request->all());

            $response = [
                'message' => 'HotelImagem created.',
                'data'    => $hotelImagem->toArray(),
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
        $hotelImagem = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $hotelImagem,
            ]);
        }

        return view('hotelImagems.show', compact('hotelImagem'));
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
        $hotelImagem = $this->repository->find($id);

        return view('hotelImagems.edit', compact('hotelImagem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  HotelImagemUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(HotelImagemUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $hotelImagem = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'HotelImagem updated.',
                'data'    => $hotelImagem->toArray(),
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
                'message' => 'HotelImagem deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'HotelImagem deleted.');
    }
}
