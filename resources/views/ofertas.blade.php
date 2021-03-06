@extends('layouts.user_app')

@section('content')
<link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
<link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">
<link href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel = "folha de estilo">
<link href = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel = "stylesheet">
<div class="super_container">
    <!-- Home -->

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.jpg"></div>
        <div class="home_content">
            <div class="home_title">our offers</div>
        </div>
    </div>

    <!-- Offers -->

    <div class="offers">
        <!-- Search -->

        <div class="search">
            <div class="search_inner">

                <!-- Search Contents -->

                <div class="container fill_height no-padding">
                    <div class="row fill_height no-margin">
                        <div class="col fill_height no-padding">

                            <!-- Search Tabs -->

                            <div class="search_tabs_container">
                                <div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                    <div style = "float:left;" class="search_tab active d-flex flex-row align-items-center justify-content-lg-center"><img src="images/suitcase.png" alt=""><span>hotels</span></div>
                                </div>
                            </div>

                            <!-- Search Panel -->

                            <div class="search_panel active">
                                <form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                    <div class="search_item">
                                        <div>destination</div>
                                        <input type="text" class="destination search_input" required="required">
                                    </div>
                                    <div class="search_item">
                                        <div>check in</div>
                                        <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                                    </div>
                                    <div class="search_item">
                                        <div>check out</div>
                                        <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                                    </div>
                                    <div class="search_item">
                                        <div>adults</div>
                                        <select name="adults" id="adults_1" class="dropdown_item_select search_input">
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                        </select>
                                    </div>
                                    <div class="search_item">
                                        <div>children</div>
                                        <select name="children" id="children_1" class="dropdown_item_select search_input">
                                            <option>0</option>
                                            <option>02</option>
                                            <option>03</option>
                                        </select>
                                    </div>

                                    <button class="button search_button">search<span></span><span></span><span></span></button>
                                </form>
                            </div>

                            <!-- Search Panel -->

                            <div class="search_panel">
                                <form action="#" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                    <div class="search_item">
                                        <div>destination</div>
                                        <input type="text" class="destination search_input" required="required">
                                    </div>
                                    <div class="search_item">
                                        <div>check in</div>
                                        <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                                    </div>
                                    <div class="search_item">
                                        <div>check out</div>
                                        <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                                    </div>
                                    <div class="search_item">
                                        <div>adults</div>
                                        <select name="adults" id="adults_2" class="dropdown_item_select search_input">
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                        </select>
                                    </div>
                                    <div class="search_item">
                                        <div>children</div>
                                        <select name="children" id="children_2" class="dropdown_item_select search_input">
                                            <option>0</option>
                                            <option>02</option>
                                            <option>03</option>
                                        </select>
                                    </div>
                                    <button class="button search_button">search<span></span><span></span><span></span></button>
                                </form>
                            </div>

                            <!-- Search Panel -->

                            <div class="search_panel">
                                <form action="#" id="search_form_3" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                    <div class="search_item">
                                        <div>destination</div>
                                        <input type="text" class="destination search_input" required="required">
                                    </div>
                                    <div class="search_item">
                                        <div>check in</div>
                                        <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                                    </div>
                                    <div class="search_item">
                                        <div>check out</div>
                                        <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                                    </div>
                                    <div class="search_item">
                                        <div>adults</div>
                                        <select name="adults" id="adults_3" class="dropdown_item_select search_input">
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                        </select>
                                    </div>
                                    <div class="search_item">
                                        <div>children</div>
                                        <select name="children" id="children_3" class="dropdown_item_select search_input">
                                            <option>0</option>
                                            <option>02</option>
                                            <option>03</option>
                                        </select>
                                    </div>
                                    <button class="button search_button">search<span></span><span></span><span></span></button>
                                </form>
                            </div>

                            <!-- Search Panel -->

                            <div class="search_panel">
                                <form action="#" id="search_form_4" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                    <div class="search_item">
                                        <div>destination</div>
                                        <input type="text" class="destination search_input" required="required">
                                    </div>
                                    <div class="search_item">
                                        <div>check in</div>
                                        <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                                    </div>
                                    <div class="search_item">
                                        <div>check out</div>
                                        <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                                    </div>
                                    <div class="search_item">
                                        <div>adults</div>
                                        <select name="adults" id="adults_4" class="dropdown_item_select search_input">
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                        </select>
                                    </div>
                                    <div class="search_item">
                                        <div>children</div>
                                        <select name="children" id="children_4" class="dropdown_item_select search_input">
                                            <option>0</option>
                                            <option>02</option>
                                            <option>03</option>
                                        </select>
                                    </div>
                                    <button class="button search_button">search<span></span><span></span><span></span></button>
                                </form>
                            </div>

                            <!-- Search Panel -->

                            <div class="search_panel">
                                <form action="#" id="search_form_5" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                    <div class="search_item">
                                        <div>destination</div>
                                        <input type="text" class="destination search_input" required="required">
                                    </div>
                                    <div class="search_item">
                                        <div>check in</div>
                                        <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                                    </div>
                                    <div class="search_item">
                                        <div>check out</div>
                                        <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                                    </div>
                                    <div class="search_item">
                                        <div>adults</div>
                                        <select name="adults" id="adults_5" class="dropdown_item_select search_input">
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                        </select>
                                    </div>
                                    <div class="search_item">
                                        <div>children</div>
                                        <select name="children" id="children_5" class="dropdown_item_select search_input">
                                            <option>0</option>
                                            <option>02</option>
                                            <option>03</option>
                                        </select>
                                    </div>
                                    <button class="button search_button">search<span></span><span></span><span></span></button>
                                </form>
                            </div>

                            <!-- Search Panel -->

                            <div class="search_panel">
                                <form action="#" id="search_form_6" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                    <div class="search_item">
                                        <div>destination</div>
                                        <input type="text" class="destination search_input" required="required">
                                    </div>
                                    <div class="search_item">
                                        <div>check in</div>
                                        <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                                    </div>
                                    <div class="search_item">
                                        <div>check out</div>
                                        <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                                    </div>
                                    <div class="search_item">
                                        <div>adults</div>
                                        <select name="adults" id="adults_6" class="dropdown_item_select search_input">
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                        </select>
                                    </div>
                                    <div class="search_item">
                                        <div>children</div>
                                        <select name="children" id="children_6" class="dropdown_item_select search_input">
                                            <option>0</option>
                                            <option>02</option>
                                            <option>03</option>
                                        </select>
                                    </div>
                                    <button class="button search_button">search<span></span><span></span><span></span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Offers -->
        <div class="container">
            <div class="row">
                <div class="col-lg-1 temp_col"></div>
                <div class="col-lg-11">

                    <!-- Offers Sorting -->
                    <div class="offers_sorting_container">
                        <ul class="offers_sorting">
                            <li>
                                <span class="sorting_text">price</span>
                                <i class="fa fa-chevron-down"></i>
                                <ul>
                                    <li class="sort_btn" data-isotope-option='{ "sortBy": "original-order" }' data-parent=".price_sorting"><span>show all</span></li>
                                    <li class="sort_btn" data-isotope-option='{ "sortBy": "price" }' data-parent=".price_sorting"><span>ascending</span></li>
                                </ul>
                            </li>
                            <li>
                                <span class="sorting_text">location</span>
                                <i class="fa fa-chevron-down"></i>
                                <ul>
                                    <li class="sort_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>default</span></li>
                                    <li class="sort_btn" data-isotope-option='{ "sortBy": "name" }'><span>alphabetical</span></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-12">
                    <!-- Offers Grid -->

                    <div class="offers_grid">
                        @foreach($hoteis as $hotel)
                        <!-- Offers Item -->

                        <div class="offers_item rating_4">
                            <div class="row">
                                <div class="col-lg-1 temp_col"></div>
                                <div class="col-lg-3 col-1680-4">
                                    <div class="offers_image_container">
                                        <!-- Image by https://unsplash.com/@kensuarez -->

                                        {{--<img src="{{url("storage/hotels/{$hotel->image}")}}" alt="">--}}

                                        <div class="offers_image_background" style="background-image:url( '{{url("storage/hotels/{$hotel->image}")}}' )"></div>
                                        <div class="offer_name"><a href="single_listing.html">{{$hotel->nome}}</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="offers_content">
                                        <div class="offers_price">R$ {{$hotel->valor}}<span>por noite</span></div>
                                        <p class="offers_text">{{$hotel->descricao}}</p>
                                        <div class="button book_button"><a href="{{ route('hotel.escolhido', $hotel->id) }}">Ver Quartos<span></span><span></span><span></span></a></div>
                                        <div class="offer_reviews">
                                            <div class="offer_reviews_content">
                                                <div class="offer_reviews_title">MUITO BOM</div>
                                                <div class="offer_reviews_subtitle">100 reviews</div>
                                            </div>
                                            <div class="offer_reviews_rating text-center">{{$hotel->nota}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
