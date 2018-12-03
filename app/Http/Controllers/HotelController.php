<?php

namespace App\Http\Controllers;

/**
 * Created by PhpStorm.
 * User: gabriel
 * Date: 03/12/18
 * Time: 13:13
 */


class HotelController extends  Controller{

    public function index() {
        return view('hotel');
    }
}