@extends('layouts.user_app')

@section('content')
    <link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">
    <link href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel = "folha de estilo">
    <link href = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel = "stylesheet">
    <!-- Single Listing -->

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="single_listing">

                    <!-- Hotel Info -->

                    <div class="hotel_info">

                        <!-- Title -->
                        <div style="padding-top: 160px"></div>
                        <div class="hotel_title_container d-flex flex-lg-row flex-column" style="width:100%;height:300px;position:relative;background-repeat: no-repeat;background-size:100%; background-position:center;background-image:url( '{{url("storage/hotels/{$hotel->image}")}}' )">
                            <div class="hotel_title_content">
                                <h1 style="font-size: 80px;text-align: center;position: center; color: black" class="hotel_title">{{$hotel->nome}}</h1>
                            </div>
                            <div class="hotel_title_button ml-lg-auto text-lg-right">
                                <div class="button book_button trans_200"><a href="#">book<span></span><span></span><span></span></a></div>
                            </div>
                        </div>

                        <div class="hotel_info_text">
                            <h3 style="color:black">{{$hotel->endereco}}</h3>

                            <p style="color: black">{{$hotel->descricao}}</p>
                        </div>

                    </div>

                    <h1 style="color:blue">Quartos</h1>

                    <!-- Rooms -->

                    <div class="rooms">

                        <!-- Room -->

                        @foreach($quartos as $quarto)

                        @if($hotel->id == $quarto->hotel_id)

                        <div class="offers">

                        <div class="offers_item rating_4">
                                    <div class="row">
                                        <div class="col-lg-1 temp_col"></div>
                                        <div class="col-lg-3 col-1680-4">
                                            <div class="offers_image_container">
                                                <!-- Image by https://unsplash.com/@kensuarez -->

                                                {{--<img src="{{url("storage/hotels/{$hotel->image}")}}" alt="">--}}

                                                <div class="offers_image_background" style="background-image:url( '{{url("storage/quartos/{$quarto->image}")}}' )"></div>
                                                <div class="offer_name"><a href="single_listing.html">{{$quarto->nome}}</a></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="offers_content">
                                                <div class="offers_price">R$ {{$quarto->precoDiaria}}<span>por noite</span></div>
                                                <p class="offers_text">{{$quarto->descricao}}</p>
                                                <button type="button" class="btn btn-success">Efetuar Reserva</button>
                                                <div class="offer_reviews">
                                                    <div class="offer_reviews_rating text-center">20</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        @endif

                        @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection

