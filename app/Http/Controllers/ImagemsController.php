<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ImagemCreateRequest;
use App\Http\Requests\ImagemUpdateRequest;
use App\Repositories\ImagemRepository;
use App\Validators\ImagemValidator;

/**
 * Class ImagemsController.
 *
 * @package namespace App\Http\Controllers;
 */
class ImagemsController extends Controller
{
    /**
     * @var ImagemRepository
     */
    protected $repository;

    /**
     * @var ImagemValidator
     */
    protected $validator;

    /**
     * ImagemsController constructor.
     *
     * @param ImagemRepository $repository
     * @param ImagemValidator $validator
     */
    public function __construct(ImagemRepository $repository, ImagemValidator $validator)
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
        $imagems = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $imagems,
            ]);
        }

        return view('imagems.index', compact('imagems'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ImagemCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(ImagemCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $imagem = $this->repository->create($request->all());

            $response = [
                'message' => 'Imagem created.',
                'data'    => $imagem->toArray(),
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
        $imagem = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $imagem,
            ]);
        }

        return view('imagems.show', compact('imagem'));
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
        $imagem = $this->repository->find($id);

        return view('imagems.edit', compact('imagem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ImagemUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(ImagemUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $imagem = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Imagem updated.',
                'data'    => $imagem->toArray(),
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
                'message' => 'Imagem deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Imagem deleted.');
    }
}
