<?php

namespace App\Http\Controllers;
use App\Repositories\HotelRepository;

/**
 * Created by PhpStorm.
 * User: gabriel
 * Date: 03/12/18
 * Time: 13:13
 */


class HotelController extends  Controller{

    /**
     * @var HotelRepository
     */
    protected $hotelRepository;

    /**
     * HotelController constructor.
     * @param HotelRepository $hotelRepository
     */
    public function __construct(HotelRepository $hotelRepository) {
        $this->hotelRepository = $hotelRepository;
    }

    public function index() {
        return view('hotel');
    }

    public function store() {
        $hoteis = $this->hotelRepository->all();

        dd($hoteis);
    }
}